<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function __construct()
	{
		parent::__construct();
		// cek_login();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('Auth_model', 'auth');
		$this->load->model('Users_m', 'user');
		$this->load->library('pagination');
	}

    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check');
        if ($this->input->post('password')) {
            $this->form_validation->set_rules('password', 'Password', 'min_length[5]');
            $this->form_validation->set_rules(
                'password2',
                'Password Confirmation',
                'matches[password]',
                array('matches' => '%s tidak sesuai')
            );
        }
        if ($this->input->post('password2')) {
            $this->form_validation->set_rules('password', 'Password', 'min_length[5]');
            $this->form_validation->set_rules(
                'password2',
                'Password Confirmation',
                'matches[password]',
                array('matches' => '%s tidak sesuai')
            );
        }
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        $this->form_validation->set_message('required', '%s Masih Kosong');
        $this->form_validation->set_message('min_length', '%s Minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '%s sudah ada');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'PROFIL';
            $this->load->view('users/profil', $data);
        } else {
            // $post = $this->input->post(null, TRUE);
            // var_dump($post);
            // // $this->user->edit($post);
            // if ($this->db->affected_rows() > 0) {
            //     echo "<script>alert('Data Berhasil Di Simpan');</script>";
            // }
            // echo "<script>window.location='" . site_url('user') . "';</script>";
            $input = $this->input->post(null, true);
            unset($input['password2']);
            $input['password']      = password_hash($input['password'], PASSWORD_DEFAULT);
            // $input['role']          = '2';
            // $input['foto_profil']   = 'user.jpg';

            $query = $this->base->insert('tbl_user', $input);
            if ($query) {
                set_pesan('daftar berhasil. Silahkan Login.');
                redirect('auth');
            } else {
                set_pesan('gagal menyimpan ke database', false);
                redirect('register');
            }
        }
    }

    public function proses()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check');
        if ($this->input->post('password')) {
            $this->form_validation->set_rules('password', 'Password', 'min_length[5]');
            $this->form_validation->set_rules(
                'password2',
                'Password Confirmation',
                'matches[password]',
                array('matches' => '%s tidak sesuai')
            );
        }
        if ($this->input->post('password2')) {
            $this->form_validation->set_rules('password', 'Password', 'min_length[5]');
            $this->form_validation->set_rules(
                'password2',
                'Password Confirmation',
                'matches[password]',
                array('matches' => '%s tidak sesuai')
            );
        }
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        $this->form_validation->set_message('required', '%s Masih Kosong');
        $this->form_validation->set_message('min_length', '%s Minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '%s sudah ada');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'PROFIL';
            $this->load->view('users/profil', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_m->edit($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data Berhasil Di Simpan');</script>";
            }
            echo "<script>window.location='" . site_url('user') . "';</script>";
        }
    }
}
