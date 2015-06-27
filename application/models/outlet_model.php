<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class outlet_model extends CI_Model {

    public function __construct() {

        parent::__construct();
        $this->load->library('encrypt');
        $config = array(
            'field' => 'slug',
            'title' => 'name',
            'table' => 'outlets',
            'id'    => 'id',
        );

        $this->load->library('slug', $config);
    }

    /*

     */

    public function get_outlets($uid) {
        $query = $this->db->get_where('outlets', array('uid' => $uid));
        return $query ? $query->result() : null;
    }

    public function get($id = 0) {
        $this->db->select("*");
        $this->db->from("outlets");
        if ($id)
            $this->db->where('id', $id);
        $query = $this->db->get();
        if ($id)
            return $query->row();
        else
            return $query->result();
    }

    public function save_outlet() {

        $data = array(
            // 'name'             => $this->input->post('name'),
            'address'          => $this->input->post('address'),
            'phone'            => $this->input->post('phone'),
            'owner_first_name' => $this->input->post('first_name'),
            'owner_last_name'  => $this->input->post('last_name'),
            'mall'             => $this->input->post('mall'),
            'web'              => $this->input->post('website'),
            'fb_page_url'      => $this->input->post('fb_page'),
            'status'           => 'Pending',
            'lat'              => $this->input->post('last'),
            'long'             => $this->input->post('long')
                //'lat' 			=> isset($geo_position['latitude'])?$geo_position['latitude']:0,
                //'long' 			=> isset($geo_position['longitude'])?$geo_position['longitude']:0//,
                //'accuracy' 		=> isset($geo_position['accuracy'])?$geo_position['accuracy']:0
        );

        //$data['slug'] = $this->slug->create_uri($data);

        $insert   = $this->db->insert($this->db->dbprefix('outlets'), $data);
        $offer_id = $this->db->insert_id();

        if ($insert) {
            return true;
        } else {
            return false;
        }
    }

}

/* End of file signup_model.php */
/* Location: ./application/models/signup_model.php */