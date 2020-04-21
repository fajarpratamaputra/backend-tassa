<?php

class M_Setting extends CI_Model {

    var $table;

    function __construct() {
        parent::__construct();
        $this->table = "setting";
	}
	
	// function data1($number,$offset){
	// 	return $query = $this->db->get($this->table,$number,$offset)->result();		
	// }

	public function get_setting()
	{
		return $this->db->get('setting')->row();
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

    function add_picture($data) {
        $insert = $this->db->insert($this->table, $data);
        if ($insert) :
            return $this->db->insert_id();
        endif;
	}
    
    public function update($data, $id)
	{
		$query = $this->db->update("setting", $data, $id);

	}
    
    public function delete($id)
	{
		$query = $this->db->delete("slider", $id);
	}

}

?>
