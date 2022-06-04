<?php defined('BASEPATH') or exit('No direct script access allowed');

class JenisPerumahan_m extends CI_Model
{

    public function get($id_jenis_perumahan = null)
    {
        $this->db->select('*');
        $this->db->from('tbl_jenis_perumahan');
        if ($id_jenis_perumahan != null) {
           $this->db->where('id_jenis_perumahan', $id_jenis_perumahan);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'nama_jenis' => $post['nama_jenis'],
        ];
        $this->db->insert('tbl_jenis_perumahan', $params);
    }

    public function del($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit($post)
    {
        $params['nama_jenis'] = $post['nama_jenis'];
        $this->db->where('id_jenis_perumahan', $post['id_jenis_perumahan']);
        $this->db->update('tbl_jenis_perumahan', $params);
    }
}

  