<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Footpicture extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('template_d');
		$this->load->model('m_footpicture');
		$this->load->model('m_loginadmin');
		if($this->session->userdata('id') == null){
			redirect(base_url("login"));
		}
		
	  }
	
	public function index()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$data['footer'] = $this->m_footpicture->get_footer();
		$this->template_d->view('backend/footpicture/footPicture', $data);
	}

	public function add()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$this->template_d->view('backend/products/addProduct', $data);
	}

	public function insert_picture()
    {
		$date 		 = date('Y-m-d H:i:s');
		
		$this->load->library('upload');
        $nmfile = "file-".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/backend/banner/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['max_size'] = '3048'; 
		$config['max_width']  = '1480'; //lebar maksimum 1288 px
        $config['max_height']  = '820'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya


        $this->upload->initialize($config);
        
        if($_FILES['img']['name'])
        {
            if ($this->upload->do_upload('img'))
            {
                $gbr = $this->upload->data();
				$data = array(
					'picture_slider' 	=> $gbr['file_name'],
					'type_picture'		=> 'footer',
					'created_at'		=> $date
				);

                $this->m_footpicture->add_picture($data);
            }
		}
		
		
		redirect('footpicture/');

	}


   function delete_picture($id){

		$this->db->where('id_slider',$id);
		$query = $this->db->get('slider');
		$row = $query->row();
		
		unlink("./assets/backend/slider/$row->picture_slider");

		$this->db->delete('slider', array('id_slider' => $id));
		redirect('banner/');

	}
   



}
