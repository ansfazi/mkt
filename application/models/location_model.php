<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class location_model extends CI_Model {
    
	/**
  	 * User Model Class 
	 * 
	 * @package Site 
	 * @author Red Signal  
	 */
    public function __construct()
    {
        parent::__construct();
    }
    public function save($geo_position){
        $location = array( "lat"=> $geo_position['latitude'], 
                            "long" => $geo_position['longitude'], 
                            "accuracy" =>$geo_position['accuracy'] 
                            );
    	$rs = $this->db->insert('user_locations', $location );
        if( $rs ){
            $this->session->set_userdata(array("location" => $geo_position));
            return true;
        }else{
            return false;
        }
    }
} // end class
?>