<?php

class M_Category extends CI_Model {

    var $table;

    function __construct() {
        parent::__construct();
        $this->table = "productcategories";
    }

    function add_category($data) {
        $insert = $this->db->insert($this->table, $data);
        if ($insert) :
            return $this->db->insert_id();
        endif;
    }

    public function get_all()
	{
		$query = $this->db->select("*")
				 ->from($this->table)
				 ->get();
		return $query->result();
	}

}

?>
