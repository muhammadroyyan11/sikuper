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

    function fetch_filter_type($lokasi)
    {
        $this->db->distinct();
        $this->db->select($lokasi);
        $this->db->from('tbl_perumahan');
        return $this->db->get();
    }

    function fetch_filter_type2()
    {
        $this->db->distinct();
        $this->db->select('*');
        $this->db->from('tbl_jenis_perumahan');
        // $this->db->join('tbl_jenis_perumahan', 'tbl_jenis_perumahan.id_jenis_perumahan = tbl_perumahan.id_jenis_perumahan');
        return $this->db->get();
    }

    function make_query($lokasi, $jenis)
    {
        // $query = "SELECT * FROM tbl_perumahan JOIN tbl_jenis_perumahan ON tbl_jenis_perumahan.id_jenis_perumahan = tbl_perumahan.id_jenis_perumahan WHERE ketersediaan = 'Tersedia' ";
        $query = "SELECT tbl_perumahan.id_perumahan, tbl_perumahan.id_jenis_perumahan as 'iki', tbl_perumahan.nama_perumahan, tbl_perumahan.lokasi, tbl_perumahan.foto_perumahan, tbl_perumahan.fasilitas, tbl_perumahan.luas_tanah, tbl_perumahan.ketersediaan ,tbl_jenis_perumahan.nama_jenis, tbl_jenis_perumahan.id_jenis_perumahan as 'id1'
        FROM tbl_perumahan
        JOIN tbl_jenis_perumahan
        ON tbl_perumahan.id_jenis_perumahan = tbl_jenis_perumahan.id_jenis_perumahan  WHERE ketersediaan = 'Tersedia'
        ";

        if (isset($lokasi)) {
            $lokasi_filter = implode("','", $lokasi);
            $query .= " AND lokasi IN('" . $lokasi_filter . "')";
        }

        if (isset($jenis)) {
            $jenis_filter = implode("','", $jenis);
            $query .= " AND tbl_perumahan.id_jenis_perumahan IN('" . $jenis_filter . "')";
        }
        return $query;
    }

    public function getFilter($lokasi, $jenis = null)
    {
        // $query = $this->make_query($lokasi);
        // $data = $this->db->query($query);
        $data = array('lokasi', 'nama_jenis');

        $this->db->select('*');
        $this->db->from('tbl_perumahan');

        if (isset($lokasi)) {
            $this->db->like('lokasi', implode("','", $lokasi));
            // $this->db->or_like('lokasi', implode("','", $lokasi));
        }

        $this->db->join('tbl_jenis_perumahan', 'tbl_jenis_perumahan.id_jenis_perumahan = tbl_perumahan.id_jenis_perumahan');
        $query = $this->db->get();
        return $query;
    }
    

    // function count_all($lokasi)
    // {
    //     $query = $this->make_query($lokasi);
    //     $data = $this->db->query($query);
    //     return $data->num_rows();
    // }

    function fetch_data( $lokasi, $jenis)
    {
        $query = $this->make_query($lokasi, $jenis);
        // $join = $this->db->join('tbl_jenis_perumahan', 'tbl_jenis_perumahan.id_jenis_perumahan = tbl_perumahan.id_jenis_perumahan');
        // $query .= ' LIMIT ' . $start . ', ' . $limit;

        $data = $this->db->query($query);

        $output = '';
        if ($data->num_rows() > 0) {
            foreach ($data->result() as $row) {
                $output .= '
                <div class="col-md-4">
                    <div class="property-wrap card-body">
                        <a href="'. site_url("perumahan/read/" . $row->id_perumahan).'" class="img" style="background-image: url('. base_url().'assets/uploads/perumahan/'. $row->foto_perumahan.');">
                        </a>
                        <div class="text">
                            <h3><a href="'. site_url("perumahan/read/" . $row->id_perumahan).'">'. $row->nama_perumahan .'</a></h3>
                            <span class="location">'. $row->nama_jenis .'</span>
                            <span class="location">'. $row->fasilitas .'</span>
                            <a href="'. site_url("perumahan/read/" . $row->id_perumahan).'" class="d-flex align-items-center justify-content-center btn-custom">
                                <span class="fa fa-link"></span>
                            </a>
                            <div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
                                <div class="d-flex align-items-center">
                                    <h3 class="ml-2">' . $row->lokasi .' </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
       ';
            }
        } else {
            $output = '<center><h4>Perumahan tidak tersedia</h4></center>';
        }
        return $output;
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

    public function get_data($limit, $start)
    {
        $this->db->join('tbl_jenis_perumahan', 'tbl_jenis_perumahan.id_jenis_perumahan = tbl_perumahan.id_jenis_perumahan');
        $this->db->order_by('id_perumahan', 'desc');
        $query = $this->db->get('tbl_perumahan', $limit, $start);
        return $query;
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
