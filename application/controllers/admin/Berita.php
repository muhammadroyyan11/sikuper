<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
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

    function __construct()
    {
        parent::__construct();
        cek_login();     
        // is_admin();  
        $this->load->model('Berita_m', 'berita');
    }

    public function index()
    {
        $data['title'] = 'Data Berita';
        $data['berita'] = $this->berita->get();
        $this->template->load('template', 'berita/data', $data);
    }

    public function add()
    {
        $berita = new stdClass();
        $berita->id_berita = null;
        $berita->judul = null;
        $berita->isi = null;
        $data = array(
            'title' => 'Tambah Data Berita',
            'page' => 'add',
            'row' => $berita
        );
        $this->template->load('template', 'berita/add', $data);
    }

    public function edit($id_berita)
    {
        $berita = $this->berita->get($id_berita)->row();
        $data = array(
            'title' => 'Edit Data Berita',
            'page' => 'edit',
            'row' => $berita
        );

        $this->template->load('template', 'berita/add', $data);
    }

    public function del($id_berita)
    {
        $where=array('id_berita' => $id_berita);
		$this->berita->del('tbl_berita',$where);
		redirect('admin/berita');
    }

    public function proses()
    {
        // $tanggal = date("Y-m-d");
        // $login = userdata('id_user');
        if (isset($_POST['add'])) {
            $config['upload_path']          = './assets/uploads/berita/';
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
                $gambar =  'berita-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
                $judul = $this->input->post('judul');
                $isi = $this->input->post('isi');


                $data = array(
                    'judul' => $judul,
                    'isi' => $isi,
                    'foto_berita' => $gambar,

                );
                var_dump($data);
                // $this->berita->tambah('tbl_berita', $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Data Berhasil Ditambahkan! </div>');
                // redirect('admin/berita');
            } else {

                $gambar = $this->upload->data();
                $gambar =  $gambar['file_name'];
                $judul = $this->input->post('judul');
                $isi = $this->input->post('isi');
                $date = date('Y-m-d');


                $data = array(
                    'judul' => $judul,
                    'isi' => $isi,
                    'foto_berita' => $this->upload->data('file_name'),
                    'tgl_berita' => $date

                );
                // var_dump($data);
                $this->berita->tambah('tbl_berita', $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Data Berhasil Ditambahkan! </div>');

                redirect('admin/berita');
            }
        }
        if (isset($_POST['edit'])) {
            echo 'ok';
        }
    }
}
