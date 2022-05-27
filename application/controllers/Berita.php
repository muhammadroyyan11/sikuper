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
		// $data['galleries'] = $this->restapi->Apiget('https://admin.kofluckroastery.com/api/v1/galleries');
		$data['berita'] = $this->berita->get();
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
