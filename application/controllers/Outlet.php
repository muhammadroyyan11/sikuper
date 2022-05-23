<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Outlet extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// cek_login();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('Auth_model', 'auth');
		$this->load->model('Base_model', 'base');
		$this->load->library('pagination');
	}

	public function index()
	{
		// $data['galleries'] = $this->restapi->Apiget('https://admin.kofluckroastery.com/api/v1/galleries');
		$data['outlet'] = $this->base->get('outlet')->result();
		$data['title'] = 'Outlet Kopi Koopen';
		$this->template->load('client/template', 'client/outlet/outlet', $data);
	}

	public function detail($id)
	{
		// $query = $this->produk_m->get($id);
		// if($query->num_rows() > 0){
		// 	$produk = $query->row();
		// 	$data = array(
		// 		'page' => 'shop_view',
		// 		'row' => $produk
		// 	);
		//$data['galleries'] = $this->restapi->Apiget('http://localhost:8000/api/v1/galleries');

		$query = $this->base->getOutlet($id);
		$data['row'] = $query->row();
		$data['title'] = 'View Outlet';

		$this->template->load('client/template', 'client/outlet/outlet_view', $data);

		// } else {
		// 	echo "<script>alert('Data Tidak Di Temukan');";
		//         echo "window.location='".site_url('outlet')."';</script>";
		// }
	}
}
