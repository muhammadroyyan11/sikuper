<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

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
		// START PAGINATION
		$jumlah_data = $this->base->count('barang');
		
		$config['base_url'] = base_url().'shop/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 12;
		$from = $this->uri->segment(3);

		$config['cur_tag_open'] = '<a href="#" class="item-pagination flex-c-m trans-0-4  active-pagination">';
		$config['cur_tag_close'] = '</a>';

		$config['cur_tag_open'] = '<a href="#" class="item-pagination flex-c-m trans-0-4  active-pagination">';
		$config['cur_tag_close'] = '</a>';

		$config['attributes'] = array('class' => 'item-pagination flex-c-m trans-0-4');

		$this->pagination->initialize($config);		
		// END PAGINATION


		// CALL DATA 
		$data['barang'] = $this->base->data('barang',$config['per_page'],$from);

		$data['kproduk'] = $this->base_model->get('kproduk')->result();
		$data['title'] = 'Shop';
		$this->template->load('client/template', 'client/shop/shop', $data);
	}

	public function detail($seo_name)
    {
		$row = $this->base->getProduk($seo_name);
		$data['kproduk'] = $this->base_model->get('kproduk')->result();

		$data['produk'] = $row;
		$data['title'] = $row->name;
		
		$this->template->load('client/template', 'client/shop/detail', $data);
    }
}
