<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('template_d');
		$this->load->model('m_products');
		$this->load->model('m_cart');
		$this->load->model('m_order');
		$this->load->model('m_category');
		$this->load->model('m_loginadmin');
		if($this->session->userdata('id') == null){
			redirect(base_url("login"));
		}
		
	}
	
	public function index()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		// $data['prod'] = $this->m_products->get_join();
		$jumlah_data = $this->m_order->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/products/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['order'] = $this->m_order->data($config['per_page'],$from);
		$this->template_d->view('backend/order/order', $data);
	}

	// public function add()
	// {
	// 	$id = $this->session->userdata('id');
	// 	$data['profile'] = $this->m_loginadmin->get_profile($id);
	// 	$this->template_d->view('backend/customers/addCustomer', $data);
	// }

	// public function insert_user()
    // {
	// 	$id['UserID']= $this->session->userdata('user_id');
	// 	$email 		 = $this->input->post("email");
	// 	$phone 		 = $this->input->post("phone");
	// 	$address	 = $this->input->post("address");
	// 	$city 	 	 = $this->input->post("city");
	// 	$province 	 = $this->input->post("province");
	// 	$zip 	 	 = $this->input->post("zip");

	// 	$this->load->library('upload');
	// 	$nmfile = "file-".time(); //nama file saya beri nama langsung dan diikuti fungsi time
	// 	$config['upload_path'] 	 = './assets/backend/users/'; //path folder
	// 	$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	// 	$config['max_size'] 	 = '3048'; 
	// 	$config['max_width']     = '1300'; //lebar maksimum 1288 px
	// 	$config['max_height']    = '1300'; //tinggi maksimu 768 px
	// 	$config['file_name']     = $nmfile; //nama yang terupload nantinya

	// 	$this->upload->initialize($config);
		
    //     if($_FILES['file']['name'])
    //     {
	// 		$this->db->where('UserID',$this->session->userdata('user_id'));
	// 		$query = $this->db->get('users');
	// 		$row = $query->row();

	// 		unlink("./assets/backend/users/$row->UserPhoto");
	// 		if ($this->upload->do_upload('file'))
    //         {
    //             $gbr = $this->upload->data();
	// 			$data = array(
	// 				'UserEmail' 		=> $email,
	// 				'UserPhone'			=> $phone,
	// 				'UserPhoto' 		=> $gbr['file_name'],
	// 				'UserAddress'		=> $address,
	// 				'UserCity' 			=> $city,
	// 				'UserProvince'      => $province,
	// 				'UserZip'      		=> $zip
	// 			);

    //             $this->m_loginfe->update_user($data,$id);
    //         }
    //     }else {
	// 			$data = array(
	// 				'UserEmail' 		=> $email,
	// 				'UserPhone'			=> $phone,
	// 				'UserAddress'		=> $address,
	// 				'UserCity' 			=> $city,
	// 				'UserProvince'      => $province,
	// 				'UserZip'      		=> $zip
	// 			);

	// 			$this->m_loginfe->update_user($data,$id);
	// 	}
		
	// 	redirect('customer/');

	// }


	public function edit()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$id_order = $this->uri->segment('3');
		$data['order'] = $this->m_order->get_order($id_order);
		$this->template_d->view('backend/order/editOrder', $data);
	}

	public function resi()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$id_order = $this->uri->segment('3');
		$data['order'] = $this->m_order->get_order($id_order);
		$this->template_d->view('backend/order/addResi', $data);
	}

	public function update()
    {
		$id['OrderID'] = $this->input->post('id');
		$resi 	= strtoupper($this->input->post("resi"));
		
		$data = array(
			'OrderReceipt' 		=> $resi,
		);
		$this->m_order->update($data,$id);
		
		redirect('order/');

	}



	
	function delete($id){
		
		$this->db->delete('orders', array('OrderID' => $id));
		redirect('order/');
   
   }

   

}
