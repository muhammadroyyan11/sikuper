<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DetailPerumahan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        // cek_login();     
        // is_admin();  
        $this->load->model('detail_m', 'detail');
        $this->load->model('jenisPerumahan_m', 'jenis');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Data Detail Perumahan';
        $data['detail'] = $this->detail->getJoin();
        $this->template->load('template', 'detail/data', $data);
    }

    public function add()
    {
        $perumahahan = new stdClass();
        $perumahahan->id_perumahahan = null;
        $perumahahan->nama_perumahan = null;
        $perumahahan->lokasi = null;
        $perumahahan->ket_perumahan = null;
        $perumahahan->fasilitas = null;
        $perumahahan->alamat = null;
        $perumahahan->luas_tanah = null;
        $perumahahan->tentang_perumahan = null;
        $perumahahan->ketersediaan = null;
        $perumahahan->nama_pengembang = null;
        $perumahahan->total_unit_perumahan = null;
        $perumahahan->id_jenis_perumahan = null;
        $jenis = $this->detail->getJenis();
        $data = array(
            'title' => 'Tambah data perumahan',
            'page' => 'add',
            'jenis' => $jenis,
            'row' => $perumahahan
        );
        // $data['detail'] = $this->detail->getJoin();
        $this->template->load('template', 'detail/form', $data);
    }

    public function proses()
    {
        if (isset($_POST['add'])) {
            $config['upload_path']          = './assets/uploads/perumahan/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['max_size']             = 5000;
            $config['max_width']            = 10000;
            $config['max_height']           = 10000;
            $config['file_name']            = $this->input->post('nama_perumahan') . date('ymd') . '-' . substr(md5(rand()), 0, 10);

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')) {
                // $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Format gambar bukan PNG. </div>');

                // redirect('campaign/add');
                $gambar = $this->upload->data();
                $gambar =  'berita-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
                $nama_perumahan = $this->input->post('nama_perumahan');
                $lokasi = $this->input->post('lokasi');
                $ket_perumahan = $this->input->post('ket_perumahan');
                $fasilitas = $this->input->post('fasilitas');
                $alamat = $this->input->post('alamat');
                $luas_tanah = $this->input->post('luas_tanah');
                $tentang_perumahan = $this->input->post('tentang_perumahan');
                $ketersediaan = $this->input->post('ketersediaan');
                $nama_pengembang = $this->input->post('nama_pengembang');
                $total_unit_perumahan = $this->input->post('total_unit_perumahan');
                $id_jenis_perumahan = $this->input->post('jenis_perumahan');


                $data = array(
                    'nama_perumahan' => $nama_perumahan,
                    'lokasi' => $lokasi,
                    'ket_perumahan' => $ket_perumahan,
                    'fasilitas' => $fasilitas,
                    'alamat' => $alamat,
                    'luas_tanah' => $luas_tanah,
                    'tentang_perumahan' => $tentang_perumahan,
                    'ketersediaan' => $ketersediaan,
                    'nama_pengembang' => $nama_pengembang,
                    'total_unit_perumahan' => $total_unit_perumahan,
                    'id_jenis_perumahan' => $id_jenis_perumahan,
                    'foto_perumahan' => $gambar,

                );
                var_dump($data);
                // $this->berita->tambah('tbl_berita', $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Data Berhasil Ditambahkan! </div>');
                // redirect('admin/berita');
            } else {

                $gambar = $this->upload->data();
                $gambar =  $gambar['file_name'];
                $nama_perumahan = $this->input->post('nama_perumahan');
                $lokasi = $this->input->post('lokasi');
                $ket_perumahan = $this->input->post('ket_perumahan');
                $fasilitas = $this->input->post('fasilitas');
                $alamat = $this->input->post('alamat');
                $luas_tanah = $this->input->post('luas_tanah');
                $tentang_perumahan = $this->input->post('tentang_perumahan');
                $ketersediaan = $this->input->post('ketersediaan');
                $nama_pengembang = $this->input->post('nama_pengembang');
                $total_unit_perumahan = $this->input->post('total_unit_perumahan');
                $id_jenis_perumahan = $this->input->post('jenis_perumahan');


                $data = array(
                    'nama_perumahan' => $nama_perumahan,
                    'lokasi' => $lokasi,
                    'ket_perumahan' => $ket_perumahan,
                    'fasilitas' => $fasilitas,
                    'alamat' => $alamat,
                    'luas_tanah' => $luas_tanah,
                    'tentang_perumahan' => $tentang_perumahan,
                    'ketersediaan' => $ketersediaan,
                    'nama_pengembang' => $nama_pengembang,
                    'total_unit_perumahan' => $total_unit_perumahan,
                    'id_jenis_perumahan' => $id_jenis_perumahan,
                    'foto_perumahan' => $gambar,

                );
                // var_dump($data);
                $this->detail->tambah('tbl_perumahan', $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Data Berhasil Ditambahkan! </div>');

                redirect('admin/berita');
            }
        }
        if (isset($_POST['edit'])) {
            echo 'ok';
        }
    }
}
