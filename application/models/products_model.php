<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class products_model extends CI_Model {

    /**
     * User Model Class
     *
     * @package Site
     * @author Red Signal
     */
    public function __construct() {
        parent::__construct();
        $this->load->model("tags_model");
        $this->load->model("images_model");
        $this->offer_image_path_url = base_url() . 'images/offers/';
        $config                     = array(
            'field' => 'slug',
            'title' => 'title',
            'table' => 'products',
            'id'    => 'id',
        );
        $this->load->library('slug', $config);
        //	$this->output->enable_profiler(PROFILER);
    }

    public function get($id = 0, $outlet = 0, $limit = 10) {
        //$this->db->cache_on();
        $this->db->select('products.*, outlet.name as outlet_name, outlet.slug as outlet_slug');
        $this->db->from("products");
        $this->db->join('outlets as outlet', 'products.outlet_id = outlet.id', 'left');
        $this->db->order_by('products.id', 'desc');
        if ($outlet)
            $this->db->where("products.outlet_id", $outlet);

        if ($id)
            $this->db->where("products.id", $id);
        $this->db->limit($limit);
        $query = $this->db->get();
        $data  = $query->result();

        foreach ($data as $product) {
            $p          = $product;
            $p->tags    = $this->tags_model->get_product_tags($product->id);
            $p->images  = $this->images_model->get(0, $product->id);
            $products[] = $p;
        }
        if ($id)
            return $products[0];
        else {
            return $products;
        }
    }

    public function get_by_slug($slug = 0) {
        //$this->db->cache_on();
        $this->db->select('products.*, outlet.name as outlet_name, outlet.slug as outlet_slug');
        $this->db->from("products");
        $this->db->join('outlets as outlet', 'products.outlet_id = outlet.id', 'left');
        if ($slug)
            $this->db->where("products.slug", $slug);
        $query = $this->db->get();
        $data  = $query->result();

        foreach ($data as $product) {
            $p          = $product;
            $p->tags    = $this->tags_model->get_product_tags($product->id);
            $p->images  = $this->images_model->get(0, $product->id);
            $products[] = $p;
        }
        return $products[0];
    }

    public function get_tag_products($tag, $limit = 12) {
        $this->db->select("p.*");
        $this->db->from("products as p");
        $this->db->join("product_tag", "product_tag.pid = p.id");
        $query = $this->db->order_by('id', 'desc');
        $query = $this->db->where("product_tag.tid", $tag);
        $query = $this->db->limit($limit);
        $query = $this->db->get();
        $data  = $query->result();

        foreach ($data as $product) {
            $products         = $product;
            $products->tags   = $this->tags_model->get_product_tags($product->id);
            $products->images = $this->images_model->get(0, $product->id);
        }
        return $query->result();
    }

    public function d_price($price, $discount) {
        return round($price - ( $price * ($discount / 100) ), 2);
    }

    public function add($product) {
        $data['title']            = $product['title'];
        $data['vendor']           = $product['vendor'];
        $data['price']            = $product['price'];
        if ($product['discount'] > 0)
            $data['discounted_price'] = $this->d_price($product['price'], $product['discount']);
        $data['discount']         = $product['discount'];
        $data['outlet_id']        = $product['outlet_id'];
        $data['created_by']       = $this->session->userdata('user_id');
        $data['tags']             = $product['tags'];
        $data['fixed_price']      = isset($product['fixed_price']) ? 1 : 0;
        $data['slug']             = $this->slug->create_uri($product['title']);
        $insert                   = $this->db->insert("products", $data);
        $pid                      = $this->db->insert_id();
        $tags                     = explode(',', $product['tags']);
        $this->tags_model->save($pid, $tags);

        $images = isset($product['uploadedfiles']) ? $product['uploadedfiles'] : false;
        if ($pid && is_array($images)) {
            foreach ($images as $key => $image) {
                $img['post_id']       = $pid;
                $img['file_name']     = $image;
                $img['thumbnail']     = 'thumbnail/' . $image;
                $img['creation_date'] = date("Y-m-d H:i:s");
                $this->db->insert($this->db->dbprefix('images'), $img);
            }
        }
        return $pid;
    }

    public function save1($product, $images) {
        $tags            = $product['tags'];
        $product['tags'] = implode(',', $product['tags']);
        $product['slug'] = $this->slug->create_uri($product);
        $insert          = $this->db->insert("products", $product);
        $pid             = $this->db->insert_id();
        $this->tags_model->save($pid, $tags);
        if ($insert) {//return $this->input->get('images');
            if ($pid && is_array($images)) {
                foreach ($images as $key => $image) {
                    $img['post_id']       = $pid;
                    $img['file_name']     = $image['file_name'];
                    $img['ext']           = $image['file_ext'];
                    $img['type']          = $image['file_type'];
                    $img['size']          = $image['file_size'];
                    $img['height']        = 0;
                    $img['width']         = 0;
                    $img['path']          = $this->offer_image_path_url . $image['file_name'];
                    $img['creation_date'] = date("Y-m-d H:i:s");
                    pre($img);
                    $this->db->insert($this->db->dbprefix('images'), $img);
                }
                /*
                  $this->load->library('facebook', $this->fb_config);
                  $privacy = array(
                  'value' => 'SELF',
                  );
                  $fb_response = $this->facebook->api('/469454093175145/feed', 'POST',
                  array(
                  'privacy' => json_encode($privacy),
                  'link' => base_url('/product/'.$pid),
                  'caption' =>"By Marketify",
                  'message' =>$product['title'],
                  'description' => $product['description']."\n".implode(',', $product['tags']),
                  'access_token' => $this->session->userdata('user')->token,
                  )); */
                $this->db->insert("fb_queue", array(
                    'pid'    => $pid,
                    'fb_ids' => $this->session->userdata('user')->uid,
                    'token'  => $this->session->userdata('user')->token
                ));

                return array("status" => true, "flash" => $product['title'] . " Saved.");
            } else {
                return array("status" => true, "data" => array('pid' => $pid, "msg" => "Image not saved"));
            }
        } else {
            return array("error insert");
        }
    }

}

// end class
?>