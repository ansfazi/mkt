<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Collections
 */
class Collections extends CI_Controller
{

    /**
     * The Contructor!
     */
    public function __construct()
    {
      parent::__construct();
      $this->load->helper('collections_helper');
    }

    public function index()
    {
        $this->load->view('dashboard/collections/index');
    }

    public function add()
    {
        $this->load->view('dashboard/collections/new');
    }

    public function show()
    {
        $this->load->view('dashboard/collections/show');
    }

    public function edit()
    {
        $this->load->view('dashboard/collections/edit');
    }

    public function delete()
    {
        $this->load->view('dashboard/collections/delete');
    }

} // End of the Collections

/* End of file collections.php */
/* Location application/controllers/collections.php */
