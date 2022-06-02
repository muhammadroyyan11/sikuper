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
        is_admin();
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
        $berita->tgl_berita = null;
        $berita->foto_berita = null;
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
        $where = array('id_berita' => $id_berita);
        $this->berita->del('tbl_berita', $where);
        redirect('admin/berita');
    }

    public function proses()
    {
        // $tanggal = date("Y-m-d");
        // $login = userdata('id_user');
        $post = $this->input->post(null, TRUE);

        $config['upload_path']          = './assets/uploads/berita/';
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
                    $this->berita->add($post);
                    if ($this->db->affected_rows() > 0) {
                        set_pesan('succes', 'Data Berhasil Dismpan');
                    }
                    var_dump($post);
                    redirect('admin/berita');
                } else {
                    $error = $this->upload->display_error();
                    echo $error;
                }
            }
        }
        if (isset($_POST['edit'])) {
            if (@$_FILES['image']['name'] != null) {
                if ($this->upload->do_upload('image')) {
                    $post['image'] = $this->upload->data('file_name');
                    // $this->berita->edit($post);
                    if ($this->db->affected_rows() > 0) {
                        set_pesan('succes', 'Data Berhasil Dismpan');
                    }
                    var_dump($post);
                    // redirect('admin/berita');
                } else {
                    $error = $this->upload->display_error();
                    echo $error;
                }
            } else {
                $post['image'] = null;
                $this->berita->edit($post);
                if ($this->db->affected_rows() > 0) {
                    set_pesan('succes', 'Data Berhasil Dismpan');
                }
                redirect('admin/berita');
            }
        }
    }
}
