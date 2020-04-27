<?php

class M_Customer extends CI_Model {

    var $table;

    function __construct() {
        parent::__construct();
        $this->table = "cart";
	}
	
	// function data1($number,$offset){
	// 	return $query = $this->db->get($this->table,$number,$offset)->result();		
	// }

	public function data($number,$offset)
	{
		return $this->db->get('users',$number,$offset)->result();
	}

	public function jumlah_data()
	{
		return $this->db->get('users')->num_rows();
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
		return $this->db->get('users')->result();
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
		$query = $this->db->where('UserID', $id)
                ->get('users');
                

		if($query){
			return $query->row();
		}else{
			return false;
		}

    }
    
    public function update($data, $id)
	{
		$query = $this->db->update("users", $data, $id);

	}
    
    public function delete($id)
	{
		$query = $this->db->delete("products", $id);
	}

}

?>
