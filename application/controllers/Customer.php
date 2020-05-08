<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('template_d');
		$this->load->model('m_products');
		$this->load->model('m_customer');
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
		$jumlah_data = $this->m_customer->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/products/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['user'] = $this->m_customer->data($config['per_page'],$from);
		$this->template_d->view('backend/customers/customer', $data);
	}

	public function add()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$this->template_d->view('backend/customers/addCustomer', $data);
	}

	public function insert_user()
    {
		$id['UserID']= $this->session->userdata('user_id');
		$email 		 = $this->input->post("email");
		$phone 		 = $this->input->post("phone");
		$address	 = $this->input->post("address");
		$city 	 	 = $this->input->post("city");
		$province 	 = $this->input->post("province");
		$zip 	 	 = $this->input->post("zip");

		$this->load->library('upload');
		$nmfile = "file-".time(); //nama file saya beri nama langsung dan diikuti fungsi time
		$config['upload_path'] 	 = './assets/backend/users/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['max_size'] 	 = '3048'; 
		$config['max_width']     = '1300'; //lebar maksimum 1288 px
		$config['max_height']    = '1300'; //tinggi maksimu 768 px
		$config['file_name']     = $nmfile; //nama yang terupload nantinya

		$this->upload->initialize($config);
		
        if($_FILES['file']['name'])
        {
			$this->db->where('UserID',$this->session->userdata('user_id'));
			$query = $this->db->get('users');
			$row = $query->row();

			unlink("./assets/backend/users/$row->UserPhoto");
			if ($this->upload->do_upload('file'))
            {
                $gbr = $this->upload->data();
				$data = array(
					'UserEmail' 		=> $email,
					'UserPhone'			=> $phone,
					'UserPhoto' 		=> $gbr['file_name'],
					'UserAddress'		=> $address,
					'UserCity' 			=> $city,
					'UserProvince'      => $province,
					'UserZip'      		=> $zip
				);

                $this->m_loginfe->update_user($data,$id);
            }
        }else {
				$data = array(
					'UserEmail' 		=> $email,
					'UserPhone'			=> $phone,
					'UserAddress'		=> $address,
					'UserCity' 			=> $city,
					'UserProvince'      => $province,
					'UserZip'      		=> $zip
				);

				$this->m_loginfe->update_user($data,$id);
		}
		
		redirect('customer/');

	}


	public function edit()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$id_product = $this->uri->segment('3');
		$id_user = $id = $this->uri->segment(3);;
		$data['user'] = $this->m_customer->edit($id_user);
		$this->template_d->view('backend/customers/editCustomer', $data);
	}

	public function update_user()
    {
		$id['UserID']= $this->input->post('id_user');
		$email 		 = $this->input->post("email");
		$username 	 = $this->input->post("username");
		$fullname	 = $this->input->post("fullname");
		$city 	 	 = $this->input->post("city");
		$province 	 = $this->input->post("province");
		$zip 	 	 = $this->input->post("zip");
		$address 	 = $this->input->post("address");
		$telephone 	 = $this->input->post("telephone");

		$this->load->library('upload');
		$nmfile = "file-".time(); //nama file saya beri nama langsung dan diikuti fungsi time
		$config['upload_path'] 	 = './assets/backend/users/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['max_size'] 	 = '3048'; 
		$config['max_width']     = '1300'; //lebar maksimum 1288 px
		$config['max_height']    = '1300'; //tinggi maksimu 768 px
		$config['file_name']     = $nmfile; //nama yang terupload nantinya

		$this->upload->initialize($config);
		
        if($_FILES['file']['name'])
        {
			$this->db->where('UserID',$id['UserID']);
			$query = $this->db->get('users');
			$row = $query->row();

			unlink("./assets/backend/users/$row->UserPhoto");
			if ($this->upload->do_upload('file'))
            {
                $gbr = $this->upload->data();
				$data = array(
					'UserName' 			=> $username,
					'UserFullName'		=> $fullname,
					'UserEmail' 		=> $email,
					'UserPhone'			=> $telephone,
					'UserPhoto' 		=> $gbr['file_name'],
					'UserAddress'		=> $address,
					'UserCity' 			=> $city,
					'UserProvince'      => $province,
					'UserZip'      		=> $zip
				);

                $this->m_customer->update($data,$id);
            }
        }else {
				$data = array(
					'UserName' 			=> $username,
					'UserFullName'		=> $fullname,
					'UserEmail' 		=> $email,
					'UserPhone'			=> $telephone,
					'UserAddress'		=> $address,
					'UserCity' 			=> $city,
					'UserProvince'      => $province,
					'UserZip'      		=> $zip
				);

				$this->m_customer->update($data,$id);
		}
		
		redirect('customer/edit/'.$id['UserID']);

	}

	
	function delete($id){
		
		$this->db->where('UserID',$id);
		$query = $this->db->get('users');
		$row = $query->row();
   
		unlink("./assets/backend/users/$row->UserPhoto");
   
		$this->db->delete('users', array('UserID' => $id));
		redirect('customer/');
   
   }

   

}
