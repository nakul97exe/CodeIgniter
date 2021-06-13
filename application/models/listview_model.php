<?php

class listview_model extends CI_Model
{

    function fetch_data()
    {
        $this->db->select('*');
        $t= $this->db->get('details');
        return $t;

    }
}
?>