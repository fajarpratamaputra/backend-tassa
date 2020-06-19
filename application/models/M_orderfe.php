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
				->where('cart.orderid', '')
				->order_by('cart.id_cart','ASC');
		return $this->db->get('cart')->result();
	}

	public function history($id)
	{
		$this->db->join('products','products.ProductID = cart.productid')
				->join('productcategories','productcategories.CategoryID = products.ProductCategoryID')
				->where('cart.userid', $id)
				->where('cart.orderid !=', '')
				->order_by('cart.id_cart','DESC');
		return $this->db->get('cart')->result();
	}

	public function get_order($id)
	{
		$this->db->where('OrderUserID', $id)
				 ->order_by('OrderID','DESC');
		return $this->db->get('orders')->result();
	}

	public function get_detail($code)
	{
		$this->db->where('OrderCode', $code)
				 ->order_by('OrderID','DESC');
		return $this->db->get('orders')->row();
	}

	public function get_idorder($id)
	{
		$this->db->where('OrderCode', $id)
				 ->order_by('OrderID','DESC');
		return $this->db->get('orders')->result();
	}

	public function order($id)
	{
		$query = $this->db->query('SELECT * FROM orders WHERE OrderID=(SELECT max(OrderID) FROM orders) AND OrderUserID = '.$id.' ');
		return $query->row();
	}

	public function get_infoorder($id)
	{
		$this->db->where('OrderID', $id);
		return $this->db->get('orders')->row();
	}

	public function update_orders($data, $id)
	{
		$query = $this->db->update("orders", $data, $id);

	}

	public function update_cart($data_cart, $where)
	{
		$this->db->where($where);
		$query = $this->db->update("cart", $data_cart);

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

	function add_orders($data) {
        $insert = $this->db->insert('orders', $data);
        if ($insert) :
            return $this->db->insert_id();
        endif;
	}

}

?>
