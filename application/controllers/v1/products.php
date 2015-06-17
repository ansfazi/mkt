<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Example
 *
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array.
 *
 * @package		CodeIgniter
 * @subpackage	Rest Server
 * @category	Controller
 * @author		Phil Sturgeon
 * @link		http://philsturgeon.co.uk/code/
*/

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';

class products extends REST_Controller
{
	
	public function __construct(){
		parent::__construct();
	}
	function new_post()
    {
        if( $this->session->userdata('user_id') )
        {
	        $this->load->model('products_model');
        	$message[] = $this->products_model->add( $this->input->post() );
	        $this->response($message, 200);

        }else{
			$this->response(array('error' => 'User could not be found'), 404);
        }
    }
} // end class