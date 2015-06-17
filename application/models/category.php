<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class category extends CI_Model {
    
	/**
  	 * User Model Class 
	 * 
	 * @package Site 
	 * @author Red Signal  
	 */
    public function __construct()
    {
        parent::__construct();
       // $this->output->enable_profiler(PROFILER);
    }
    public function getCategories($type = ''){
        if( $type == 'all' ){

           /* $this->db->select('parent . *');
            $this->db->from('categories as parent');
            $this->db->join('categories as child', 'child.parent = parent.parent');
            $this->db->group_by('parent.id');
            $query = $this->db->get(); */
            $parent = $this->db->get_where( 'categories', array('parent' => 0) ); 
             $this->db->where( 'parent <>' ,  0 );
            $child =  $this->db->get("categories"); 
            foreach ($parent->result() as $key => $parent) {
                $category[$parent->id] = $parent; 
            }
            foreach ($child->result() as $key => $child) {
                $category[$child->parent]->childs[] = $child; 
            }
            return $category;
        }else{
           $query = $this->db->get_where('categories', array('parent' => 0)); 
        }
    	return $query->result();
    }
} // end class
?>