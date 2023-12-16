<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Listed extends MY_Controller {

    function __construct() {
        parent::__construct();
		$this->load->model('Rent_Sell');
    }

    public function index() {

    }
	
	/*
	 * Show all the rent sell based on param
	 *
	 * @param show
	 * return void
	 */
	public function listing($show = "all") {
	    $param = "";
		
		if ($show == "Room-for-rent") {
			$param['unit_room'] = 'ROOM';
			$param['type'] = 'RENT';		
		}
		
		if ($show == "Unit-for-rent") {
			$param['unit_room'] = 'UNIT';
			$param['type'] = 'RENT';
		}
		
		if ($show == "Unit-for-sell") {
			$param['unit_room'] = 'UNIT';
			$param['type'] = 'SELL';
		}
		
		/////////////////////////////////////////////////////////////////////////
		// pagination code
		/////////////////////////////////////////////////////////////////////////
		
		$this->load->library('pagination');		
		$config['base_url'] = base_url() . "listed/listing/".$show."/";
		$config['total_rows'] = $this->Rent_Sell->getTotalActiveRentSell($param);
		$config['per_page'] = '2';
		$config['suffix'] = '.html';
		//$config['use_page_numbers'] = true;
		//$config['full_tag_open'] = '<p>';
		//$config['full_tag_close'] = '</p>';
		
		$this->pagination->initialize($config);
		
		// this is to know position of the in which segment in the URL		
		$offset = $this->uri->segment(4, 0);
		
		$this->data['rentsell_pagination'] = $this->pagination->create_links();
		
		$this->data['data_show'] = $this->Rent_Sell->getLatestRentSell($config['per_page'], $offset, $param);
		
		//////////////////////////////////////////////////////////////////////////
        // end of pagination code
		//////////////////////////////////////////////////////////////////////////
		
		$this->view = "listed/index";
		$this->render();
		
	}
	
	/*
	 * Show detail rent sell
	 *
	 * @param id
	 * return void
	 */
	public function details($id = 0) {
		
		if (is_numeric($id)) {
			$this->data['data_details'] = $this->Rent_Sell->getRentSellById($id);
		}
		// check if expired or not
		
		$this->view = "listed/details";
		$this->render();
	}
	
    
}

?>
