<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
    public function index(){
        $this->load->view('contact');

        $this->load->library('form_validation');
        if (filter_input_array(INPUT_POST));
        $rules = array(
            array(
            'field' => 'contact-name',
            'label' => 'Name',
            'rules' => 'required',
            ),
        );


        $this->form_validation->set_rules($rules);

    }
}