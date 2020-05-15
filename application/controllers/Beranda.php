<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent ::__construct();
		//load model
		$params = array('server_key' => 'SB-Mid-server-Wl3OBz59TsVvrw_PH8PPf_vV', 'production' => false);
		$this->load->library('veritrans');
		$this->veritrans->config($params);
		$this->load->helper('url');

		$this->load->library('templatehome');
		$this->load->model('m_productfe');
		$this->load->model('m_orderfe');
		$this->load->model('m_setting');
		$this->load->model('m_faq');
		$this->load->model('m_banner');
		$this->load->model('m_quote');
		$this->load->model('m_footpicture');
		$this->load->model('m_information');
		$this->load->model('m_loginfe');
		$this->load->model('m_address');
	}


	public function index()
	{	
		$data['prod'] = $this->m_productfe->get_product_frontend();
		$data['setting'] = $this->m_setting->get_setting();
		$data['banner'] = $this->m_banner->get_banner();
		$data['quote'] = $this->m_quote->get_quote();
		$data['footer'] = $this->m_footpicture->get_footer();
		$this->templatehome->view('home/home', $data);
	}

	public function product()
	{
		$data['prod'] = $this->m_productfe->get_join();
		$data['other'] = $this->m_productfe->other_product();
		$data['setting'] = $this->m_setting->get_setting();
		$this->templatehome->view('home/product', $data);
	}

	// public function cart()
	// {
	// 	$this->templatehome->view('home/cart');
	// }

	public function checkout()
	{
		$data['setting'] = $this->m_setting->get_setting();
		$this->templatehome->view('home/checkout', $data);
	}

	public function details()
	{
		$id = $this->uri->segment('4');
		$color = $this->uri->segment('5');
		$data['prod'] = $this->m_productfe->edit($id);
		$data['picture'] = $this->m_productfe->get_picture($id,$color);
		$data['related'] = $this->m_productfe->get_product_related();
		$data['related'] = $this->m_productfe->get_product_related();
		$data['setting'] = $this->m_setting->get_setting();
		$this->templatehome->view('home/details', $data);
	}

	public function add_to_cart()
    {
		$productid 		= $this->input->post("productid");
		$userid 		= $this->session->userdata('user_id');
		$productname 	= $this->input->post("productname");
		$color 			= $this->input->post("color");
		$qty 			= $this->input->post("qty");
		$date 			= date('Y-m-d H:i:s');
		$login = false;
		if($this->session->userdata('user_id') != null){
			$login = true;
		
			$data = array(
				'userid' 		=> $userid,
				'productid' 	=> $productid,
				'qty' 			=> $qty,
				'color'			=> $color,
				'created_at'  	=> $date
			);
			$this->m_orderfe->add_cart($data);
		
		}

		if ($_POST['Submit'] == 'cart' ) {
			redirect('beranda/details/'.$productname.'/'.$productid.'/'.$color.'?login='.$login);
		}
		else if ($_POST['Submit'] == 'payment') {
			redirect('beranda/address');
		}

	}

	public function add_to_payment()
    {
		$productid 		= $this->input->post("productid");
		$userid 		= $this->session->userdata('user_id');
		$color 			= $this->input->post("color");
		$qty 			= $this->input->post("qty");
		$date 			= date('Y-m-d H:i:s');
		$login = false;
		if($this->session->userdata('user_id') != null){
			$login = true;
		
			$data = array(
				'userid' 		=> $userid,
				'productid' 	=> $productid,
				'qty' 			=> $qty,
				'color'			=> $color,
				'created_at'  	=> $date
			);
			$this->m_orderfe->add_cart($data);
		
		}

		redirect('beranda/address');

	}

	public function cart()
	{
		$num = $this->db->where('userid', $this->session->userdata('user_id'))->where('orderid', '')->get('cart')->num_rows();
		if(($this->session->userdata('user_id') == null) || ($num == 0)){
			redirect('beranda/');
		}
		else {
			$userid = $this->session->userdata('user_id');
			$data['cart'] = $this->m_orderfe->cart($userid);
			$data['user'] = $this->m_orderfe->user($userid);
			$data['setting'] = $this->m_setting->get_setting();
			$this->templatehome->view('home/cart', $data);
		}
		
	}

	function delete_cart($id){

		$this->db->delete('cart', array('id_cart' => $id));
		redirect('beranda/cart/'.$productid);

	}


	public function address()
	{
		if($this->session->userdata('user_id') == null){
			redirect('beranda/');
		}
		else {
			$userid = $this->session->userdata('user_id');
			$data['cart'] = $this->m_orderfe->cart($userid);
			$data['user'] = $this->m_orderfe->user($userid);
			$data['setting'] = $this->m_setting->get_setting();
			$data['address'] = $this->m_address->get_addressfe($userid);
			$this->templatehome->view('home/address', $data);
		}
	}

	public function insert_address()
    {
		$random		  = rand();
		$name 		  = $this->input->post("name");
		$phone 	 	  = $this->input->post("phone");
		$address	  = $this->input->post("address");
		$province 	  = $this->input->post("province");
		$city 		  = $this->input->post("city");
		$subdistricts = $this->input->post("subdistricts");
		$zip 	 	  = $this->input->post("zip");
		
		$data = array(
			'OrderCode'			=> $random,
			'OrderUserID' 		=> $this->session->userdata('user_id'),
			'OrderShipName' 	=> $name,
			'OrderShipAddress' 	=> $address,
			'OrderCity'			=> $city,
			'OrderSubDistrict' 	=> $subdistricts,
			'OrderProvince' 	=> $province,
			'OrderZip' 			=> $zip,
			'OrderPhone'		=> $phone
		);
		
		$code = $this->m_orderfe->add_orders($data);	
		redirect('beranda/courier');

	}

	public function cost($city)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => "https://pro.rajaongkir.com/api/cost",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "origin=153&originType=city&destination=$city&destinationType=city&weight=1700&courier=jne:pos:tiki:jnt:sicepat:jet:lion",
		CURLOPT_HTTPHEADER => array(
			"content-type: application/x-www-form-urlencoded",
			"key: 90927796f8d9b2b9accbf81cda0adf94"
		),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			return json_decode($response);
		}
	}

	public function listcourier()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => "https://pro.rajaongkir.com/api/province",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
			"key: 90927796f8d9b2b9accbf81cda0adf94"
		),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			return json_decode($response);
		}
		
	}

	public function district()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => "https://pro.rajaongkir.com/api/city",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
			"key: 90927796f8d9b2b9accbf81cda0adf94"
		),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			return json_decode($response);
		}
	}

	public function courier()
	{
		if($this->session->userdata('user_id') == null){
			redirect('beranda/');
		}
		else {
			$userid = $this->session->userdata('user_id');
			$query = $this->db->select_max('OrderID')->where('OrderUserID', $userid)->get('orders');
			$row = $query->row();
			$city = $row->OrderID;
			$data['district'] = $this->district()->rajaongkir->results;
			$data['count_district'] = count($this->district()->rajaongkir->results);
			
			$data['cart'] = $this->m_orderfe->cart($userid);
			$data['user'] = $this->m_orderfe->user($userid);
			$data['setting'] = $this->m_setting->get_setting();
			$data['address'] = $this->m_address->get_addressfe($userid);
			$data['order'] = $this->m_orderfe->get_infoorder($city);
			if ($this->uri->segment(3) != '') {
				$city = $this->uri->segment(3);
				$data['cost'] = $this->cost($city)->rajaongkir->results;
				$data['count_cost'] = count($this->cost($city)->rajaongkir->results);
			}
			$this->templatehome->view('home/kurir', $data);
		}
	}

	public function insert_courier()
    {
		$courier	 	  = urldecode($this->uri->segment(3));
		$service	 	  = urldecode($this->uri->segment(4));
		$rates	 	  	  = urldecode($this->uri->segment(5));
		$userid = $this->session->userdata('user_id');
		$query = $this->db->select_max('OrderID')->where('OrderUserID', $userid)->get('orders');
		$row = $query->row();
		$orderid = $row->OrderID;
		$data = array(
			'OrderCourier' => $courier,
			'OrderCourierService' => $service,
			'OrderRates'   => $rates,
		);
		$id['OrderID']  = $orderid;
		
		$this->m_orderfe->update_orders($data,$id);	
		redirect('beranda/order_detail/');

	}


	public function order_detail()
	{
		if($this->session->userdata('user_id') == null){
			redirect('beranda/');
		}
		else {
			$userid = $this->session->userdata('user_id');
			$data['cart'] = $this->m_orderfe->cart($userid);
			$data['order'] = $this->m_orderfe->order($userid);
			$data['setting'] = $this->m_setting->get_setting();
			$this->templatehome->view('home/detail_order', $data);
		}
		
	}

	public function insert_detail_order()
    {
		$id['OrderCode']  = $this->input->post("order");
		$amount	 	  = $this->input->post("amount");
		
		$data = array(
			'OrderAmount' => $amount
		);

		$data_cart = array(
			'orderid' => $id['OrderCode']
		);

		$where = array(
			'userid' => $this->session->userdata('user_id'),
			'orderid' => ''
		);
		
		$this->m_orderfe->update_orders($data,$id);	
		$this->m_orderfe->update_cart($data_cart,$where);	
		redirect('beranda/payment/'.$id['OrderCode']);

	}

	public function payment()
	{
		if($this->session->userdata('user_id') == null){
			redirect('beranda/');
		}
		else {
			$userid = $this->session->userdata('user_id');
			$data['cart'] = $this->m_orderfe->cart($userid);
			$data['order'] = $this->m_orderfe->order($userid);
			$data['setting'] = $this->m_setting->get_setting();
			$this->templatehome->view('home/metode_payment', $data);
		}
	}

	public function trace() {
		$waybill = "JD0070081249";
		$courier = "jnt";
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => "https://pro.rajaongkir.com/api/waybill",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "waybill=$waybill&courier=$courier",
		CURLOPT_HTTPHEADER => array(
			"content-type: application/x-www-form-urlencoded",
			"key: 90927796f8d9b2b9accbf81cda0adf94"
		),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			return json_decode($response);
		}
	}

	public function tracking()
	{
		if($this->session->userdata('user_id') == null){
			redirect('beranda/');
		}
		else {
			$data['trace'] = $this->trace()->rajaongkir->result->manifest;
			$data['count_trace'] = count($this->trace()->rajaongkir->result->manifest);
			$userid = $this->session->userdata('user_id');
			$order = $this->uri->segment(3);
			$data['order'] = $this->m_orderfe->get_idorder($order);
			$data['cart'] = $this->m_orderfe->history($userid);
			$data['user'] = $this->m_orderfe->user($userid);
			$data['setting'] = $this->m_setting->get_setting();
			$this->templatehome->view('home/tracking', $data);
		}
	}

	public function account()
	{
		if($this->session->userdata('user_id') == null){
			redirect('beranda/');
		}
		else {
			$userid = $this->session->userdata('user_id');
			$data['cart'] = $this->m_orderfe->history($userid);
			$data['order'] = $this->m_orderfe->get_order($userid);
			$data['user'] = $this->m_orderfe->user($userid);
			$data['setting'] = $this->m_setting->get_setting();
			$this->templatehome->view('home/account', $data);
		}
	}

	public function listaddress()
	{
		if($this->session->userdata('user_id') == null){
			redirect('beranda/');
		}
		else {
			$data['district'] = $this->district()->rajaongkir->results;
			$data['count_district'] = count($this->district()->rajaongkir->results);
			$data['courier'] = $this->listcourier()->rajaongkir->results;
			$data['count_courier'] = count($this->listcourier()->rajaongkir->results);
			$userid = $this->session->userdata('user_id');
			$data['address'] = $this->m_address->get_addressfe($userid);
			$data['user'] = $this->m_orderfe->user($userid);
			$data['setting'] = $this->m_setting->get_setting();
			$this->templatehome->view('home/listAddress', $data);
		}
	}

	public function insert_alamat()
    {
		$userid 	 = $this->session->userdata('user_id');
		$address 	 = $this->input->post("address");
		$district 	 = $this->input->post("district");
		$province 	 = $this->input->post("province");
		$zipcode 	 = $this->input->post("zipcode");
		
        
		$data = array(
			'userid' 		=> $userid,
			'address' 		=> $address,
			'district'		=> $district,
			'province' 		=> $province ,
			'zipcode' 		=> $zipcode,
			
		);

		$this->m_address->add_address($data);
		
		redirect('beranda/listaddress');

	}

	function delete_alamat($id){

		$this->db->delete('address', array('id' => $id));
		redirect('beranda/listaddress');

	}


	public function information()
	{
		$data['setting'] = $this->m_setting->get_setting();
		$type = $this->uri->segment(3);
		$data['info'] = $this->m_information->get_detail($type);
		$this->templatehome->view('home/information', $data);
	}

	public function faq()
	{
		$data['faq'] = $this->m_faq->get_faq();
		$data['setting'] = $this->m_setting->get_setting();
		$this->templatehome->view('home/faq', $data);
	}


}
