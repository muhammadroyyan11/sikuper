<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DetailPerumahan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        cek_login();
        is_admin();
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
        $perumahahan->lokasi = '-- Pilih Lokasi --';
        $perumahahan->ket_perumahan = null;
        $perumahahan->fasilitas = null;
        $perumahahan->alamat = null;
        $perumahahan->luas_tanah = null;
        $perumahahan->tentang_perumahan = null;
        $perumahahan->ketersediaan = null;
        $perumahahan->nama_pengembang = null;
        $perumahahan->total_unit_perumahan = null;
        $perumahahan->id_jenis_perumahan = null;
        $perumahahan->foto_perumahan = null;
        $perumahahan->nama_jenis = '-- Pilih Jenis Perumahan --';
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

    public function edit($id_perumahan)
    {
        $detail = $this->detail->getJoin($id_perumahan)->row();
        $jenis = $this->detail->getJenis();

        $data = array(
            'title' => 'Edit data perumahan',
            'page' => 'edit',
            'jenis' => $jenis,
            'row' => $detail
        );
        $this->template->load('template', 'detail/form', $data);
    }

    public function proses()
    {
        $post = $this->input->post(null, TRUE);

        $config['upload_path']          = './assets/uploads/perumahan/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 5000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;
        $config['file_name']            = $this->input->post('nama_perumahan') . date('ymd') . '-' . substr(md5(rand()), 0, 10);

        $this->load->library('upload', $config);

        if (isset($_POST['add'])) {
            if (@$_FILES['image']['name'] != null) {
                if ($this->upload->do_upload('image')) {
                    $post['image'] = $this->upload->data('file_name');
                    $this->detail->add($post);
                    if ($this->db->affected_rows() > 0) {
                        set_pesan('succes', 'Data Berhasil Dismpan');
                    }
                    var_dump($post);
                    redirect('admin/detailPerumahan');
                } else {
                    $error = $this->upload->display_error();
                    echo $error;
                }
            }
        }
        if (isset($_POST['edit'])) {
            if (@$_FILES['image']['name'] != null) {
                if ($this->upload->do_upload('image')) {
                    $item = $this->detail->get($post['id_perumahan'])->row();
                    if ($item->foto_perumahan != null) {
                        $target_file = './assets/uploads/perumahan/' . $item->foto_perumahan;
                        unlink($target_file);
                    }
                    $post['image'] = $this->upload->data('file_name');
                    $this->detail->edit($post);
                    if ($this->db->affected_rows() > 0) {
                        set_pesan('succes', 'Data Berhasil Dismpan');
                    }
                    var_dump($post);
                    // redirect('admin/DetailPerumahan');
                } else {
                    $error = $this->upload->display_error();
                    echo $error;
                }
            } else {
                $post['image'] = null;
                // var_dump($post);
                $this->detail->edit($post);
                if ($this->db->affected_rows() > 0) {
                    set_pesan('succes', 'Data Berhasil Dismpan');
                }
                redirect('admin/DetailPerumahan');
            }
        }
    }

    public function del($id_perumahan)
    {

        $where = array('id_perumahan' => $id_perumahan);
        $this->detail->del('tbl_perumahan', $where);
        redirect('admin/detailPerumahan');
    }
}
