<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('template_d');
  }

	public function index()
	{
		$this->load->view('backend/login/login');
	}


	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Login/'));
	}

}
