<?php

class select_model extends CI_Model
{
    function fetch_state()
    {
        $this->db->order_by("state", "ASC");
        $query_state= $this->db->get("state");
        return $query_state->result();
        
    }
    function fetch_city()
    {
        $this->db->order_by("city","ASC");
        $query_city= $this->db->get("city");
        return $query_city->result();
    }
    function fetch_country()
    {
        $this->db->order_by("country","ASC");
        $query_country= $this->db->get("country");
        return $query_country->result();
    }
}


?>