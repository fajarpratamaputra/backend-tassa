<?php

class M_Article extends CI_Model {

    var $table;

    function __construct() {
        parent::__construct();
        $this->table = "article";
	}
	
	// function data1($number,$offset){
	// 	return $query = $this->db->get($this->table,$number,$offset)->result();		
	// }

	public function data($number,$offset)
	{
		$this->db->order_by('id','DESC');
		return $this->db->get('article',$number,$offset)->result();
	}

	public function get()
	{
		return $this->db->get('article')->result();
	}

	public function jumlah_data()
	{
		$this->db->order_by('id','DESC');
		return $this->db->get('article')->num_rows();
	}
 
	// function jumlah_data1(){
	// 	return $this->db->get($this->table)->num_rows();
	// }

    function article($data) {
        $insert = $this->db->insert($this->table, $data);
        if ($insert) :
            return $this->db->insert_id();
        endif;
	}

	public function update($data, $id)
	{
		$query = $this->db->update($this->table, $data, $id);

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
    

}

?>
