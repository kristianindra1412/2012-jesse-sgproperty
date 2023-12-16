<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */
// ------------------------------------------------------------------------

/**
 * Loader Class
 *
 * Loads views and files
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @author		ExpressionEngine Dev Team
 * @category	Loader
 * @link		http://codeigniter.com/user_guide/libraries/loader.html
 */
class MY_Loader extends CI_Loader {

    /**
     * Constructor
     *
     * Sets the path to the view files and gets the initial output buffering level
     *
     * @access	public
     */
    function __construct() {
        parent::__construct();        
    }

    function element($name, $param=null) {        
        $this->view('elements/' . $name . '.php', $param);
    }
}

/* End of file Loader.php */
/* Location: ./system/core/Loader.php */