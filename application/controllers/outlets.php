<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class outlets extends CI_Controller {
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
		if( $id ){
			$data['outlet'] = $this->outlet_model->get( $id );
			//$data['offers'] = $this->offers_model->getOutletOffers( $data['outlet'] );
			$data['products'] = $this->products_model->get(0, $id );
			$data['main_content']	= 'outlet';					
			$this->load->view('includes/template',$data);
		}else{
			$data['outlets'] = $this->outlet_model->get();
			$data['main_content']	= 'outlets';					
			$this->load->view('includes/template',$data);
			
		}
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */