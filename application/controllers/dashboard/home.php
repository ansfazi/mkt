<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {
	public function __construct()
    {
      parent::__construct();
      $this->load->helper('dashboard_helper');
    }
	public function index()
	{
		$this->load->view('dashboard/index');
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
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */