<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {
    public function index(){
        $this->load->view('register');
    }

    public function is_username_available(){

        $data = $this->input->post('username' , true);

    }
}