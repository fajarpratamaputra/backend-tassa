<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('template_d');
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
		$data['category'] = $this->m_category->get_all();
		$this->template_d->view('backend/category/category', $data);
	}

	public function add()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
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
