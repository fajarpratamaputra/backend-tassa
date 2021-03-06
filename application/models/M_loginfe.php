<?php

class M_Loginfe extends CI_Model {

    var $table;

    function __construct() {
        parent::__construct();
        $this->table = "users";
	}
	
	
    function add_user($data) {
        $insert = $this->db->insert($this->table, $data);
        if ($insert) :
            return $this->db->insert_id();
        endif;
    }
    
    public function update_user($data, $id)
	{
		$query = $this->db->update("users", $data, $id);

	}
	
    public function get_join()
	{
		$this->db->join('productcategories','productcategories.CategoryID = products.ProductCategoryID')
				->order_by('products.ProductID','DESC');
		return $this->db->get('products')->result();
	}

	function cek_login($where){
		return $this->db->get_where('users',$where);
    }

    public function get_users($id)
	{
        return $this->db->where('UserID', $id)->get('users')->row();
    }
	
}

?>
