<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

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
		$data['home'] = $this->base_model->get('slide')->result();
		$data['barang'] = $this->base_model->get_barang()->result();
		$data['posting'] = $this->base_model->get_artikel()->result();
		$data['title'] = 'Home';
		$this->template->load('client/template', 'client/dashboard/dashboard', $data);
	}
}
