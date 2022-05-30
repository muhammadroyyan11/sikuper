<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JenisPerumahan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        cek_login();     
        is_admin();  
        $this->load->model('JenisPerumahan_m', 'jenis');
        $this->load->library('form_validation');
    }

    public function index()
    {

        // $data['title'] = 'Tambah Jenis Perumahan';
        $data['title'] = 'Jenis Perumahan';
        $data['jenis'] = $this->jenis->get();
        $this->template->load('template', 'jenis_perumahan/data', $data);
    }

    public function edit($id_jenis_perumahan)
    {
        $post = $this->input->post(null, true);
        $id = $this->jenis->get($id_jenis_perumahan)->row();

        $data['title'] = 'Edit Jenis Perumahan';
        $data['row'] = $id;
        $this->template->load('template', 'jenis_perumahan/form', $data);
    }

    public function edit2($id_jenis_perumahan)
    {
        $post = $this->input->post(null, TRUE);
        // $id_jeniss_perumahan = $post['id_jenis_perumahan'];
        $this->jenis->edit($post);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('succes', 'Data Berhasil Disimpan');
        }
    }

    public function proses()
    {
        $post = $this->input->post(null, TRUE);
        $this->jenis->edit($post);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('succes', 'Data Berhasil Disimpan');
        }

        redirect('admin/jenisPerumahan');
    }

    public function del($id_jenis_perumhan)
    {

        $where=array('id_jenis_perumahan' => $id_jenis_perumhan);
		$this->base_model->del('tbl_jenis_perumahan', $where);
		redirect('admin/jenisPerumahan');
    }
}
