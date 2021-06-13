<?php

class regsitration_model extends CI_Model
{
    function insert_data($data)
    {
        $this->db->insert("details",$data);
    }
}
?>