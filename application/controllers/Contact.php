<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        // cek_login();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Auth_model', 'auth');
        $this->load->model('Base_model', 'base');
		$this->load->library('pagination');
    }
	 
	public function index()
	{
		$data['title'] = 'Kontak kami';
		
		$this->template->load('client/template', 'client/contact/contact', $data);
	}

	public function send_message()
	{
		$input = $this->input->post(null, true);

        $cek = $this->_checkEmail($input['email']);
        
        var_dump($cek);
        if($cek){
		$data = [
    			'name' => $input['name'],
    			'phone' => $input['phone'],
    			'email' => $input['email'],
    			'message' => $input['message'],
    			'date_created' => date("Y-m-d H:i:s")
    		];
    
    		$this->_sendEmail();
    		$this->db->insert('contact', $data);
    
    		$this->session->set_flashdata('flash-data', 'Berhasil Mengirim, Terima Kasih');
    		redirect('contact');
        }else{
            redirect('contact');
        }
	}

	private function _sendEmail()
	{
		
		$input = $this->input->post(null, true);
		
		$cek = $this->_checkEmail($input['email']);
		
		if($cek){       
    		$admin_email = 'royyanmz87@gmail.com';
    		
    		$config = [
    			'protocol'  => 'smtp',
    			'smtp_host' => 'ssl://mail.kofluckroastery.com',
    			'smtp_user' => 'noreply@kofluckroastery.com',
    			'smtp_pass' => '212Kofluck',
    			'smtp_port' => 465,
    			'mailtype'  => 'html',
    			'charset'   => 'utf-8',
    			'newline'   => "\r\n"
    		];
    
    		$this->email->initialize($config);
    
    		$this->email->from('noreply@kofluckroastery.com', 'Kofluck Roastery ID');
    		$data = array(
    
    			'name' => $input['name'],
    			'phone' => $input['phone'],
    			'email' => $input['email'],
    			'message' => $input['message'],
    		);
    		$this->email->to($admin_email);
    		$this->email->subject('Account Verification');
    		$body = $this->load->view('email/contact', $data, TRUE);
    		//$this->email->message('Click this link to verify you account : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>');
    		$this->email->message($body);
    
    
    		if ($this->email->send()) {
    			return true;
    		} else {
    			echo $this->email->print_debugger();
    			die;
    		}
		}
	}
	
	public function _checkEmail($mail) 
	{
	    $gd = $this->u->getWhere('contact', 'email', $mail)->row();

        $date1 = strtotime(date("Y-m-d H:i:s"));
        $date2 = strtotime(date($gd->date_created));
            
	    if(date("i",$date1 - $date2) > 10){
            return TRUE;
	    }else{
	        return FALSE;
        }
    }
}
