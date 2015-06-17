<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('products_model');
	}
	public function index()
	{
		$data['main_content'] = "home";
		$data['products'] = $this->products_model->get();
		$this->load->view('template', $data );
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */