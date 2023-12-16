<?php

class Agent extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getAgentById($id) {
        $query = $this->db->query("
					SELECT a.*, 
						aa.total_post
					FROM 
						agent a
						
					LEFT JOIN agent_account AS aa
					ON aa.agent_id = a.id
					
					WHERE 
						a.id = $id

				");
        $result = $query->row();
        return $result;
    }

    function updateFields($agent_id, $fields) {
        $data = null;
        foreach ($fields as $name => $value) {
            $data[$name] = $value;
        }
        $this->db->trans_begin();
        $this->db->where('id', $agent_id);
        $this->db->update('agent', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }
    }

    function addNewAgent($agent_data) {                
        $this->db->trans_begin();        
        $this->db->query("
                INSERT INTO `agent`
                (`code`, `created_date`, `modified_date`)
                VALUES
                ('".$agent_data['code'] . "', " .
                "now(), " .
                "now()')
                ");         
     
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();  
            return true;
        }
    }

}

?>