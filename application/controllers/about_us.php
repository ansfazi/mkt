<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class about_us extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('outlet_model');
        $this->load->model('products_model');
        $this->load->model('offers_model');
		$this->method_call =& get_instance();
		if( ENVIRONMENT ==  'development'){
			$this->output->enable_profiler(PROFILER);
		}
    }
	public function index($id = 0)
	{
		
			$data['main_content']	= 'contact_us';					
			$this->load->view('includes/template',$data);
			
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */