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
}
