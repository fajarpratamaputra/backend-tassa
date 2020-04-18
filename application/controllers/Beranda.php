<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{

		parent ::__construct();
		//load model
		$this->load->library('templatehome');
		$this->load->model('m_products');
	}

	public function index()
	{
		$data['prod'] = $this->m_products->get_product_frontend();
		$this->templatehome->view('home/home', $data);
	}

	public function product()
	{
		$this->templatehome->view('home/product');
	}

	public function cart()
	{
		$this->templatehome->view('home/cart');
	}

	public function checkout()
	{
		$this->templatehome->view('home/checkout');
	}

	public function details()
	{
		$id = $this->uri->segment('4');
		$data['prod'] = $this->m_products->edit($id);
		$data['related'] = $this->m_products->get_product_related();
		$this->templatehome->view('home/details', $data);
	}

	public function address()
	{
		$this->templatehome->view('home/address');
	}

	public function payment()
	{
		$this->templatehome->view('home/detail_payment');
	}

	public function metode()
	{
		$this->templatehome->view('home/metode_payment');
	}

	public function detail_checkout()
	{
		$this->templatehome->view('home/detail_checkout');
	}

	public function privasi()
	{
		$this->templatehome->view('home/privasi');
	}

}
