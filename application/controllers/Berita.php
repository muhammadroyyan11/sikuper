<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// cek_login();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('Auth_model', 'auth');
		$this->load->model('Berita_m', 'berita');
		$this->load->library('pagination');
	}

	public function index()
	{
		$config['base_url'] = base_url().'berita/index/';
		$config['total_rows'] = $this->db->count_all('tbl_berita');
		$config['per_page'] = 1;
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
		$data['berita'] = $this->berita->get_data($config['per_page'],$from);
		$data['title'] = 'BERITA';
		$this->template->load('client/template', 'client/berita/berita', $data);
	}

	public function read($id_berita)
	{
		$id = $this->berita->getBerita($id_berita);

		$data = array(
            'title' => 'BACA BERITA',
            'row' => $id
        );

		$this->template->load('client/template', 'client/berita/read',$data);
	}
}
