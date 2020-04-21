<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('template_d');
		$this->load->model('m_loginadmin');
		$this->load->model('m_setting');
		if($this->session->userdata('id') == null){
			redirect(base_url("login"));
		}
		
  	}

	public function index()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$data['setting'] = $this->m_setting->get_setting();
		$this->template_d->view('backend/setting/setting',$data);
	}

	public function update()
    {
		$id['id'] 	= $this->input->post('id');
		$url 		= $this->input->post("url");
		$address 	= $this->input->post("address");
		$telepon 	= $this->input->post("telepon");
		
        $data = array(
			'office_address' 	=> $address,
			'telepon' 			=> $telepon,
			'url_web'			=> $url
		);

		$this->m_setting->update($data,$id);
        
		
		redirect('setting/');

	}




}
