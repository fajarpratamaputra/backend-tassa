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
		// $data['prod'] = $this->m_products->get_join();
		$jumlah_data = $this->m_products->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/products/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['prod'] = $this->m_products->data($config['per_page'],$from);
		$this->template_d->view('backend/products/product', $data);
	}

	public function picture()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$id_product = $this->uri->segment('3');
		$data['picture'] = $this->m_products->get_picture($id_product);
		$data['prod'] = $this->m_products->edit($id_product);
		$this->template_d->view('backend/products/listPicture', $data);
	}

	public function add()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$data['category'] = $this->m_category->get_all();
		$this->template_d->view('backend/products/addProduct', $data);
	}

	public function addpicture()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->m_loginadmin->get_profile($id);
		$id_product = $this->uri->segment('3');
		$data['pic'] = $this->m_products->edit($id_product);
		$this->template_d->view('backend/products/addPicture', $data);
	}

	public function insert()
    {
		$name 		 = $this->input->post("name");
		$price 		 = $this->input->post("price");
		$description = $this->input->post("description");
		$category 	 = $this->input->post("category");
		$stok 	 	 = $this->input->post("stok");
		$weight 	 = $this->input->post("weight");
		
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
					'ProductWeight'		=> $weight,
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
					'ProductWeight'		=> $weight,
					'ProductCategoryID' => $category,
					'ProductStock'      => $stok
				);

				$this->m_products->add_products($data);
		}
		
		redirect('products/');

	}

	public function insert_picture()
    {
		$productid 		 = $this->input->post("productid");
		$color			 = $this->input->post("color");
		
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
					'productID' 	=> $productid,
					'picture' 		=> $gbr['file_name'],
					'color'			=> $color
				);

                $this->m_products->add_picture($data);
            }
        }
		
		redirect('products/picture/'.$productid);

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
		$weight 	 	 = $this->input->post("weight");
		
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
					'ProductWeight'		=> $weight,
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
					'ProductWeight'		=> $weight,
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

   function delete_picture($id){

		$this->db->where('id',$id);
		$query = $this->db->get('productimages');
		$row = $query->row();
		$productid = $row->productID;

		unlink("./assets/backend/products/$row->picture");

		$this->db->delete('productimages', array('id' => $id));
		redirect('products/picture/'.$productid);

	}
   



}
