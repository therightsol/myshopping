<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function index(){

        if (filter_input_array(INPUT_POST)){
            var_export($_POST);
        }else {
            $this->load->view('register');
        }



    }
}