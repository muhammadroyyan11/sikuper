<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogg extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
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
		// START PAGINATION
		$jumlah_data = $this->base->count('posting');

		$config['base_url'] = base_url() . 'blogg/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 1;
		$from = $this->uri->segment(3);

		// TAMPILAN NOMER PAGINATION
		// $config['full_tag_open'] = '<div class="pagination flex-m flex-w p-t-26">';
		// $config['full_tag_close'] = '</div>';

		// // $config['first_link'] = 'First';
		// $config['first_tag_open'] = '<a href="#" class="item-pagination flex-c-m trans-0-4">';
		// $config['first_tag_close'] = '</a>';

		// // $config['last_link'] = 'Last';
		// $config['last_tag_open'] = '<a href="#" class="item-pagination flex-c-m trans-0-4">';
		// $config['last_tag_close'] = '</a>';

		$config['cur_tag_open'] = '<a href="#" class="item-pagination flex-c-m trans-0-4  active-pagination">';
		$config['cur_tag_close'] = '</a>';

		$config['cur_tag_open'] = '<a href="#" class="item-pagination flex-c-m trans-0-4  active-pagination">';
		$config['cur_tag_close'] = '</a>';

		$config['attributes'] = array('class' => 'item-pagination flex-c-m trans-0-4');

		$this->pagination->initialize($config);
		// END PAGINATION

		// $data['blog'] = $this->base_model->get_join()->result();
		$data['kartikel'] = $this->base_model->get('kartikel')->result();

		$data['blog'] = $this->base->get_join('posting',$config['per_page'],$from);

		
		$this->template->load('client/template', 'client/blog/blogg', $data);
	}

    public function read($seo)
    {
        
    }
}
