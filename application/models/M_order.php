<?php

class M_Order extends CI_Model {

    var $table;

    function __construct() {
        parent::__construct();
        $this->table = "orders";
	}
	
	// function data1($number,$offset){
	// 	return $query = $this->db->get($this->table,$number,$offset)->result();		
	// }

	public function data($number,$offset)
	{
		$this->db->join('users u', 'u.UserID = o.OrderUserID')
				 ->order_by('o.OrderID', 'DESC');
		return $this->db->get('orders o',$number,$offset)->result();
	}

	public function jumlah_data()
	{
		$this->db->join('users u', 'u.UserID = o.OrderUserID')
				 ->order_by('o.OrderID', 'DESC');
		return $this->db->get('orders o')->num_rows();
	}
 
	// function jumlah_data1(){
	// 	return $this->db->get($this->table)->num_rows();
	// }

    function add_orders($data) {
        $insert = $this->db->insert($this->table, $data);
        if ($insert) :
            return $this->db->insert_id();
        endif;
	}
	

	public function get_order($id)
	{
		$this->db->where('OrderID', $id);
		return $this->db->get('orders')->row();
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
		$query = $this->db->join('users u', 'u.UserID = c.userid')
						  ->join('products p', 'p.ProductID = c.productid')
						  ->where('c.id_cart', $id)
						  ->get('cart c');
                

		if($query){
			return $query->row();
		}else{
			return false;
		}

    }
    
    public function update($data, $id)
	{
		$query = $this->db->update("orders", $data, $id);

	}
    
    public function delete($id)
	{
		$query = $this->db->delete("orders", $id);
	}

}

?>
