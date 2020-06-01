<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginfe extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('template_d');
		$this->load->model('m_loginfe');
  }

	// public function index()
	// {
	// 	$this->load->view('backend/users/login');
	// }

	public function insert()
    {
		$username 	= $this->input->post("username");
		$email 		= $this->input->post("email");
		$password 	= $this->input->post("password");
		$date 		= date('Y-m-d H:i:s');
		
        $data = array(
			'UserName' 				=> $username,
			'UserEmail' 			=> $email,
			'UserPassword'			=> password_hash($password, PASSWORD_BCRYPT),
			'UserRegistrationDate'  => $date
		);

		$this->m_loginfe->add_user($data);
		$where = array(
			'username' => $username
			);
		$cek = $this->m_loginfe->cek_login($where)->row();
		if (!empty($cek) && password_verify($password, $cek->UserPassword)) {
			// if this username exists, and the input password is verified using password_verify
			$data_session = array(
				'name' => $username,
				'status' => "login",
				'user_id' => $cek->UserID
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("beranda/"));
		} else {
			echo "Username dan password salah !";
			redirect(base_url('beranda/'));
		}

	}

	public function update_user()
    {
		$id['UserID']= $this->session->userdata('user_id');
		$full 		 = $this->input->post("full");
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
					'UserZip'      		=> $zip,
					'UserFullName'      => $full
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
					'UserZip'      		=> $zip,
					'UserFullName'      => $full
				);

				$this->m_loginfe->update_user($data,$id);
		}
		
		redirect('beranda/account/');

	}

	function login_action(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username
			);
		$cek = $this->m_loginfe->cek_login($where)->row();
		if (!empty($cek) && password_verify($password, $cek->UserPassword)) {
			// if this username exists, and the input password is verified using password_verify
			$data_session = array(
				'name' => $username,
				'status' => "login",
				'user_id' => $cek->UserID
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("beranda/"));
		} else {
			echo "Username dan password salah !";
			redirect(base_url('beranda/'));
		}
		
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('beranda/'));
	}

}
