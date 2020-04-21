<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('template_d');
		$this->load->model('m_loginadmin');
		$this->load->model('m_faq');
		if($this->session->userdata('id') == null){
			redirect(base_url("login"));
		}
		
  	}

	public function index()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$data['faq'] = $this->m_faq->get_faq();
		$this->template_d->view('backend/faq/faq',$data);
	}

	public function addfaq()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$this->template_d->view('backend/faq/addFaq', $data);
	}

	public function insert()
    {
		$answer 		 = $this->input->post("answer");
		$question		 = $this->input->post("question");

		$data = array(
			'answer' 		=> $answer,
			'question' 		=> $question
		);

		
		$this->m_faq->add_faq($data);
		
		redirect('faq/');

	}

	public function editfaq()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$id_faq = $this->uri->segment('3');
		$data['faq'] = $this->m_faq->get_detail_faq($id_faq);
		$this->template_d->view('backend/faq/editFaq', $data);
	}

	public function update()
    {
		$id['id'] 	= $this->input->post('id');
		$answer 	= $this->input->post("answer");
		$question	= $this->input->post("question");

		$data = array(
			'answer' 		=> $answer,
			'question' 		=> $question
		);

		$this->m_faq->update($data,$id);
        
		
		redirect('faq/');

	}

	function delete($id){

		$this->db->delete('faq', array('id' => $id));
		redirect('faq/');
   
   }




}
