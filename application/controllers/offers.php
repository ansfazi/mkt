<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class offers extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->library('session'); 
		$this->load->helper('file');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('offers_model');
		$this->load->model('tags_model');
		$this->method_call =& get_instance();
		$this->gallery_path = realpath(APPPATH . '../images/offers/');
		$this->gallery_path_url = base_url().'images/offers/';
		//$this->output->enable_profiler(PROFILER);
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
	public function index(){
		$data['offers'] = $this->offers_model->getOffers($this->input->get('q'), $this->input->get('cat'));
		$data['tags']  = $this->tags_model->get();
 		$data['main_content']	= 'offers';					
		$this->load->view('includes/template',$data);
	}
	public function get($id = 0){
		$data['offers'] = $this->offers_model->get($id);
		$data['categories']  = $this->category->getCategories();
 		$data['main_content']	= 'offer_detail';					
		$this->load->view('includes/template',$data);
	}
	public function add(){
		$data['categories']  = $this->category->getCategories('all');
		$data['main_content']	= 'offer_create';					
		$this->load->view('includes/template',$data);
	}
	public function save_offer(){
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('full_price', 'Full Price', 'trim|required');
		$this->form_validation->set_rules('disconted_price', 'Discount Price', 'trim|required');
		$this->form_validation->set_rules('discount', 'Discount', 'trim|required');
		$this->form_validation->set_rules('description', 'description', 'trim|required');
		$this->form_validation->set_rules('start_date', 'Start date', 'trim|required');
		$this->form_validation->set_rules('end_date', 'Title', 'trim|required');
		//$this->form_validation->set_rules('category_id', 'Category', '');
		//$this->form_validation->set_rules('attachment[]', 'Options', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->data	= array();
			$this->data['error']	= 'yes';
			$this->data['message']	= 'Please enter valid data in the following field(s)';
			if(form_error('title')){
				$this->data['error_title']  = form_error('title');
			}else{
				$this->data['error_title']  = '';
			}
			/*if(form_error('category_id')){
				$this->data['error_category_id']  = form_error('category_id');
			}else{
				$this->data['error_category_id']  = '';
			}*/
			if(form_error('full_price')){
				$this->data['error_full_price']  = form_error('full_price');
			}else{
				$this->data['error_full_price']  = '';
			}
			
			if(form_error('disconted_price')){
				$this->data['error_disconted_price']  = form_error('disconted_price');
			}else{
				$this->data['error_disconted_price']  = '';
			}
			if(form_error('discount')){
				$this->data['error_discount']  = form_error('discount');
			}else{
				$this->data['error_discount']  = '';
			}
			
			if(form_error('description')){
				$this->data['error_description']  = form_error('description');
			}else{
				$this->data['error_description']  = '';
			}
			if(form_error('attachment[]')){
				$this->data['error_file']  = 'Atleast one picture is must.';
			}else{
				$this->data['error_file']  = '';
			}
			
			if(form_error('start_date')){
				$this->data['error_start_date']  = form_error('start_date');
			}else{
				$this->data['error_start_date']  = '';
			}
			
			if(form_error('end_date')){
				$this->data['error_end_date']  = form_error('end_date');
			}else{
				$this->data['error_end_date']  = '';
			}
			echo json_encode($this->data);
			//$data['main_content']	= 'offer_create';					
			//$this->load->view('includes/template',$data);	
		}
		else
		{
			$offer = $this->offers_model->saveOffer();
			if($offer){
				$this->data['success']	= 'yes';
				$this->data['message']  = 'Your offer/promotion has been added.';
				echo json_encode($this->data);
			}
			else
			{
				$data['main_content']	= 'offer_create';					
				$this->load->view('includes/template',$data);		
			}
		}
		
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
			
	} // end add();
	
	public function upload_images(){
		
		//echo $this->input->post('name');
		//return json_encode($this->input->post('name'));
		$config = array(
				'allowed_types' => 'jpg|jpeg|gif|png|bmp',
				'upload_path' => $this->gallery_path,
				'encrypt_name' => TRUE,
				'max_size' => 20000
			);
			
			$this->load->library('upload', $config);
			$this->upload->do_upload('file');
			$image_data = $this->upload->data();
			$config = array(
				'source_image' => $image_data['full_path'],
				'new_image' => $this->gallery_path . '/thumbs',
				'maintain_ration' => true,
				'width' => 150,
				'height' => 150
				
			);
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$imageSave = $image_data['file_name'];
				
				
			
				$return['img_src_name']	=   $imageSave;
				echo json_encode($return);
	}
	
}
/* End of file offers.php */
/* Location: ./application/controllers/offers.php */