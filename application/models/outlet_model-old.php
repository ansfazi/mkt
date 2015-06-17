<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class outlet_model extends CI_Model {
    
	/**
  	 * User Model Class 
	 * 
	 * @package Site 
	 * @author Red Signal  
	 */
    public function __construct()
    {
        parent::__construct();
		$this->offer_image_path_url = base_url().'images/offers/';
		$this->load->library('encrypt');
		$config = array(
		    'field' => 'slug',
		    'title' => 'name',
		    'table' => 'outlets',
		    'id' => 'id',
		);
		$this->load->library('slug', $config);
    }
    public function get( $id = 0 ){
    	$this->db->select("*");
    	$this->db->from("outlets");
    	if( $id )
    		$this->db->where('id' , $id );
    	$query = $this->db->get();
    	if( $id )
    		return $query->row();
    	else
    		return $query->result();
    }
	public function saveOutlet(){
		
		if( $this->session->userdata('location') ){
			$geo_position = $this->session->userdata('location');
		}
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
		$this->form_validation->set_rules('owner_name', 'Owner Name', 'trim|required');
		$this->form_validation->set_rules('mall', 'Mall', 'trim|required');
		if(  $this->input->post('email', 0) && $this->input->post('password', 0) ){
			$user['email'] = $this->input->post('email'); 
			$user['password'] = $this->encrypt->sha1(  $this->input->post('password') ); 
			$user['uid'] = '';
			$user['type'] = 'outlet';
			$user = $this->db->insert($this->db->dbprefix('users'),$user);
			$uid = $this->db->insert_id();
			$rs = $this->db->get_where('users', array('id' => $uid ), 1);
			$data['user'] = $rs->row();
			$this->session->set_userdata($data);
 		}
		$data = array(
			'uid' 			=> $this->session->userdata('user')->id,
			'name' 			=> $this->input->post('name'),
			'address' 		=> $this->input->post('address'),
			'phone' 		=> $this->input->post('phone'),
			'owner_name' 	=> $this->input->post('owner_name'),
			'mall' 			=> $this->input->post('mall'),
			'web' 			=> $this->input->post('web'),
			'lat' 			=> isset($geo_position['latitude'])?$geo_position['latitude']:0,
			'long' 			=> isset($geo_position['longitude'])?$geo_position['longitude']:0,
			'accuracy' 		=> isset($geo_position['accuracy'])?$geo_position['accuracy']:0
			);
			$data['slug'] = $this->slug->create_uri($data);
		$insert	= $this->db->insert($this->db->dbprefix('outlets'),$data);
		$offer_id	= $this->db->insert_id();
		if(  $this->input->post('email', 0) && $this->input->post('password', 0) ){
			$rs = $this->db->get_where('outlets', array('id' => $offer_id ));
			$data = $this->session->userdata('user');
			$data->outlet = $rs->row();
			$this->session->set_userdata($data);
		}
		if($insert && $this->input->post('attachment') != ''){
			$offer_images	= $this->input->post('attachment');
			foreach($offer_images as $key=> $value){
				$offer_img['post_id']		= $offer_id;
				$offer_img['file_name']		= $value;
				$offer_img['type']			= 'image';
				$offer_img['height']		= 100;
				$offer_img['width']			= 100;
				$offer_img['path']			= $this->offer_image_path_url;
				$offer_img['creation_date']	= date("Y-m-d H:i:s");  
				$this->db->insert($this->db->dbprefix('images'),$offer_img);
			}
			return true;
		}else
		{
			return true;
		}

	}
} // end class
?>