<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function admin_url( $path = '' ){
	return site_url( 'dashboard/'. $path  );
}
function load_view( $view , $data = ''){
	$this->load->view('dashboard/header', $data );
    $this->load->view($view, $data );
    $this->load->view('dashboard/footer', $data ); 
}
/* End of file dashboard_helper.php */
/* Location: ./application/helpers/ */