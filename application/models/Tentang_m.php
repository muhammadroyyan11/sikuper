<?php defined('BASEPATH') or exit('No direct script access allowed');

class Tentang_m extends CI_Model
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
        $this->db->from('tbl_tentang_kami');
        if ($id != null) {
           $this->db->where('id_tentangKami', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'tentang_kami' => $post['tentang_kami'],
            'foto' => $post['image']
        ];
        $this->db->insert('tbl_tentang_kami', $params);
    }

    public function tambah($data)
    {
        $this->db->insert('tbl_tentang_kami', $data);
    }

    public function del($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function insert($data, $batch = false)
    {
        return $batch ? $this->db->insert_batch('tbl_tentang_kami', $data) : $this->db->insert('tbl_tentang_kami' , $data);
    }

    public function edit($post)
    {
        $params = [
            'tentang_kami' => $post['tentang_kami']
        ];
        if ($post['image'] != null) {
            $params['foto'] = $post['image'];
        }
        $this->db->update('tbl_tentang_kami', $params);
    }
}