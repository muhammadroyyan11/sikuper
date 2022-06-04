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
        }
    }

    private function _validasi($mode)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('role', 'Role', 'required|trim');

        if ($mode == 'add') {
            $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[tbl_user.username]|alpha_numeric');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]|trim');
            $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]|trim');
        } else {
            $db = $this->admin->get('tbl_user', ['id_user' => $this->input->post('id_user', true)]);
            $username = $this->input->post('username', true);

            $uniq_username = $db['username'] == $username ? '' : '|is_unique[tbl_user.username]';

            $this->form_validation->set_rules('username', 'Username', 'required|trim|alpha_numeric' . $uniq_username);
        }
    }

    public function add()
    {
        $this->_validasi('add');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Tambah User";
            $this->template->load('template', 'users/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'nama'          => $input['nama'],
                'username'      => $input['username'],
                'alamat'        => $input['alamat'],
                'role'          => $input['role'],
                'password'      => password_hash($input['password'], PASSWORD_DEFAULT),
                'foto_profil'          => 'user.jpg'
            ];

            if ($this->user->insert('tbl_user', $input_data)) {
                set_pesan('data berhasil disimpan.');
                redirect('user');
            } else {
                set_pesan('data gagal disimpan', false);
                // redirect('user/add');
            }
        }
    }

    public function edit($id)
    {
        // $id = encode_php_tags($getId);
        $this->_validasi('edit');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Edit User";
            $data['user'] = $this->base->get('user', ['id_user' => $id]);
            $this->template->load('template', 'user/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'nama'          => $input['nama'],
                'username'      => $input['username'],
                'email'         => $input['email'],
                'no_telp'       => $input['no_telp'],
                'role'          => $input['role']
            ];

            if ($this->base->update('user', 'id_user', $id, $input_data)) {
                set_pesan('data berhasil diubah.');
                redirect('user');
            } else {
                set_pesan('data gagal diubah.', false);
                redirect('user/edit/' . $id);
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
