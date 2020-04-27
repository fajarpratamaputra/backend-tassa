<?php

class M_Loginadmin extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    function cek_login($where){
		  return $this->db->get_where('admin',$where);
    }
    
    public function get_profile($id)
	  {

      $query = $this->db->where('id', $id)
                  ->get('admin');
                  

      if($query){
        return $query->row();
      }else{
        return false;
      }

    }


}

?>
