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
      
      public function get_category($id)
      {

        $query = $this->db->where('CategoryID', $id)
                    ->get($this->table);
                    

        if($query){
          return $query->row();
        }else{
          return false;
        }

      }

      public function update($data, $id)
      {
        $query = $this->db->update($this->table, $data, $id);

      }

}

?>
