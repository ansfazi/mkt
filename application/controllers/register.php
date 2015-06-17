<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {
    function __construct()
    {
        parent::__construct();
		$this->load->helper('file');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		//$this->load->model('offers_model');
		$this->load->model('outlet_model');
		$this->method_call =& get_instance();
		$this->gallery_path = realpath(APPPATH . '../images/offers/');
		$this->gallery_path_url = base_url().'images/offers/';
		
		
		$exception_url = array('register/index','register');
		/*
		if(in_array(uri_string(),$exception_url) == FALSE)
		{
			//$user = $this->session->userdata('user') ;	// get user data if logged in
	
			if(!is_array($this->session->userdata('user')))	// check session if user not logged in
			{
				redirect(base_url()."register/index");		
				die;	
			}
		}*/
		
    }
	
	
	/**
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
		$data['main_content']	= 'outlet-register';					
		$this->load->view('includes/template',$data);
	}
	
	public function outlet()
	{
		$data['main_content']	= 'register_outlet';					
		$this->load->view('includes/template',$data);
	}
	
	public function create_outlet(){
		
		$outletResponse = $this->outlet_model->save_outlet();		// Save Outlet Data
		
		if($outletResponse)
		{
			$data['main_content']	= 'outlet-approval';
			$this->load->view('includes/template',$data);	
		}
		else
		{
			// Temporary.. There will be nothing in else part.
			
			$data['main_content']	= 'register_outlet';					
			$this->load->view('includes/template',$data);
		}
		
		
		/*
		$name				= (form_error('name')) ? "has-error" : ""; 
		$phone			= (form_error('phone')) ? "has-error" : ""; 
		$address	= (form_error('address')) ? "has-error" : ""; 
		$owner_name			= (form_error('owner_name')) ? "has-error" : ""; 
		$mall			= (form_error('mall')) ? "has-error" : ""; 

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
		$this->form_validation->set_rules('owner_name', 'Owner Name', 'trim|required');
		$this->form_validation->set_rules('mall', 'Mall', 'trim|required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->data	= array();
			$this->data['error']	= 'yes';
			$this->data['message']	= 'Please enter valid data in the following field(s)';
			if(form_error('name')){
				$this->data['error_name']  = form_error('name');
			}else{
				$this->data['error_name']  = '';
			}
			
			if(form_error('owner_name')){
				$this->data['error_owner_name']  = form_error('owner_name');
			}else{
				$this->data['error_owner_name']  = '';
			}
			
			if(form_error('phone')){
				$this->data['error_phone']  = form_error('phone');
			}else{
				$this->data['error_phone']  = '';
			}
			if(form_error('address')){
				$this->data['error_address']  = form_error('address');
			}else{
				$this->data['error_address']  = '';
			}
			
			if(form_error('mall')){
				$this->data['error_mall']  = form_error('mall');
			}else{
				$this->data['error_mall']  = '';
			}
			if(form_error('attachment[]')){
				$this->data['error_file']  = 'Atleast one picture is must.';
			}else{
				$this->data['error_file']  = '';
			}
			
			echo json_encode($this->data);
			//$data['main_content']	= 'offer_create';					
			//$this->load->view('includes/template',$data);	
		}
		else
		{
			$offer = $this->outlet_model->saveOutlet();
			
			if($offer){
				$this->data['success']	= 'yes';
				$this->data['message']  = 'Your Profile has been complete. Welcome!';
				echo json_encode($this->data);
				
			}
			else
			{
				$data['main_content']	= 'offer_create';					
				$this->load->view('includes/template',$data);		
			}
		}
		*/
		/*if($this->form_validation->run() == FALSE)
		{
			var_dump($this->input->post('attachment'));
			$data['main_content']	= 'offer_create';					
			$this->load->view('includes/template',$data);
		}
		else
		{		
		
			$offer = $this->offers_model->saveOffer();
			if($offer){
				$this->session->set_flashdata('success', 'Your offer/promotion has been added.');
				redirect("offers/add");
			}
			else
			{
				$data['main_content']	= 'offer_create';					
				$this->load->view('includes/template',$data);		
			}
		}*/
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */