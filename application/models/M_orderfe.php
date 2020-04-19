<?php

class M_Orderfe extends CI_Model {

    var $table;

    function __construct() {
        parent::__construct();
        
	}

	public function cart($id)
	{
		$this->db->join('products','products.ProductID = cart.productid')
				->join('productcategories','productcategories.CategoryID = products.ProductCategoryID')
				->where('cart.userid', $id)
				->order_by('cart.id_Cart','ASC');
		return $this->db->get('cart')->result();
	}

	public function user($id)
	{
		$this->db->where('UserID', $id);
		return $this->db->get('users')->row();
	}
	
	function add_cart($data) {
        $insert = $this->db->insert('cart', $data);
        if ($insert) :
            return $this->db->insert_id();
        endif;
	}
    
    public function delete($id)
	{
		$query = $this->db->delete("products", $id);
	}

}

?>
