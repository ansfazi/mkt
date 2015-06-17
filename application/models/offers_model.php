<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class offers_model extends CI_Model {
    
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
    }
    public function getOutletOffers( $outlet ){
    	$this->db->select('*');
		$this->db->from('images');
		$this->db->join('offers', 'images.post_id = offers.id');
		$this->db->like('outlet_id', $outlet->id); 
		$query = $this->db->get();
		return $query->result(); 
    }
    public function getOffers( $q = '', $cat = 0){
    	if( $cat != 0){
    		$this->db->select('*');
			$this->db->from('images');
			$this->db->join('offers', 'images.post_id = offers.id');
			$this->db->join('categories as cat', 'cat.id = offers.id');
    		$this->db->where('category_id', $cat); 
			$query = $this->db->get();    		
    	}elseif( $q != ''){
    		$this->db->select('*');
			$this->db->from('images');
			$this->db->join('offers', 'images.post_id = offers.id');
			$this->db->join('categories as cat', 'cat.id = offers.id');
    		$this->db->like('title', $q); 
			$query = $this->db->get();    		
    	}else{

    		$this->db->select('*');
			$this->db->from('images');
			$this->db->join('offers', 'images.post_id = offers.id');
			$this->db->join('categories as cat', 'cat.id = offers.id');
			$this->db->order_by("offers.id desc");
			$query = $this->db->get();    		
    	}
    	return  $query->result()  ;
    }
    public function get( $id = 0){
    	if( $id != 0){
    		$this->db->select('*');
			$this->db->from('images');
			$this->db->join('offers', 'images.post_id = offers.id', "right");
			$query = $this->db->where( "offers.id", $id );    		
			$query = $this->db->get();    		
	    	return  $query->row();
    	}else{
    		$this->db->select('*');
    		$this->db->from("products");
    		$this->db->order_by('id', 'desc');
    		$this->db->limit( 10 );
    		$query = $this->db->get();
    		$data = $query->result();

    		foreach ($data as $product) {
    			$products = $product;
    			$products->tags   = $this->tags_model->get_product_tags( $product->id);
    			$products->images = $this->images_model->get(0, $product->id);
    		}
	    	return  $query->result();
	    	
    		$this->db->select('*');
			$this->db->from('images');
			$this->db->join('offers', ' offers.id = images.post_id ');
			$query = $this->db->get();    		
	    	return  $query->result();
    	}
    }
	public function saveOffer(){
		if( $this->session->userdata('location') ){
			$geo_position = $this->session->userdata('location');
		}
		$start_date	= date('Y-m-d H:i:s',strtotime($this->input->post('start_date')));
		$end_date	= date('Y-m-d H:i:s',strtotime($this->input->post('end_date')));
		$data = array(
			'title' 			=> $this->input->post('title'),
			'uid'   			=> $this->session->userdata('user')->id,
			'outlet_id'   		=> isset($this->session->userdata('user')->outlet->id)?$this->session->userdata('user')->outlet->id:0,
			'category_id' 		=> $this->input->post('category_id'),
			'full_price' 		=> $this->input->post('full_price'),
			'description' 		=> $this->input->post('description'),
			'brand_id' 		=> $this->input->post('brand'),
			'offer_type' 		=> $this->input->post('offer_type'),
			'disconted_price' 	=> $this->input->post('disconted_price'),
			'discount' 			=> $this->input->post('discount'),
			'start_date' 		=> $start_date,
			'end_date' 			=> $end_date,
			'current_lat' 		=> isset($geo_position['latitude'])?$geo_position['latitude']:0,
			'current_long' 		=> isset($geo_position['longitude'])?$geo_position['longitude']:0,
			'accuracy' 			=> isset($geo_position['accuracy'])?$geo_position['accuracy']:0
			);
			
		$insert	= $this->db->insert($this->db->dbprefix('offers'),$data);
		$offer_id	= $this->db->insert_id();
		if($insert && $this->input->post('attachment') != ''){
			$offer_images	= $this->input->post('attachment');
			foreach($offer_images as $key=> $value){
				$offer_img['post_id']		= $offer_id;
				$offer_img['file_name']		= $value;
				$offer_img['type']			= 'image';
				$offer_img['height']		= 200;
				$offer_img['width']			= 200;
				$offer_img['path']			= $this->offer_image_path_url.$value;
				$offer_img['creation_date']	= date("Y-m-d H:i:s");  
				$this->db->insert($this->db->dbprefix('images'),$offer_img);
			}
			return true;
		}else
		{
			return true;
		}

	}
		public function add(){
		$start_date	= date('Y-m-d H:i:s',strtotime($this->input->post('start_date')));
		$end_date	= date('Y-m-d H:i:s',strtotime($this->input->post('end_date')));
		$data = array(
			'title' 			=> $this->input->post('title'),
			'tags' 				=> $this->input->post('tags'),
			'description' 		=> $this->input->post('description'),
			'offer_type' 		=> $this->input->post('offer_type'),
			'full_price' 		=> $this->input->post('full_price'),
			'disconted_price' 	=> $this->input->post('disconted_price'),
			'discount' 			=> $this->input->post('discount'),
			'start_date' 		=> $start_date,
			'end_date' 			=> $end_date,
			'current_lat' 		=> $this->input->post('lat'),
			'current_long' 		=> $this->input->post('long'),
			'accuracy' 			=> $this->input->post('accuracy'),
			);
			
		$insert	= $this->db->insert($this->db->dbprefix('offers'),$data);
		$offer_id	= $this->db->insert_id();
		if($insert){
			if(  $this->input->post('attachment') != '' ){
				$offer_images	= $this->input->post('attachment');
				foreach($offer_images as $key=> $value){
					$offer_img['post_id']		= $offer_id;
					$offer_img['file_name']		= $value;
					$offer_img['type']			= 'image';
					$offer_img['height']		= 200;
					$offer_img['width']			= 200;
					$offer_img['path']			= $this->offer_image_path_url.$value;
					$offer_img['creation_date']	= date("Y-m-d H:i:s");  
					$this->db->insert($this->db->dbprefix('images'),$offer_img);
				}
			}
			return array("status" => false , "data" => $this->get( $offer_id ));
		}else
		{
			return array("status" => false , "data" => $data);
		}

	}
} // end class
?>