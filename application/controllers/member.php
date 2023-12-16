<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Member extends MY_Controller {

    function __construct() {
      parent::__construct();
    }
    
    public function register() {
      $this->data['view_mode'] = 1;
      $this->view = "member/register";
      $this->render();      
    }

    public function registering() {
      $this->view = "member/registering";
      $this->render();      
    }

    public function login() {
      
    }

    public function index() { $this->profile(); }
    public function profile() {
		  $this->view = "member/profile";
		  $this->render();
    }	
}

?>
