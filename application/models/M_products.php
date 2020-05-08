<?php

class M_Products extends CI_Model {

    var $table;

    function __construct() {
        parent::__construct();
        $this->table = "products";
	}
	
	// function data1($number,$offset){
	// 	return $query = $this->db->get($this->table,$number,$offset)->result();		
	// }

	public function data($number,$offset)
	{
		$this->db->join('productcategories','productcategories.CategoryID = products.ProductCategoryID')
				->order_by('products.ProductID','DESC');
		return $this->db->get('products',$number,$offset)->result();
	}

	public function jumlah_data()
	{
		$this->db->join('productcategories','productcategories.CategoryID = products.ProductCategoryID')
				->order_by('products.ProductID','DESC');
		return $this->db->get('products')->num_rows();
	}
 
	// function jumlah_data1(){
	// 	return $this->db->get($this->table)->num_rows();
	// }

    function add_products($data) {
        $insert = $this->db->insert($this->table, $data);
        if ($insert) :
            return $this->db->insert_id();
        endif;
	}
	
	function add_picture($data) {
        $insert = $this->db->insert('productimages', $data);
        if ($insert) :
            return $this->db->insert_id();
        endif;
    }

    public function get_join()
	{
		$this->db->join('productcategories','productcategories.CategoryID = products.ProductCategoryID')
				->order_by('products.ProductID','DESC');
		return $this->db->get('products')->result();
	}
	
	public function get_picture($productid)
	{
		$this->db->join('products','productimages.productID = products.ProductID')
				->where('products.ProductID', $productid)
				->order_by('productimages.id','ASC');
		return $this->db->get('productimages')->result();
	}
	
	public function get_count_picture($productid)
	{
		$this->db->join('products','productimages.productID = products.ProductID')
				->where('products.ProductID', $productid)
				->order_by('productimages.id','ASC');
		return $this->db->get('productimages')->num_rows();
	}
    
    public function get_product_frontend()
	{
		$this->db->join('productcategories','productcategories.CategoryID = products.ProductCategoryID')
                ->order_by('products.ProductID','DESC')
                ->limit('8');
		return $this->db->get('products')->result();
    }
    
    public function get_product_related()
	{
		$this->db->join('productcategories','productcategories.CategoryID = products.ProductCategoryID')
                ->order_by('products.ProductID','DESC')
                ->limit('4');
		return $this->db->get('products')->result();
	}

    public function get_all()
	{
		$query = $this->db->select("*")
				 ->from($this->table)
				 ->get();
		return $query->result();
    }

    public function edit($id)
	{

		$query = $this->db->join('productcategories','productcategories.CategoryID = products.ProductCategoryID')
                ->where('products.ProductID', $id)
                ->get('products');
                

		if($query){
			return $query->row();
		}else{
			return false;
		}

    }
    
    public function update($data, $id)
	{
		$query = $this->db->update("products", $data, $id);

	}
    
    public function delete($id)
	{
		$query = $this->db->delete("products", $id);
	}

}

?>
