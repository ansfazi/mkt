<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('outlet_model');
	}
	public function index()
	{

		if( $this->input->post('email') && $this->input->post('password')  ){
			$identity = $this->input->post('email');
			$password = $this->input->post('password');
			$remember = FALSE; 
			$login = $this->ion_auth->login($identity, $password, $remember);
			var_dump($login);
			
			if( $login ){
				$outlets = $this->outlet_model->get_outlets( $this->session->userdata('user_id') );
				$this->session->set_userdata( array('outlets' => $outlets  ));
				redirect('dashboard');
			}else{
				echo 'User name or password mispatch';
			}
		}
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */