<?php defined('BASEPATH') or exit('No direct script access allowed');

class JenisPerumahan_m extends CI_Model
{

    public function get()
    {
        $query = $this->db->get('tbl_jenis_perumahan');
        return $query;
    }

    public function add($post)
    {
        $params = [
            'nama_jenis' => $post['nama_jenis_perumahan'],
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
        $params['name'] = $post['name_loket'];
        $params['keterangan'] = $post['keterangan'];
        $this->db->where('loket_id', $post['loket_id']);
        $this->db->update('loket', $params);
    }
}
