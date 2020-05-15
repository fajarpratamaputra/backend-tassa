<?php

class M_Address extends CI_Model {

    var $table;

    function __construct() {
        parent::__construct();
        $this->table = "address";
	}
	
	// function data1($number,$offset){
	// 	return $query = $this->db->get($this->table,$number,$offset)->result();		
	// }

	public function data($number,$offset)
	{
		$this->db->join('users u','u.UserID = a.userid')
				->order_by('a..id','DESC');
		return $this->db->get('address a',$number,$offset)->result();
	}

	public function jumlah_data()
	{
		$this->db->join('users u','u.UserID = a.userid')
				->order_by('a..id','DESC');
		return $this->db->get('address a')->num_rows();
	}
 
	// function jumlah_data1(){
	// 	return $this->db->get($this->table)->num_rows();
	// }

    function add_address($data) {
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


    public function get_addressfe($user)
	{
		$this->db->join('users u','u.UserID = a.userid')
				->where('a.userid', $user)
				->order_by('a.id','DESC');
		return $this->db->get('address a')->result();
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
