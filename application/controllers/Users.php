<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('template_d');
		$this->load->model('m_loginadmin');
		if($this->session->userdata('id') == null){
			redirect(base_url("login"));
		}
		
  	}

	public function profile()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$this->template_d->view('backend/users/profile',$data);
	}




}
