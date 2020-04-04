<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('template_d');
		
  	}

	public function profile()
	{
		$this->template_d->view('backend/users/profile');
	}




}
