<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Compare_product extends CI_Controller {
    public function index(){
        $this->load->view('compare_product');
    }
}