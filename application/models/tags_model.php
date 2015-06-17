<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class tags_model extends CI_Model {
    
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
      $config = array(
        'field' => 'slug',
        'title' => 'tag',
        'table' => 'tags',
        'id' => 'id',
    );
    $this->load->library('slug', $config);
    }
    public function save($pid , $tags ){
    	$i = 0;
  		foreach($tags as $tag){
        $slug = $this->slug->create_uri(array("tag" => $tag ));
  			$this->db->query("INSERT IGNORE INTO `tags` (`tag`, `slug`) VALUES ('$tag', '$slug') ON DUPLICATE KEY UPDATE id=LAST_INSERT_ID(id), `tag`='$tag'");
  			$product_tag[$i]['tid'] = $this->db->insert_id();
  			$product_tag[$i]['pid'] = $pid;
  			$i++;
  		}
  		$this->db->insert_batch("product_tag", $product_tag);
    }

    public function get_product_tags( $product_id ){
        $this->db->select('tags.*');
        $this->db->from('product_tag');
        $this->db->join('tags', 'product_tag.tid  = tags.id' );
        $this->db->where('product_tag.pid', $product_id);
        $query = $this->db->get();
        return $query->result();
    }
    public function get( $id = 0, $limit = 10){

  //   	$this->load->library('facebook', $this->fb_config);

  // $photo = 'http://marketify.pk/mkt/assets/images/default_cover.jpg'; // Path to the photo on the local filesystem
  // $message = 'Photo upload via the PHP SDK!';
  //  $ret_obj = $this->facebook->api('/me/photos', 'POST', array(
  //                                        'url' =>   $photo,
  //                                        'message' => $message,
  //                                        )
  //                                     );
  //       echo '<pre>Photo ID: ' . $ret_obj['id'] . '</pre>';
  //       echo '<pre>Post ID: ' . $ret_obj['id'] . '</pre>';
    	if( $id != 0){
    		$this->db->select('id, tag, slug, counts');
			$this->db->from('tags');
      $query = $this->db->limit( $limit );        
      $query = $this->db->order_by('id', 'desc');        
      $query = $this->db->get();        
        return  $query->row();
      }else{
        $this->db->select('id, tag, slug, counts');
      $this->db->from('tags');
      $query = $this->db->limit( $limit );        
      $query = $this->db->order_by('id', 'desc');        
			$query = $this->db->get();    		
	    	return  $query->result();
    	}
    }
   
} // end class
?>