<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        is_admin();  
        date_default_timezone_set('Asia/Jakarta');
        // // $this->load->model('Auth_model', 'auth');
        // $this->load->model('Admin_model', 'admin');
        $this->load->model('detail_m', 'detail');
        $this->load->model('Berita_m', 'berita');
    }

    public function index()
    {
        $data['title'] = "Dashboard";
        $data['perumahan'] = $this->detail->getJoinHome();
		$data['berita'] = $this->berita->getHome();
        $this->template->load('template', 'dashboard/dashboard', $data);
    }

  
}
