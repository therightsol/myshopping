<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category_list extends CI_Controller {
    public function index(){
        $this->load->view('Category-list');
    }
}