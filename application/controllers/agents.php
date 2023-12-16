<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Agents extends MY_Controller {

    function __construct() {
		parent::__construct();
		$this->load->model('District');
		$this->load->model('Area');
		$this->load->model('Agent');
		$this->load->model('Rent_Sell');
    }
    
    public function register() {
		$this->data['view_mode'] = 1;
		$this->view = "agent/register";
		$this->render();      
    }

    public function registering() {
		$this->view = "agent/registering";
		$this->render();      
    }

	/*
	 * load agent profile (own profile and other agent profile)
	 *
	 * param id (for other agent profile)
	 * return void
	 */
    public function profile($id=null) {		
		$this->data['can_see_post'] = false;
		
		if (($id != null) && (is_numeric($id))) {
			
			$agent_data = $this->Agent->getAgentById($id);
			$this->data['agent_data'] = $agent_data;
			$this->data['view_mode'] = 1;			
			
		} else {
			// show own profile (if login)
			if (isset($_SESSION['sgprop_type']) && ($_SESSION['sgprop_type'] == 'AGENT')) {
				$agent_data = $this->Agent->getAgentById($_SESSION['sgprop_id']);
				$this->data['agent_data'] = $agent_data;
				$this->data['view_mode'] = 1;
				$this->data['can_see_post'] = true;
			} else {
				// say that only agent can view this page
				$this->data['view_mode'] = 2;
			}
		}
		
		$this->view = "agent/profile";
		$this->render();

    }
    
	public function listpost() {
		// check session
		// only login agent can access this page
		if (isset($_SESSION['sgprop_type']) && ($_SESSION['sgprop_type'] == 'AGENT')) {
			$this->data['view_mode'] = 1;
			if (is_numeric($_SESSION['sgprop_id'])) {
				$agent_id = $_SESSION['sgprop_id'];
				$list = $this->Rent_Sell->getRentSellByCondition(10, 0, "*", " ORDER BY bump_date DESC ", array("agent_id" => $agent_id));				
				$this->data['list_data'] = $list;
			}
		} else {
			$this->data['view_mode'] = 2;
		}
		
		$this->view = "agent/listpost";
		$this->render();
	}
	
	public function bumpadv($adv_id) {
		// check session
		// only login agent can access this page		
		if (isset($_SESSION['sgprop_type']) && ($_SESSION['sgprop_type'] == 'AGENT')) {			
			// check agent coin, enough or not
			$agent_coin = 100; // this is only hardcode, should change later on
			if ($agent_coin > 1) {
				if ($this->Rent_Sell->bumpAdv($adv_id)) {
					// reduce coin
					
					// alert success
				}
			} else {
				// do nothing
				// alert "cannot bump"
			}
		}
		
		$this->listpost();
	}
	
}

?>
