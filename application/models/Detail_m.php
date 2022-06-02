<?php defined('BASEPATH') or exit('No direct script access allowed');

class Detail_m extends CI_Model
{

    function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('tbl_perumahan');
        if ($id != null) {
            $this->db->where('id_perumahan', $id);
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

    public function getJoin($id_perumahan = null)
    {
        $this->db->select('*');
        $this->db->from('tbl_perumahan');
        $this->db->join('tbl_jenis_perumahan', 'tbl_jenis_perumahan.id_jenis_perumahan = tbl_perumahan.id_jenis_perumahan');
        if ($id_perumahan != null) {
            $this->db->where('id_perumahan', $id_perumahan);
        }
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

    public function add($post)
    {
        $params = [
            'nama_perumahan' => $post['nama_perumahan'],
            'lokasi' => $post['lokasi'],
            'ket_perumahan' => $post['ket_perumahan'],
            'foto_perumahan' => $post['image'],
            'fasilitas' => $post['fasilitas'],
            'alamat' => $post['alamat'],
            'luas_tanah' => $post['luas_tanah'],
            'tentang_perumahan' => $post['tentang_perumahan'],
            'ketersediaan' => $post['ketersediaan'],
            'nama_pengembang' => $post['nama_pengembang'],
            'total_unit_perumahan' => $post['total_unit_perumahan'],
            'id_jenis_perumahan' => $post['jenis_perumahan']
        ];
        $this->db->insert('tbl_perumahan', $params);
    }

    public function edit($post)
    {
        $params = [
            'nama_perumahan' => $post['nama_perumahan'],
            'lokasi' => $post['lokasi'],
            'ket_perumahan' => $post['ket_perumahan'],
            'fasilitas' => $post['fasilitas'],
            'alamat' => $post['alamat'],
            'luas_tanah' => $post['luas_tanah'],
            'tentang_perumahan' => $post['tentang_perumahan'],
            'ketersediaan' => $post['ketersediaan'],
            'nama_pengembang' => $post['nama_pengembang'],
            'total_unit_perumahan' => $post['total_unit_perumahan'],
            'id_jenis_perumahan' => $post['jenis_perumahan']
        ];
        if ($post['image'] != null) {
            $params['foto_perumahan'] = $post['image'];
        }
        $this->db->where('id_perumahan', $post['id_perumahan']);
        $this->db->update('tbl_perumahan', $params);
    }
    
    public function del($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
