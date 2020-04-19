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
		
		redirect('beranda/');

	}

	// public function tes()
	// {
		
	// 	$encrypted_password = 'anisa01';
	// 	$pass = '$2y$10$VXqgJnTDmnblDYwqDELa2OvpHM7g/2yIHNwfxc.GViX2qCxq0QT3W';
	// 	$decrypted_string = password_verify($encrypted_password, $pass);

	// 	echo $decrypted_string;
	// }

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
