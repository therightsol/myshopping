<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends MY_Model {
    public function index(){
        $this->load->view('products');
    }
}