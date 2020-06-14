<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Information extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('template_d');
		$this->load->model('m_loginadmin');
		$this->load->model('m_information');
		$this->load->model('m_article');
		if($this->session->userdata('id') == null){
			redirect(base_url("login"));
		}
		
  	}

	public function index()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$this->template_d->view('backend/information/information',$data);
	}

	public function article()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$id_about = $this->uri->segment('2');
		$data['about'] = $this->m_information->get_detail($id_about);
		$data['article'] = $this->m_article->get();
		$this->template_d->view('backend/article/article', $data);
	}

	public function article_add()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$id_about = $this->uri->segment('2');
		$data['about'] = $this->m_information->get_detail($id_about);
		$this->template_d->view('backend/article/addArticle', $data);
	}

	public function article_insert()
    {
		$title		 = $this->input->post("title");
		$description = $this->input->post("desc");
		
        $this->load->library('upload');
        $nmfile = "file-".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/backend/products/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['max_size'] = '3048'; 
		$config['max_width']  = '1480'; //lebar maksimum 1288 px
        $config['max_height']  = '820'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['file']['name'])
        {
            if ($this->upload->do_upload('file'))
            {
                $gbr = $this->upload->data();
				$data = array(
					'title' 			=> $title,
					'description' 		=> $description,
					'slug' 				=> slug($title.' '.time()),
					'img' 				=> $gbr['file_name'],
				);

                $this->m_article->add_article($data);
            }
        }else {
				$data = array(
					'title' 			=> $title,
					'description' 		=> $description,
					'slug' 				=> slug($title.' '.time()),
				);

				$this->m_article->add_article($data);
		}
		
		redirect('information/article/');

	}

	public function article_edit()
	{
		$art = $this->uri->segment(3);
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$id_about = $this->uri->segment('2');
		$data['article'] = $this->db->where('id',$art)->get('article')->row();
		$this->template_d->view('backend/article/editArticle', $data);
	}

	function article_delete($id){

		$this->db->where('id',$id);
		$query = $this->db->get('article');
		$row = $query->row();
   
		unlink("./assets/backend/products/$row->img");
   
		$this->db->delete('article', array('id' => $id));
		redirect('information/article');
   
   }

	public function about()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$id_about = $this->uri->segment('2');
		$data['about'] = $this->m_information->get_detail($id_about);
		$this->template_d->view('backend/information/about', $data);
	}

	public function how()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$id_how = $this->uri->segment('2');
		$data['how'] = $this->m_information->get_detail($id_how);
		$this->template_d->view('backend/information/how', $data);
	}

	public function shipping()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$id_shipping = $this->uri->segment('2');
		$data['shipping'] = $this->m_information->get_detail($id_shipping);
		$this->template_d->view('backend/information/shipping', $data);
	}

	public function payment()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$id_shipping = $this->uri->segment('2');
		$data['payment'] = $this->m_information->get_detail($id_shipping);
		$this->template_d->view('backend/information/payment', $data);
	}

	public function terms()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$id_about = $this->uri->segment('2');
		$data['terms'] = $this->m_information->get_detail($id_about);
		$this->template_d->view('backend/information/terms', $data);
	}

	public function insert()
    {
		$id['type'] 	= $this->input->post("type");
		$description	= $this->input->post("desc");

		$cek_type = $this->db->where('type', $id['type'])->get('information')->num_rows();
		
		if($cek_type > 0) {
			$data = array(
				'description' 	=> $description
			);
			
			$this->m_information->edit_information($data,$id);
		}
		else {
			$data = array(
				'type' 			=> $id['type'],
				'description' 	=> $description
			);
			
			$this->m_information->add_information($data);
		}
	
		
		redirect('information/'.$id['type']);

	}

	public function editfaq()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$id_faq = $this->uri->segment('3');
		$data['faq'] = $this->m_information->get_detail_faq($id_faq);
		$this->template_d->view('backend/information/editInformation', $data);
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

		$this->m_information->update($data,$id);
        
		
		redirect('information/');

	}

	




}
