<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perumahan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// cek_login();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('Auth_model', 'auth');
		$this->load->model('Detail_m', 'detail');
		$this->load->library('pagination');
	}

	public function index()
	{
		$config['base_url'] = base_url() . 'perumahan/index/';
		$config['total_rows'] = $this->db->count_all('tbl_perumahan');
		$config['per_page'] = 9;
		$from = $this->uri->segment(3);
		$choise = $config["total_rows"] / $config['per_page'];
		$config["num_links"] = floor($choise);

		// $config['attributes'] = array('class' => '');
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Prev';

		$config['full_tag_open'] = '<div class="block-27"><ul>';
		$config['full_tag_close'] = '</ul></div>';

		$config['num_tag_open'] = '<li><span>';
		$config['num_tag_close'] = '</span></li>';

		$config['cur_tag_open'] = '<li class="active"><span>';
		$config['cur_tag_close'] = '</span></li>';

		$this->pagination->initialize($config);

		//CALL DATA
		$data['page'] = ($from) ? $from : 0;
		$data['perumahan'] = $this->detail->get_data($config['per_page'], $from);

		$data['lokasi'] = $this->detail->fetch_filter_type('lokasi');
		$data['jenis'] = $this->detail->fetch_filter_type2('nama_jenis');

		// $data['perumahan'] = $this->detail->getJoin();
		$data['title'] = 'PERUMAHAN';
		$this->template->load('client/template', 'client/perumahan/perumahan', $data);
	}

	public function fetch_data()
	{
		$lokasi = $this->input->post('lokasi');

		$config = array();
		$config['base_url'] = base_url() . 'perumahan/index/';
		$config['total_rows'] = $this->db->count_all('tbl_perumahan');
		$config['per_page'] = 9;
		$from = $this->uri->segment(3);
		$choise = $config["total_rows"] / $config['per_page'];
		$config["num_links"] = floor($choise);

		// $config['attributes'] = array('class' => '');
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Prev';

		$config['full_tag_open'] = '<div class="block-27"><ul>';
		$config['full_tag_close'] = '</ul></div>';

		$config['num_tag_open'] = '<li><span>';
		$config['num_tag_close'] = '</span></li>';

		$config['cur_tag_open'] = '<li class="active"><span>';
		$config['cur_tag_close'] = '</span></li>';

		$this->pagination->initialize($config);

		$page = $this->uri->segment(3);
		$start = ($page - 1) * $config['per_page'];
		$output = array(
			'pagination_link'  => $this->pagination->create_links(),
			'product_list'   => $this->detail->fetch_data($config["per_page"], $start, $lokasi)
		);
		echo json_encode($output);
	}



	public function filter()
	{
		$lokasi = $this->input->get(null, TRUE);
		$jenis = $this->input->get(null, TRUE);
		// $tes = $this->input->get('balkot');
		$data['title'] = 'PERUMAHAN';
		// $data['perumahan'] = $this->detail->getFilter($get)->result();

		// $query = $this->detail->make_query($lokasi);
        $data['perumahan'] = $this->detail->getFilter($lokasi, $jenis);
		$data['lokasi'] = $this->detail->fetch_filter_type('lokasi');
		$data['jenis'] = $this->detail->fetch_filter_type2('nama_jenis');
		// var_dump($data);
		$this->template->load('client/template', 'client/perumahan/perumahan', $data);
		// echo $tes;
	}

	public function detail($id_perumahan)
	{
		// echo $id_perumahan;
		$row = $this->detail->get($id_perumahan)->row();

		$data['row'] = $row;
		$data['title'] = $row->nama_perumahan;

		$this->template->load('client/template', 'client/perumahan/detail', $data);
	}

	public function read($id_perumahan)
	{
		$row = $this->detail->getPerumahan($id_perumahan);

		$data['row'] = $row;
		$data['title'] = $row->nama_perumahan;

		$this->template->load('client/template', 'client/perumahan/detail', $data);
	}
}
