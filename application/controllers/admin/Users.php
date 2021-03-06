<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        if (!is_admin()) {
            redirect('home');
        }
        $this->load->library('form_validation');
        $this->load->model('Users_m', 'users');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        if (userdata('role') == 1) {
            $data['title'] = "User Management";
            $data['users'] = $this->users->get(userdata('id_user'));
            $this->template->load('template', 'users/data', $data);
        } else {
            redirect('home');
        }
    }

    private function _validasi($mode)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        // $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required|trim');
        $this->form_validation->set_rules('role', 'Role', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[tbl_user.username]|alpha_numeric');

        if ($mode == 'add') {
            // $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[tbl_user.username]|alpha_numeric');
            // $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]|trim');
            $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]|trim');
        } else {
            $db = $this->users->getEdit('tbl_user', ['id_user' => $this->input->post('id_user', true)]);
            $username = $this->input->post('username', true);
            $email = $this->input->post('email', true);

            // $uniq_username = $db['username'] == $username ? '' : '|is_unique[tbl_user.username]';
            // $uniq_email = $db['email'] == $email ? '' : '|is_unique[user.email]';

            // $this->form_validation->set_rules('username', 'Username', 'required|trim|alpha_numeric' . $uniq_username);
            // $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email' . $uniq_email);
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
                // 'email'         => $input['email'],
                'alamat'        => $input['alamat'],
                'role'          => $input['role'],
                'password'      => password_hash($input['password'], PASSWORD_DEFAULT),
                'foto_profil'          => 'user.png'
            ];

            if ($this->users->insert('tbl_user', $input_data)) {
                set_pesan('data berhasil disimpan.');
                redirect('admin/users');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('users/add');
            }
        }
    }

    public function edit($getId)
    {
        // $id = encode_php_tags($getId);
        // $this->_validasi('edit');

        $data['title'] = "Edit User";
        $data['row'] = $this->users->getEdit('tbl_user', ['id_user' => $getId])->row();
        $this->template->load('template', 'users/edit', $data);
    }

    public function prosesEdit()
    {
        $post = $this->input->post(null, TRUE);
        // $id_jeniss_perumahan = $post['id_jenis_perumahan'];
        $this->users->edit($post);

        if ($this->db->affected_rows() > 0) {
            set_pesan('Data berhasil diedit.');
        }
        redirect('admin/users');
    }

    public function del($id)
    {
        if ($this->users->delete('tbl_user', 'id_user', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('admin/users');
    }

    public function toggle($getId)
    {
        // $id = encode_php_tags($getId);
        $status = $this->users->get();
        $toggle = $status ? 0 : 1; //Jika user aktif maka nonaktifkan, begitu pula sebaliknya
        $pesan = $toggle ? 'user diaktifkan.' : 'user dinonaktifkan.';

        if ($this->users->update('user', 'id_user', $getId, ['is_active' => $toggle])) {
            set_pesan($pesan);
        }
        redirect('user');
    }
}
