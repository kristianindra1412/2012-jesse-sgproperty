<?php

class Rent_Sell extends CI_Model {

    function __construct() {
        parent::__construct();
    }
	
    function getRentSellById($id) {
        $query = $this->db->query("
					SELECT rs.*, 
						m.name AS mrt_name, 
						pt.name AS property_type_name, 
						a.name AS agent_name, a.contact_number, a.email AS agent_email, 
						o.name AS owner_name, o.email AS owner_email, o.phone
					FROM 
						rent_sell rs
						
					LEFT JOIN mrt m
					ON rs.mrt_id = m.id
					LEFT JOIN property_type pt
					ON rs.property_type_id = pt.id
					LEFT JOIN agent a
					ON rs.agent_id = a.id
					LEFT JOIN owner o
					ON rs.owner_id = o.id
					
					WHERE 
						rs.id = $id
						AND rs.expiry_date > now()

				");
        $result = $query->row();
        return $result;
    }
	
	function bumpAdv($id) {
		$this->db->query("
            UPDATE `rent_sell` 
            SET `bump_date` = now(),
				`expiry_date` = now() + INTERVAL 14 DAY,
				`modified_date` = now()
            WHERE id = $id 
        ");
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
			return false;
        } else {
            $this->db->trans_commit();
			return true;
        }
	}

	function getLatestRentSell($limit = 10, $offset=0, $condition = null) {		
		$data = "WHERE expiry_date > now()";
		if ($condition != null && !empty($condition)) {			
			foreach ($condition AS $name => $value) {
				$data_raw = "`".$name."` = '".$value."'";
				$data .= " AND " . $data_raw;
			}
		}
		$query = $this->db->query("
					SELECT * 
					FROM rent_sell 
					$data 
					ORDER BY bump_date DESC
					LIMIT $offset, $limit
				");
		$result = $query->result();
		return $result;
	}
	
	function getRentSellByCondition($limit = 10, $offset=0, $field = "*", $order = "", $condition = null) {		
		if ($condition != null && !empty($condition)) {			
			foreach ($condition AS $name => $value) {
				$data_raw[] = "`".$name."` = '".$value."'";				
			}
			$data = " WHERE " . implode(" AND ", $data_raw);
		}
		$query = $this->db->query("
					SELECT $field 
					FROM rent_sell 
					$data 
					$order
					LIMIT $offset, $limit
				");
		$result = $query->result();
		return $result;
	}
	
	function getTotalActiveRentSell($condition = null) {
		$data = "WHERE expiry_date > now()";
		if ($condition != null && !empty($condition)) {			
			foreach ($condition AS $name => $value) {
				$data_raw = "`".$name."` = '".$value."'";
				$data .= " AND " . $data_raw;
			}
		}
		$query = $this->db->query("SELECT count(id) AS total FROM rent_sell ".$data);
		
		$result = $query->row();
		if (!empty ($result)) {
            return $result->total;
        } else {
            return 0;
        }
	}

    function addNewRentSell($rent_sell) {
        $this->db->trans_begin();
        $this->db->query("
                INSERT INTO `rent_sell`
                (`title`, `description`, `address`, `postal_code`, `latitude`, `longitude`,
				`area_id`, `district_id`, `mrt_id`, `type`, `posted_by`, `unit_room`, `price`,
				`property_type_id`, `cobroke_welcome`, `aircon`, `furnish`, `total_bedroom`, `total_bathroom`,
				`agent_id`, `owner_id`, `expiry_date`, `bump_date`, `created_date`, `modified_date`)
                VALUES
                ('".mysql_real_escape_string($rent_sell['title']) . "', " .
				"'".mysql_real_escape_string($rent_sell['description'])."',".
				"'".mysql_real_escape_string($rent_sell['address'])."',".
				"'".mysql_real_escape_string($rent_sell['postal_code'])."',".
				$rent_sell['latitude'].",".
				$rent_sell['longitude'].",".
				$rent_sell['area_id'].",".
				$rent_sell['district_id'].",".
				$rent_sell['mrt_id'].",".
				"'".mysql_real_escape_string($rent_sell['type'])."',".
				"'".mysql_real_escape_string($rent_sell['posted_by'])."',".
				"'".mysql_real_escape_string($rent_sell['unit_room'])."',".
				$rent_sell['price'].",".
				$rent_sell['property_type_id'].",".
				"'".mysql_real_escape_string($rent_sell['cobroke_welcome'])."',".
				"'".mysql_real_escape_string($rent_sell['aircon'])."',".
				"'".mysql_real_escape_string($rent_sell['furnish'])."',".
				$rent_sell['total_bedroom'].",".
				$rent_sell['total_bathroom'].",".
				$rent_sell['agent_id'].",".
				$rent_sell['owner_id'].",".				
				"now() + INTERVAL 14 DAY, ".
				"now(), now(), now())");
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