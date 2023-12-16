<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends MY_Controller {

    function __construct() {
      parent::__construct();
    }
    
    public function login() {
      
    }

    public function index() {
		  $mode = 1; // not login
		  // check session
		  // if login then agent
		  // if login then $mode = 2
		  // if not login, then ask agent or owner
		  
		  $this->data['view_mode'] = 1;
		  $this->view = "register/index";
		  $this->render();
    }
	
	public function posting() {
		if (isset($_POST['actions']) && isset($_POST['posted_as']) && isset($_POST['actions'])) {			
			$posted_as = ($_POST['posted_as'] == 'agent' || $_POST['posted_as'] == 'owner') ? $_POST['posted_as'] : 'owner';
			$actions = ($_POST['actions'] == 'rentroom' || $_POST['actions'] == 'rentunit' || $_POST['actions'] == 'sellunit') ? $_POST['actions'] : 'rentroom';
			$this->data['actions'] = $actions;
			$this->data['posted_as'] = $posted_as;
			$this->data['district_list'] = $this->District->getAllDistrict("id, code, name");
			$this->data['area_list'] = $this->Area->getAllArea("id, name");
			$this->data['mrt_list'] = $this->Mrt->getAllMrt();
			$this->data['type'] = ($_POST['actions'] == 'rentroom' || $_POST['actions'] == 'rentunit') ? 'RENT' : 'SELL';
			$this->data['unit_room'] = ($_POST['actions'] == 'rentunit' || $_POST['actions'] == 'sellunit') ? 'UNIT' : 'ROOM';
			$this->data['posted_by'] = strtoupper($posted_as);
			
			$this->view = "posted/posting";
			$this->render();						
		} else {
			$this->data['view_mode'] = 1;
			$this->view = "posted/index";
			$this->render();
		}
	}
	
	public function process() {
		if (isset($_POST['process'])) {
			$datas['title'] = $_POST['ptitle'];
			$datas['description'] = $_POST['pdesc'];
			$datas['address'] = $_POST['paddress'];
			$datas['postal_code'] = $_POST['ppcode'];
			$datas['area_id'] = $_POST['parea'];
			$datas['district_id'] = $_POST['pdistrict'];
			$datas['mrt_id'] = $_POST['pmrt'];
			$datas['type'] = $_POST['ptype'];
			$datas['posted_by'] = $_POST['pposted'];
			$datas['unit_room'] = $_POST['punitroom'];
			$datas['price'] = $_POST['pprice'];
			$datas['property_type_id'] = $_POST['pptype'];
			$datas['cobroke_welcome'] = $_POST['pcobroke'];
			$datas['aircon'] = $_POST['paircon'];
			$datas['furnish'] = $_POST['pfurnish'];
			$datas['total_bedroom'] = $_POST['ptbedroom'];
			$datas['total_bathroom'] = $_POST['ptbathroom'];
			$datas['agent_id'] = 1;
			$datas['owner_id'] = 1;
			
			// generate lat & long
			$q = urlencode( "Singapore {$datas['postal_code']}" );
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,"http://maps.google.com/maps/geo?q=$q&output=json&oe=utf8&sensor=true_or_false");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $contents = curl_exec ($ch);
            curl_close ($ch);                    

            $a = JSON_DECODE( $contents );
            $datas['longitude']  = $a->Placemark[0]->Point->coordinates[0];
            $datas['latitude']   = $a->Placemark[0]->Point->coordinates[1];
			// end generate lat long
			
			$this->Rent_Sell->addNewRentSell($datas);
			
			$this->view = "posted/index";
			$this->render();
			
		}
	}
    
}

?>
