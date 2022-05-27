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
		// $data['galleries'] = $this->restapi->Apiget('https://admin.kofluckroastery.com/api/v1/galleries');
		$data['perumahan'] = $this->detail->getJoin();
		$data['title'] = 'PERUMAHAN';
		$this->template->load('client/template', 'client/perumahan/perumahan', $data);
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
