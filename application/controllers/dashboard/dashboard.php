<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Dashboard
 */
class Dashboard extends CI_Controller
{

    /**
     * The Contructor!
     */
    public function __construct()
    {
      parent::__construct();
      $this->load->helper('dashboard_helper');
    }

    public function index()
    {
        $this->load->view('dashboard/index');
        //load_view("dashboard/index" ) ;
        //$this->load->view('dashboard/template', $data );
    }
    public function index1()
    {
        $this->load->view('dashboard/add_product');
        //load_view("dashboard/index" ) ;
        //$this->load->view('dashboard/template', $data );
    }
    public function logout()
    {
        $this->ion_auth->logout();
        redirect('dashboard/login');
    }
    public function login()
    {
        $this->ion_auth->logout();
        $this->load->view('dashboard/login');
    }

} // End of the Dashboard

/* End of file dashboard.php */
/* Location application/controllers/dashboard.php */
