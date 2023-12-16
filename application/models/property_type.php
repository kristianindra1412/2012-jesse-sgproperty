<?php

class Property_Type extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getPTypeById($id) {
        $query = $this->db->get_where('property_type', array('id' => $id));
        $result = $query->row();
        return $result;
    }
	
	function getAllPType($fields = null) {
		$field = " * ";
		if ($fields != null) {
			$field = $fields;
		}
		$query = $this->db->query("SELECT ".$field." FROM property_type");
        $result = $query->result();
        return $result;
	
	}
    
}

?>