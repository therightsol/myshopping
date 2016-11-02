<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {
    public function index(){
        $this->load->view('ajax');



    }

    public function is_username_available(){

        $username = $this->input->post('username' , true);
        $available = $this->user->getRecord($username , 'username');

        if($available == $username){

            return false;

        }else{

            return true;

        }

    }


}