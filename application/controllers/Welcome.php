<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Welcome
 */
class Welcome extends CI_Controller
{

    /**
     * Welcome constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Common_model', 'common');
        error_reporting(0);
        //Default time zone
        date_default_timezone_set('Asia/Dubai');
    }

    /**
     * Welcome index page
     */
    public function index()
    {
        $this->load->view('welcome_message');
    }

}
