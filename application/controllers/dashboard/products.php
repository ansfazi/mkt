<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Products
 */
class Products extends CI_Controller
{

    /**
     * The Contructor!
     */
    public function __construct()
    {
      parent::__construct();
      $this->load->helper('products_helper');
      $this->load->model('products_model');
      if (!$this->ion_auth->logged_in())
        {
            redirect('/');
        }
    }

    public function index()
    {
        $data['products'] = $this->products_model->get();
        $this->load->view('dashboard/products/index', $data );
    }

    public function show()
    {
        $this->load->view('products/show');
    }

    
    public function add()
    {
        if( isset( $_POST['title'] )){
            print_r( $_POST );
        }else{
            $this->load->view('dashboard/products/new');
        }
    }

    public function edit()
    {
        $this->load->view('dashboard/products/edit');
    }

    public function delete()
    {
        $this->load->view('products/delete');
    }

} // End of the Products

/* End of file products.php */
/* Location application/controllers/products.php */
