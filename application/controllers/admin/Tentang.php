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

    public function proses()
    {
        // $tanggal = date("Y-m-d");
        // $login = userdata('id_user');
        if (isset($_POST['add'])) {
            $config['upload_path']          = './assets/uploads/tentang/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['max_size']             = 5000;
            $config['max_width']            = 10000;
            $config['max_height']           = 10000;
            $config['file_name']            = 'berita-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')) {
                // $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Format gambar bukan PNG. </div>');

                // redirect('campaign/add');
                $gambar = $this->upload->data();
                $gambar =  'tentang-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
                $tentang = $this->input->post('tentang_kami');


                $data = array(
                    'tentang_kami' => $tentang,
                    'foto_berita' => $gambar,

                );
                var_dump($data);
                // $this->berita->tambah('tbl_berita', $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Data Berhasil Ditambahkan! </div>');
                // redirect('admin/berita');
            } else {

                $gambar = $this->upload->data();
                $gambar =  'tentang-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
                $tentang = $this->input->post('tentang_kami');


                $data = array(
                    'tentang_kami' => $tentang,
                    'foto' => $gambar,

                );
                // var_dump($data);
                $this->tentang->tambah($data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Data Berhasil Ditambahkan! </div>');

                redirect('admin/tentang');
            }
        }
        if (isset($_POST['edit'])) {
            echo 'ok';
        }
    }
}
