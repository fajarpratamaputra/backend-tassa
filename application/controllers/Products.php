<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('template_d');
		$this->load->model('m_products');
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
		$data['prod'] = $this->m_products->get_join();
		$this->template_d->view('backend/products/product', $data);
	}

	public function add()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$data['category'] = $this->m_category->get_all();
		$this->template_d->view('backend/products/addProduct', $data);
	}

	public function insert()
    {
		$name 		 = $this->input->post("name");
		$price 		 = $this->input->post("price");
		$description = $this->input->post("description");
		$category 	 = $this->input->post("category");
		$stok 	 	 = $this->input->post("stok");
		
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
					'ProductName' 		=> $name,
					'ProductPrice' 		=> $price,
					'ProductCartDesc'	=> $description,
					'ProductImage' 		=> $gbr['file_name'],
					'ProductCategoryID' => $category,
					'ProductStock'      => $stok
				);

                $this->m_products->add_products($data);
            }
        }else {
				$data = array(
					'ProductName' 		=> $name,
					'ProductPrice' 		=> $price,
					'ProductCartDesc'	=> $description,
					'ProductCategoryID' => $category,
					'ProductStock'      => $stok
				);

				$this->m_products->add_products($data);
		}
		
		redirect('products/');

	}

	public function edit()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$id_product = $this->uri->segment('3');
		$data['prod'] = $this->m_products->edit($id_product);
		$data['category'] = $this->m_category->get_all();
		$this->template_d->view('backend/products/editProduct', $data);
	}

	public function update()
    {
		$id['ProductID'] = $this->input->post('id');
		$name 		 	 = $this->input->post("name");
		$price 		 	 = $this->input->post("price");
		$description 	 = $this->input->post("description");
		$category 	 	 = $this->input->post("category");
		$stok 	 	 	 = $this->input->post("stok");
		
        $this->load->library('upload');
        $nmfile = "file-".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/backend/products/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['max_size'] = '10048'; 
		$config['max_width']  = '8000'; //lebar maksimum 1288 px
        $config['max_height']  = '6000'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['file']['name'])
        {
			$this->db->where('ProductID',$this->input->post('id'));
			$query = $this->db->get('products');
			$row = $query->row();

			unlink("./assets/backend/products/$row->ProductImage");
            if ($this->upload->do_upload('file'))
            {
                $gbr = $this->upload->data();
				$data = array(
					'ProductName' 		=> $name,
					'ProductPrice' 		=> $price,
					'ProductCartDesc'	=> $description,
					'ProductImage' 		=> $gbr['file_name'],
					'ProductCategoryID' => $category,
					'ProductStock'      => $stok
				);

                $this->m_products->update($data,$id);
            }
        }else {
				$data = array(
					'ProductName' 		=> $name,
					'ProductPrice' 		=> $price,
					'ProductCartDesc'	=> $description,
					'ProductCategoryID' => $category,
					'ProductStock'      => $stok
				);

				$this->m_products->update($data,$id);
		}
		
		redirect('products/');

	}
	

	function delete($id){

		$this->db->where('ProductID',$id);
		$query = $this->db->get('products');
		$row = $query->row();
   
		unlink("./assets/backend/products/$row->ProductImage");
   
		$this->db->delete('products', array('ProductID' => $id));
		redirect('products/');
   
   }
   



}
