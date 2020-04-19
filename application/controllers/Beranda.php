<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{

		parent ::__construct();
		//load model
		$this->load->library('templatehome');
		$this->load->model('m_productfe');
		$this->load->model('m_orderfe');
	}

	public function index()
	{	
		$data['prod'] = $this->m_productfe->get_product_frontend();
		$this->templatehome->view('home/home', $data);
	}

	public function product()
	{
		$data['prod'] = $this->m_productfe->get_join();
		$data['other'] = $this->m_productfe->other_product();
		$this->templatehome->view('home/product', $data);
	}

	// public function cart()
	// {
	// 	$this->templatehome->view('home/cart');
	// }

	public function checkout()
	{
		$this->templatehome->view('home/checkout');
	}

	public function details()
	{
		$id = $this->uri->segment('4');
		$data['prod'] = $this->m_productfe->edit($id);
		$data['picture'] = $this->m_productfe->get_picture($id);
		$data['related'] = $this->m_productfe->get_product_related();
		$this->templatehome->view('home/details', $data);
	}

	public function add_to_cart()
    {
		$productid 		= $this->input->post("productid");
		$userid 		= $this->session->userdata('user_id');
		$productname 	= $this->input->post("productname");
		// $color 			= $this->input->post("color");
		$qty 			= $this->input->post("qty");
		$date 			= date('Y-m-d H:i:s');
		$login = false;
		if($this->session->userdata('user_id') != null){
			$login = true;
		
			$data = array(
				'userid' 		=> $userid,
				'productid' 	=> $productid,
				'qty' 			=> $qty,
				// 'color'			=> $color,
				'created_at'  	=> $date
			);
			$this->m_orderfe->add_cart($data);
		
			redirect('beranda/details/'.$productname.'/'.$productid);
		}

		redirect('beranda/details/'.$productname.'/'.$productid.'?login='.$login);

	}

	public function cart()
	{
		if($this->session->userdata('user_id') == null){
			redirect('beranda/');
		}
		else {
			$userid = $this->session->userdata('user_id');
			$data['cart'] = $this->m_orderfe->cart($userid);
			$data['user'] = $this->m_orderfe->user($userid);
			$this->templatehome->view('home/cart', $data);
		}
		
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
