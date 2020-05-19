<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

//include Rest Controller library
require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Bookings extends REST_Controller
{

    /**
     * Bookings constructor.
     */
    public function __construct()
    {
        parent::__construct();
        //load booking model
        $this->load->model('Common_model', 'common');
        //Putting off warnings php
        error_reporting(0);
        //Default time zone
        date_default_timezone_set('Asia/Dubai');
    }

    /**
     * Test function
     */
    public function test_api_post()
    {
        $string = $this->post('string');
        $number = $this->post('number');

        if(!empty($string) && !empty($number)) {

            $data = array(
                'string' => $string,
                'number' => $number,
            );

            //In case of when you will use language library
            //$this->success_reponse('text_success_response', $data);

            //In case of when you dont want to use language library
            $this->success_reponse('API successfully called!', $data, false);
        
        } else {
            $this->error_response('Fill required field data', new ArrayObject(), false);
        }

    }

}