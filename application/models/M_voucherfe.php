<?php

class M_Voucherfe extends CI_Model {

    var $table;

    function __construct() {
        parent::__construct();
        $this->table = "voucher";
    }

    function add_voucher($data) {
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
      
    public function get_voucher($code)
    {

      $query = $this->db->where('code_voucher', $code)
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
