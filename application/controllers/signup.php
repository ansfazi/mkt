<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class signup extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('signup_model');
        //$this->output->enable_profiler(TRUE);
        if ($this->ion_auth->logged_in()) {
            redirect('/dashboard');
        }
    }

    public function index() {
        $data['main_content'] = "outlet_signup";
        $this->load->view('template', $data);
        if ($this->input->post('email')) {
            $data     = $this->input->post();
            $response = $this->signup_model->register_outlet($data);
            if ($response) {
                $this->ion_auth->login($data['email'], $data['password']);
                redirect('register');
            }
        }
    }

    public function validate_outlet_name() {
        if ($this->input->post('outlet_name')) {
            echo json_encode(array('valid' => $this->signup_model->validate_outlet_name($this->input->post('outlet_name'))));
            exit;
        }
    }

    public function validate_outlet_email() {
        if ($this->input->post('email')) {
            echo json_encode(array('valid' => $this->signup_model->validate_outlet_email($this->input->post('email'))));
            exit;
        }
    }

}

/* End of file signup.php */
/* Location: ./application/controllers/signup.php */