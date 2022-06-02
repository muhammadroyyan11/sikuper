<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        is_admin();
        date_default_timezone_set('Asia/Jakarta');
        // // $this->load->model('Auth_model', 'auth');
        // $this->load->model('Admin_model', 'admin');
        $this->load->model('Tentang_m', 'tentang');
    }

    public function index()
    {
        $data['title'] = "Tentang Kami";
        $data['tentang'] = $this->tentang->get();
        $this->template->load('template', 'tentang/data', $data);
    }

    public function add()
    {
        $tentang = new stdClass();
        $tentang->id_tentangKami = null;
        $tentang->tentang_kami = null;
        $data = array(
            'title' => 'Tambah Data tentang',
            'page' => 'add',
            'row' => $tentang
        );
        $this->template->load('template', 'tentang/form', $data);
    }

    public function edit($id_tentangKami)
    {
        $tentang = $this->tentang->get($id_tentangKami)->row();
        $data = array(
            'title' => 'Edit Data tentang',
            'page' => 'edit',
            'row' => $tentang
        );
        $this->template->load('template', 'tentang/form', $data);
    }

    public function del($id_tentangKami)
    {
        $where=array('id_tentangKami' => $id_tentangKami);
		$this->base_model->del('tbl_tentang_kami', $where);
		redirect('admin/tentang');
    }

    public function proses()
    {
        // $tanggal = date("Y-m-d");
        // $login = userdata('id_user');
        $post = $this->input->post(null , TRUE);
        $config['upload_path']          = './assets/uploads/tentang/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 5000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;
        $config['file_name']            = 'berita-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

        $this->load->library('upload', $config);

        if (isset($_POST['add'])) {
            if (@$_FILES['image']['name'] != null) {
                if ($this->upload->do_upload('image')) {
                    $post['image'] = $this->upload->data('file_name');
                    $this->tentang->add($post);
                    if ($this->db->affected_rows() > 0) {
                        set_pesan('succes', 'Data Berhasil Dismpan');
                    }
                    // var_dump($post);
                    // redirect('admin/tentang');
                } else {
                    $error = $this->upload->display_error();
                    echo $error;
                }
            }
        }
        if (isset($_POST['edit'])) {
            if (@$_FILES['image']['name'] != null) {
                if ($this->upload->do_upload('image')) {
                    $item = $this->tentang->get($post['id_tentangKami'])->row();
                    if ($item->foto != null) {
                        $target_file = './assets/uploads/tentang/' . $item->foto;
                        unlink($target_file);
                    }
                    $post['image'] = $this->upload->data('file_name');
                    $this->tentang->edit($post);
                    if ($this->db->affected_rows() > 0) {
                        set_pesan('succes', 'Data Berhasil Dismpan');
                    }
                    // var_dump($post);
                    redirect('admin/tentang');
                } else {
                    $error = $this->upload->display_error();
                    echo $error;
                }
            } else {
                $post['image'] = null;
                $this->tentang->edit($post);
                if ($this->db->affected_rows() > 0) {
                    set_pesan('succes', 'Data Berhasil Dismpan');
                }
                redirect('admin/tentang');
            }
        }
    }
}
