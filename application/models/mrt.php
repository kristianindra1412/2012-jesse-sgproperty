<?php

class Mrt extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getMrtById($id) {
        $query = $this->db->get_where('mrt', array('id' => $id));
        $result = $query->row();
        return $result;
    }
	
  function getAllMrt($fields = null) {
    $field = " * ";
    if ($fields != null) {
      $field = $fields;    
    }
    $query = $this->db->query("SELECT ".$field." FROM mrt");
        $result = $query->result();
        return $result;
  
  }
  /*/
    Draw Combobox based on MRT list
    name = mrt_list
  /*/
  function drawCombobox($area = "*", $name='mrt_list', $selected = null) {
    $where = "";
    if ($area != "*") $where = "WHERE area='$area'";
    $query = $this->db->query("
      SELECT code, name
      FROM mrt
      $where
      ");
    $result = $query->result();
    $s = "<select id='$name' name='$name'>";
      $s .= "<option value='*'>Any</option>";
      foreach ($result as $mrt_obj) {
      $s .= "<option value='".$mrt_obj->code."'>".$mrt_obj->code." - ".$mrt_obj->name."</option>";
      }    
    $s .= "</select>";    
    return $s;
  }
	function drawCheckbox($area = "*", $name='mrt_list', $selected = null) {
    $where = "";
    if ($area != "*") $where = "WHERE area='$area'";
		$query = $this->db->query("
      SELECT code, type, name
      FROM mrt
      $where
      ");
    $result = $query->result();
    $s = "";
    $s .= "<table style='color:white' class='tableBasic' border=1 cellpadding=5 cellspacing=2>";
      $s .= "<tr valign='top' align='center'>";
        $s .= "<th style='color:red'>NS</th>";
        $s .= "<th style='color:green'>EW</th>";
        $s .= "<th style='color:purple'>NE</th>";
        $s .= "<th style='color:yellow'>CL</th>";
      $s .= "</tr>";
      $s .= "<tr valign='top'>";
        $s .= "<td id='NS' style='background-color:red'>";
          foreach ($result as $mrt_obj) {
            if ($mrt_obj->type == 'NS')
              $s .= "<input type='checkbox' value='".$mrt_obj->code."'>".$mrt_obj->name."<br>";
          }    
        $s .= "</td>";
        $s .= "<td id='EW' style='background-color:green'>";
          foreach ($result as $mrt_obj) {
            if ($mrt_obj->type == 'EW')
              $s .= "<input type='checkbox' value='".$mrt_obj->code."'>".$mrt_obj->name."<br>";
          }    
        $s .= "</td>";
        $s .= "<td id='NE' style='background-color:purple'>";
          foreach ($result as $mrt_obj) {
            if ($mrt_obj->type == 'NE')
              $s .= "<input type='checkbox' value='".$mrt_obj->code."'>".$mrt_obj->name."<br>";
          }    
        $s .= "</td>";
        $s .= "<td id='CL' style='background-color:yellow;color:black'>";
          foreach ($result as $mrt_obj) {
            if ($mrt_obj->type == 'CL')
              $s .= "<input type='checkbox' value='".$mrt_obj->code."'>".$mrt_obj->name."<br>";
          }    
        $s .= "</td>";
      $s .= "</tr>";
    $s .= "</table>";
    return $s;
	}
    
}

?>