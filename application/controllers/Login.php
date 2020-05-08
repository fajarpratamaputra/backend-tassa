<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('template_d');
		$this->load->model('m_loginadmin');
  }

	public function index()
	{
		$this->load->view('backend/users/login');
	}

	function aksi_login(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_loginadmin->cek_login($where);
		if($cek->num_rows() > 0){
		foreach ($cek->result() as $row)
		{

			$data_session = array(
				'nama' => $username,
				'status' => "login",
				'id' => $row->id
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("dashboard/"));
			}
		}else{
			echo "Username dan password salah !";
			redirect(base_url('Login/'));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Login/'));
	}

}
