<?php defined('BASEPATH') or exit('No direct script access allowed');

class Detail_m extends CI_Model
{

    function get($id = null)
    {   
        $this->db->select('*');
        $this->db->from('tbl_perumahan');
        if ($id != null) {
           $this->db->where('id_perumahan !=', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function getPerumahan($id_perumahan)
    {
        $this->db->select('*');
        $this->db->from('tbl_perumahan');
        $this->db->join('tbl_jenis_perumahan', 'tbl_jenis_perumahan.id_jenis_perumahan = tbl_perumahan.id_jenis_perumahan');
        $this->db->where('id_perumahan', $id_perumahan);
        return $this->db->get()->row();
    }

    public function getJenis()
    {
        // $login = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('tbl_jenis_perumahan');
        $query = $this->db->get();
        return $query;
    }

    public function getJoin()
    {
        $this->db->select('*');
        $this->db->from('tbl_perumahan');
        $this->db->join('tbl_jenis_perumahan', 'tbl_jenis_perumahan.id_jenis_perumahan = tbl_perumahan.id_jenis_perumahan');
        return $this->db->get();
    }

    public function getJoinHome()
    {
        $this->db->select('*');
        $this->db->from('tbl_perumahan');
        $this->db->join('tbl_jenis_perumahan', 'tbl_jenis_perumahan.id_jenis_perumahan = tbl_perumahan.id_jenis_perumahan');
        $this->db->limit(5);
        return $this->db->get();
    }

    public function tambah($table, $data)
    {
        $this->db->insert($table, $data);
    }
    public function del($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit($post)
    {
        $params['name'] = $post['name_loket'];
        $params['keterangan'] = $post['keterangan'];
        $this->db->where('loket_id', $post['loket_id']);
        $this->db->update('loket', $params);
    }
}
