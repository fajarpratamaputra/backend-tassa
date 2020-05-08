<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('template_d');	
	  }
	  
	public function index()
	{
		$this->template_d->view('backend/item/item');
	}

	public function add()
	{
		$this->template_d->view('backend/item/add');
	}

	public function tables()
	{
		$this->template_d->view('backend/item/tables');
	}




}
