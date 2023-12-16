<?php

class District extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getDistrictById($id) {
        $query = $this->db->get_where('district', array('id' => $id));
        $result = $query->row();
        return $result;
    }
	
	function getAllDistrict($fields = null) {
		$field = " * ";
		if ($fields != null) {
			$field = $fields;		
		}
		$query = $this->db->query("SELECT ".$field." FROM district");
        $result = $query->result();
        return $result;	
	}
  function drawCombobox($name='district_list', $selected = null) {
    $query = $this->db->query("
      SELECT code, name
      FROM district
      ");
    $result = $query->result();
    $s = "<select id='$name' name='$name'>";
      $s .= "<option value='*'>Any</option>";
      foreach ($result as $district_obj) {
      $s .= "<option value='".$district_obj->code."'>".$district_obj->name."</option>";
      }    
    $s .= "</select>";    
    return $s;
  }
  function drawCheckbox($name='district_list', $selected = null) {
    $query = $this->db->query("
      SELECT code, name
      FROM district
      ");
    $result = $query->result();
    $i = 0;
    $s = "";
    $s .= "<table class='tableBasic' border=1 cellpadding=5 cellspacing=2>";
      $s .= "<tr>";
        $s .= "<td>";
        foreach ($result as $district_obj) {
          if ($i % 10 == 0 && $i != 0) {
            $s .= "</td><td>";
          }
          $s .= "<input type='checkbox' value='".$district_obj->code."'>".$district_obj->name."<br>";
          $i++;
        }    
        $s .= "</td>";
      $s .= "</tr>";    
    $s .= "</table>";    
    return $s;
  }
    
}

?>