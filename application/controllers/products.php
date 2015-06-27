<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Products
 */
class Products extends CI_Controller {

    /**
     * The Contructor!
     */
    public function __construct() {
        parent::__construct();
        $this->load->helper('products_helper');
        $this->load->model('products_model');
    }

    public function index($slug = '') {
        $data['product']      = $this->products_model->get_by_slug($slug);
        $data['main_content'] = 'products/index';
        $this->load->view('includes/template', $data);
    }

}

// End of the Products

/* End of file products.php */
/* Location application/controllers/products.php */
