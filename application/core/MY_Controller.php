<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    var $data;
    var $layout = 'default';

    function __construct() {
        parent::__construct();
        //load library
        $this->load->library('', array($this));
        
        // load models
        $this->load->model('');
        
        // load helper
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->helper('form');
		
		session_start();
		
    }
	
    protected function render() {
        
        $this->data['content_for_layout'] = (!empty($this->view) ? $this->load->view( $this->view . '.php', $this->data, true) : "");
        $this->load->view('layouts/' . $this->layout . '.php', $this->data);
        
    }

    
    function convert_datetime($str) {

        list($date, $time) = explode(' ', $str);
        list($year, $month, $day) = explode('-', $date);
        list($hour, $minute, $second) = explode(':', $time);

        $timestamp = mktime($hour, $minute, $second, $month, $day, $year);

        return $timestamp;
    }

}

?>
