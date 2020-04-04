<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('template_d');
		$this->load->model('m_category');
		
	  }
	  
	public function index()
	{
		$data['category'] = $this->m_category->get_all();
		$this->template_d->view('backend/category/category', $data);
	}

	public function add()
	{
		$this->template_d->view('backend/category/addCategory');
	}

	public function insert()
	{
		$category = $this->input->post("category");
		$data = array(
			'CategoryName' 		=> $category
		);

		$this->m_category->add_category($data);
		//redirect
		redirect('categories/');

	}

}
