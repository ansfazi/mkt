<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class fileupload extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        error_reporting(E_ALL | E_STRICT);
        
        $options = array ('upload_dir' =>  $this->input->post('path'));
        $this->load->library("UploadHandler", $options);
		//$upload_handler = new UploadHandler($options);
    }
}