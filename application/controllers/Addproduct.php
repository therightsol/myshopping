<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Addproduct extends CI_Controller {
    public function index(){
        $this->load->view('add_product');
//        echo "<h1>this is add product in cart</h1>";
    }
}