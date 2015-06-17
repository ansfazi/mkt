<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class images_model extends CI_Model {
    
	/**
  	 * User Model Class 
	 * 
	 * @package Site 
	 * @author Red Signal  
	 */
    public function __construct(){
      parent::__construct();
    	$this->offer_image_path_url = base_url().'images/offers/';
    	$this->output->enable_profiler(PROFILER);
    	$this->fb_config = array(
	        'appId' => $this->config->item('facebook_appid'),
	        'secret' => $this->config->item('facebook_secret'),
	        'fileUpload' => true
    	);
    }

    public function get( $id = 0, $product_id =0 ){
      if( $id != 0){
        $this->db->get_where('images','id', $id);
        $query = $this->db->get();        
        return  $query->row();
      }else{
        $this->db->select('*');
        $this->db->from('images');
        if( $product_id )
          $this->db->where('images.post_id', $product_id);
        $query = $this->db->get();        
        return  $query->result();
      }
    }
   
} // end class
?>