<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_model', 'auth');
        $this->load->model('Base_model', 'base');
    }

    private function _has_login()
    {
        if ($this->session->has_userdata('login_session')) {
            redirect('admin/dashboard');
        }
    }

    public function index()
    {
        $this->_has_login();

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Aplikasi';
            $this->template->load('tempauth', 'auth/auth', $data);
        } else {
            $input = $this->input->post(null, true);

            $cek_username = $this->auth->cek_username($input['username']);
            if ($cek_username > 0) {
                $password = $this->auth->get_password($input['username']);
                if (password_verify($input['password'], $password)) {
                    $user_db = $this->auth->userdata($input['username']);

                    $userdata = [
                        'user'  => $user_db['id_user'],
                        'role'  => $user_db['role'],
                        'timestamp' => time()
                    ];
                    $this->session->set_userdata('login_session', $userdata);
                    if ($user_db['role'] == 1) {
                        redirect('admin/dashboard');
                    }else {
                        redirect('home');
                    }
                } else {
                    set_pesan('password salah', false);
                    redirect('auth');
                }
            } else {
                set_pesan('username belum terdaftar', false);
                redirect('auth');
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('login_session');

        set_pesan('anda telah berhasil logout');
        redirect('home');
    }

    public function register()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[tbl_user.username]|alpha_numeric');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|trim');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Buat Akun';
            $this->template->load('tempauth', 'auth/register', $data);
        } else {
            $input = $this->input->post(null, true);
            unset($input['password2']);
            $input['password']      = password_hash($input['password'], PASSWORD_DEFAULT);
            $input['role']          = '2';
            $input['foto_profil']   = 'user.png';

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
}
