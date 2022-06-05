<?php defined('BASEPATH') or exit('No direct script access allowed');

class Users_m extends CI_Model
{

    public function get($id = null)
    {
        $query = $this->db->get('tbl_user');
        return $query;
    }

    function getCount($id = null)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        if ($id != null) {
            $this->db->where('id_user', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function getUser($table, $data = null, $where = null)
    {
        if ($data != null) {
            return $this->db->get_where($table, $data)->row_array();
        } else {
            return $this->db->get_where($table, $where)->result_array();
        }
    }

    // public function add($post)
    // {
    //     $params['nama_jenis'] = $post['nama_jenis_perumahan'];
    //     $this->db->insert('tbl_jenis_perumahan', $params);
    // }

    public function insert($table, $data, $batch = false)
    {
        return $batch ? $this->db->insert_batch($table, $data) : $this->db->insert($table, $data);
    }

    public function delete($table, $pk, $id)
    {
        return $this->db->delete($table, [$pk => $id]);
    }

    public function edit($post)
    {
        // $params['nama'] = $post['nama'];
        // $params['username'] = $post['username'];
        // if (!empty($post['password'])) {
        //     $params['password'] = password_hash($post['password'], PASSWORD_DEFAULT);
        // }
        // $params['alamat'] = $post['alamat'] != "" ? $post['alamat'] : null;
        // $this->db->where('id_user', $post['id_user']);
        // $this->db->update('tbl_user', $params);

        $params = [
            'nama' => $post['nama'],
            'username' => $post['username'],
            'alamat' => $post['alamat'],
        ];

        if ($post['password'] != null) {
            $params['password'] = password_hash($post['password'], PASSWORD_DEFAULT);
        }
        if ($post['image'] != null) {
            $params['foto_profil'] = $post['image'];
        }
        $this->db->where('id_user', $post['id_user']);
        $this->db->update('tbl_user', $params);
    }

    public function getEdit($table, $where)
    {
        $this->db->where($where);
        $sql = $this->db->get($table);
        return $sql;
    }

    public function update($table, $pk, $id, $data)
    {
        $this->db->where($pk, $id);
        return $this->db->update($table, $data);
    }
}
