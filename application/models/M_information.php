<?php

class M_Information extends CI_Model {

    var $table;

    function __construct() {
        parent::__construct();
        $this->table = "information";
	}
	
	// function data1($number,$offset){
	// 	return $query = $this->db->get($this->table,$number,$offset)->result();		
	// }

	public function get_information()
	{
		return $this->db->get('information')->result();
	}

	public function get_detail($id)
	{
		return $this->db->where('type', $id)->get('information')->row();
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

    function add_information($data) {
        $insert = $this->db->insert($this->table, $data);
        if ($insert) :
            return $this->db->insert_id();
        endif;
	}
    
    public function edit_information($data, $id)
	{
		$query = $this->db->update($this->table, $data, $id);

	}
    
    public function delete($id)
	{
		$query = $this->db->delete($this->table, $id);
	}

}

?>
