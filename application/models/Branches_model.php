<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Branches_model extends App_Model
{
    public function add($data){
        $this->db->insert(db_prefix() . 'branches', $data);
        $id = $this->db->insert_id();
        return $id;
    }

    function getBranches()
    {
        $query = $this->db->get('tblbranches');
        $result = $query->result();

        
        return $result;
    }
}
?>