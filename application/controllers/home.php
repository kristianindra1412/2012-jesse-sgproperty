<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Rent_Sell');
    }

	/*
	 * Home page show map and other option and newest listing
	 *
	 * return void
	 */
    public function index() {
		// search will go to search module (better separate the module with home page)
		
		// when agent, if havent register, give register page (with link or redirect)
		// after register, automatically login (the agent)
		
		$this->data['latest_adv'] = $this->Rent_Sell->getLatestRentSell(5);
		$this->view = "home/index";
		$this->render();
    }    
    
    public function faq() {
    }
}

?>
