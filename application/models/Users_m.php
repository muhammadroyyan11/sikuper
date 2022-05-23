<?php defined('BASEPATH') or exit('No direct script access allowed');

class Users_m extends CI_Model
{

    public function get()
    {
        $query = $this->db->get('tbl_user');
        return $query;
    }

    // public function add($post)
    // {
    //     $params['nama_jenis'] = $post['nama_jenis_perumahan'];
    //     $this->db->insert('tbl_jenis_perumahan', $params);
    // }

    public function add($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function del($id)
    {
        $this->db->where('id_jenis_perumahan', $id);
        $this->db->delete('tbl_jenis_perumahan');
    }

    public function edit($post)
    {
        $params['name'] = $post['name_loket'];
        $params['keterangan'] = $post['keterangan'];
        $this->db->where('loket_id', $post['loket_id']);
        $this->db->update('loket', $params);
    }
}