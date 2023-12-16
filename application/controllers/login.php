<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends MY_Controller {

    function __construct() {
		parent::__construct();
    }
    
    public function attempt() {
		extract($_REQUEST);
		// Keep the username (which is email, rite?), id user, type user (agent or owner) in the session
		// Need to have these in the session		
		if ($login_username == $login_password) {
			$_SESSION['sgprop_username'] = $login_username;
			$_SESSION['sgprop_id'] = 1;
			$_SESSION['sgprop_type'] = 'AGENT';
		}
		$this->view = "home/index";
		$this->render();
    }

    public function index() {
		session_destroy();
		$this->data['view_mode'] = 1;
		$this->view = "login";
		$this->render();
    }
}

?>
