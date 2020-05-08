<?php

class M_Productfe extends CI_Model {

    var $table;

    function __construct() {
        parent::__construct();
        $this->table = "products";
	}
	
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

    public function get_join()
	{
		$this->db->join('productcategories','productcategories.CategoryID = products.ProductCategoryID')
				->order_by('products.ProductID','DESC');
		return $this->db->get('products')->result();
	}

	public function other_product()
	{
		$this->db->join('productcategories','productcategories.CategoryID = products.ProductCategoryID')
				->order_by('products.ProductID','RANDOM')
				->limit(3);
		return $this->db->get('products')->result();
	}
	
	public function get_picture($productid,$color)
	{
		$this->db->join('products','productimages.productID = products.ProductID')
				->where('products.ProductID', $productid)
				->where('productimages.color', $color)
				->order_by('productimages.id','ASC')
				->limit(4);
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
