<?php defined('BASEPATH') or exit('No direct script access allowed');

class Berita_m extends CI_Model
{

    // public function get()
    // {
    //     $query = $this->db->get('tbl_berita');
    //     return $query;
    // }

    // public function add($post)
    // {
    //     $params['nama_jenis'] = $post['nama_jenis_perumahan'];
    //     $this->db->insert('tbl_jenis_perumahan', $params);
    // }

    function get($id = null)
    {   
        $this->db->select('*');
        $this->db->from('tbl_berita');
        if ($id != null) {
           $this->db->where('id_berita !=', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'judul' => $post['judul'],
            'isi' => $post['isi'],
            'tgl_berita' => date('Y m d'),
            'foto_berita' => $post['image']
        ];
        $this->db->insert('tbl_berita', $params);
    }

    public function tambah($table, $data)
    {
        $this->db->insert($table, $data);
    }

    function check_judul($code, $id = null)
    {
        $this->db->from('tbl_berita');
        $this->db->where('judul', $code);
        if ($id != null) {
           $this->db->where('id_berita !=', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function del($id)
    {
        $this->db->where('id_jenis_perumahan', $id);
        $this->db->delete('tbl_jenis_perumahan');
    }

    public function insert($data, $batch = false)
    {
        return $batch ? $this->db->insert_batch('tbl_berita', $data) : $this->db->insert('tbl_berita' , $data);
    }

    public function edit($post)
    {
        $params['name'] = $post['name_loket'];
        $params['keterangan'] = $post['keterangan'];
        $this->db->where('loket_id', $post['loket_id']);
        $this->db->update('loket', $params);
    }
}