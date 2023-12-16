<?php

class Area extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getAreaById($id) {
        $query = $this->db->get_where('area', array('id' => $id));
        $result = $query->row();
        return $result;
    }
	
	function getAllArea($fields = null) {
		$field = " * ";
		if ($fields != null) {
			$field = $fields;		
		}
		$query = $this->db->query("SELECT ".$field." FROM area");
        $result = $query->result();
        return $result;
	
	}
    
}

?>