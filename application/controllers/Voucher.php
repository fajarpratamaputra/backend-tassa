<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voucher extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('template_d');
		$this->load->model('m_voucher');
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
		$data['voucher'] = $this->m_voucher->get_all();
		$this->template_d->view('backend/voucher/voucher', $data);
	}

	public function add()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$this->template_d->view('backend/voucher/addVoucher', $data);
	}

	public function insert()
	{
		$code 	= strtoupper($this->input->post("code"));
		$value 	= $this->input->post("value");
		$start 	= $this->input->post("start");
		$end 	= $this->input->post("end");

		$data = array(
			'code_voucher' 		=> $code,
			'value' 			=> $value,
			'begin_date' 		=> $start,
			'expired_date' 		=> $end
		);

		$this->m_voucher->add_voucher($data);
		//redirect
		redirect('voucher/');

	}

	public function edit()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$code = $this->uri->segment('3');
		$data['vou'] = $this->m_voucher->get_voucher($code);
		$this->template_d->view('backend/voucher/editVoucher', $data);
	}

	public function update()
    {
		$id['id_voucher'] = $this->input->post('id_voucher');
		$code 	= strtoupper($this->input->post("code"));
		$value 	= $this->input->post("value");
		$start 	= $this->input->post("start");
		$end 	= $this->input->post("end");

		$data = array(
			'code_voucher' 		=> $code,
			'value' 			=> $value,
			'begin_date' 		=> $start,
			'expired_date' 		=> $end
		);
		$this->m_voucher->update($data,$id);
		
		redirect('voucher/');

	}

	function delete($code)
	{
		$this->db->delete('voucher', array('code_voucher' => $code));
		redirect('voucher/');
   
   }

}
