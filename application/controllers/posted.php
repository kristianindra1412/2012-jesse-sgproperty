<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Posted extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('District');
		$this->load->model('Area');
		$this->load->model('Mrt');
		$this->load->model('Property_Type');
		$this->load->model('Rent_Sell');
    }

	/*
	 * Show posted page and detect session
	 *
	 * return void
	 */
    public function index() {
		$mode = 1; // not login
		// check session
		if (isset($_SESSION['sgprop_type'])) {
			$this->data['posted_by'] = ($_SESSION['sgprop_type'] == 'agent' || $_SESSION['sgprop_type'] == 'owner') ? $_SESSION['sgprop_type'] : 'owner';
			$this->data['district_list'] = $this->District->getAllDistrict("id, code, area_covered");
			$this->data['area_list'] = $this->Area->getAllArea("id, name");
			$this->data['mrt_list'] = $this->Mrt->getAllMrt();
			$this->data['propertytype_list'] = $this->Property_Type->getAllPType("id, name");
			$this->data['view_mode'] = 1;
		} else {
			$this->data['view_mode'] = 2;
		}				
		$this->view = "posted/index";
		$this->render();
    }
		
	public function process() {
		if (isset($_POST['process'])) {
		
			$valid_post = true;
			
			$message_data = "";

			// check session
			if (!isset($_SESSION['sgprop_username']) || !isset($_SESSION['sgprop_id']) || !isset($_SESSION['sgprop_type'])) {
				$valid_post = false;				
			}
			
			// if agent, check credit enough
			
			// if owner, check any posting hasn't expired (expired date for owner posting is 2 weeks)
			
			// check data mandatory			
			
			if ($valid_post) {
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
				if ($_SESSION['sgprop_type'] == 'OWNER') {
					$datas['owner_id'] = $_SESSION['sgprop_id'];
					$datas['agent_id'] = 0;
				}
				
				if ($_SESSION['sgprop_type'] == 'AGENT') {
					$datas['owner_id'] = 0;
					$datas['agent_id'] = $_SESSION['sgprop_id'];
				}
				
				// generate lat & long
				$q = urlencode( "Singapore {$datas['postal_code']}" );
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL,"http://maps.google.com/maps/geo?q=$q&output=json&oe=utf8&sensor=true_or_false");
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				$contents = curl_exec ($ch);
				curl_close ($ch);                    

				$dat = JSON_DECODE( $contents );
				$datas['longitude']  = $dat->Placemark[0]->Point->coordinates[0];
				$datas['latitude']   = $dat->Placemark[0]->Point->coordinates[1];
				// end generate lat long
				
				$this->Rent_Sell->addNewRentSell($datas);
				
				$message_data = "success";
				
			}
			$this->data['message_data'] = $message_data;
			$this->view = "posted/posting";
			$this->render();
			
		}
	}
    
}

?>
