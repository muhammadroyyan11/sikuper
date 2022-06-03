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

    function get($id_berita = null)
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        if ($id_berita != null) {
            $this->db->where('id_berita', $id_berita);
        }
        $query = $this->db->get();
        return $query;
    }

    public function getBerita($id_berita)
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        // $this->db->join('tbl_jenis_perumahan', 'tbl_jenis_perumahan.id_jenis_perumahan = tbl_perumahan.id_jenis_perumahan');
        $this->db->where('id_berita', $id_berita);
        return $this->db->get()->row();
    }

    public function get_data($limit, $start)
    {
        $this->db->order_by('id_berita', 'desc');
        $query = $this->db->get('tbl_berita', $limit, $start);
        return $query;
    }

    public function add($post)
    {
        $params = [
            'judul' => $post['judul'],
            'isi' => $post['isi'],
            'tgl_berita' => date('Y-m-d'),
            'foto_berita' => $post['image']
        ];
        $this->db->insert('tbl_berita', $params);
    }

    public function edit($post)
    {
        $params = [
            'judul' => $post['judul'],
            'isi' => $post['isi'],
            'tgl_berita' => date('Y-m-d'),
            // 'foto_berita' => $post['image']
        ];
        if ($post['image'] != null) {
            $params['foto_berita'] = $post['image'];
        }
        $this->db->where('id_berita', $post['id_berita']);
        $this->db->update('tbl_berita', $params);
    }

    public function getHome()
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        // $this->db->join('tbl_jenis_perumahan', 'tbl_jenis_perumahan.id_jenis_perumahan = tbl_perumahan.id_jenis_perumahan');
        $this->db->limit(4);
        return $this->db->get();
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

    public function del($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function insert($data, $batch = false)
    {
        return $batch ? $this->db->insert_batch('tbl_berita', $data) : $this->db->insert('tbl_berita', $data);
    }
}
