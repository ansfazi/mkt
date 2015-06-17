<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Hashtag
 */
class Hashtag extends CI_Controller
{

    /**
     * The Contructor!
     */
    public function __construct()
    {
      parent::__construct();
      $this->load->helper('hashtag_helper');
      $this->load->model('products_model');
      $this->output->enable_profiler(true);

    }

    public function index( $tag = '')
    {
      $data['products'] = '';
      if( $tag != '' )
        $data['products'] = $this->products_model->get_tag_products($tag, 12);
        $data['tags']  = $this->tags_model->get($this->input->get('q', ''));
        //$this->load->view('hashtag/index', $data );
        $data['main_content'] = 'hashtag/index';         
        $this->load->view('includes/template',$data);
    }

} // End of the Hashtag

/* End of file hashtag.php */
/* Location application/controllers/hashtag.php */
