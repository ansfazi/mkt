<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class categories extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->helper('url');
		$this->load->library('session'); 
		$this->load->helper('file');
		$this->load->model('offers_model');
		$this->load->model('category');
		$this->load->model('tags_model');
		$this->load->model('products_model');
		$this->method_call =& get_instance();

    }/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['categories']  = $this->category->getCategories('all');
		$data['tags']  = $this->tags_model->get('all', 30);
		$data['main_content']	= 'categories';					
		$this->load->view('includes/template',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */