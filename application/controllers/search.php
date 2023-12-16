<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Search extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Mrt');
        $this->load->model('District');
		$this->load->model('Rent_Sell');
    }

    public function index() {
    }    
    
    public function normal() {
      //$this->data['mrt_list'] = $this->Mrt->drawCombobox('*','search_mrt');
	  $this->data['mrt_list'] = $this->Mrt->drawCheckbox('*','search_mrt');
      $this->data['district_list'] = $this->District->drawCombobox('search_district');
      $this->view = "search/normal";
      $this->render();
    }
    public function result() {
      extract($_REQUEST);
      $result = "Maaf, anda belum beruntung.<br>Silahkan coba lagi.";
      $this->data['result'] = $result;
      $this->view = "search/result";
      $this->render();
    }    

	/*
	 * Get all data rent sell which not expired and show in the maps
	 *
	 * return void
	 */
    public function maps() {
		// not permanent, will change later with real maps
		// $datas will load all the property, group by postal code
		// no need to load all detail, only how many ads in that postal code (make it different between rent n sell, room n unit)
		// do script to create different icon
		// example: have rent & sell = purple, have rent only = yellow, have sell only = red
		$datas = $this->Rent_Sell->getRentSellById(4);
		$this->data["map_data"] = $datas;
		$this->view = "search/maps";
		$this->render();
    }
	
}

?>
