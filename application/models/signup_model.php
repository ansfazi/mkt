<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class signup_model extends CI_Model {
	public function __construct(){
		//$this->load->library('encrypt');
		$this->load->library('ion_auth');
	}
	/*

	*/
	public function validate_outlet_name( $outlet ){
		$this->db->where( array('slug' => $outlet) );
		$this->db->from('outlets');
		return $this->db->count_all_results() == 0 ? true : false;
	}

	/*

	*/
	public function validate_outlet_email( $email ){
		$this->db->where( array('email' => $email) );
		$this->db->from('users');
		return $this->db->count_all_results() == 0 ? true : false;
	}

	/*

	*/
	public function register_outlet( $data ){



		$username = $data['email'];
		$password = $data['password'];
		$email = $data['email'];
		$group = array(2); // Sets user to admin. No need for array('1', '2') as user is always set to member by default
		echo $id =  $this->ion_auth->register($username, $password, $email, array() , $group);
		if( $id ){

			echo $outlet['name'] = $data['outlet_name'];
			$outlet['slug'] = $data['outlet_name'];
			$outlet['uid'] = $id;
			$this->db->insert('outlets', $outlet );
			return $this->db->affected_rows() > 0 ? true : false;	
		}
		// $encrypted_string = $this->encrypt->encode($data['password'], $data['password']);
		// $user['email'] =  	$data['email'];
		// $user['password'] =  $encrypted_string ;
		// $user['type'] =  'outlet';
		// $this->db->insert('users', $user );
		// /* outlet info  */

	}

}

/* End of file signup_model.php */
/* Location: ./application/models/signup_model.php */