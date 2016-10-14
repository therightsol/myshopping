<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function index(){

        $this->load->Library('form_validation');

        var_export($_POST);

        if(filter_input_array(INPUT_POST)) {

            $rules = array(

                array(

                    'field' => 'loginmail',
                    'label' => 'Email',
                    'rules' => 'required|valid_email'

                ),
                array(

                    'field' => 'loginpass',
                    'label' => 'Password',
                    'rules' => 'required|min_length[7]|max_length[35]'

                )

            );

            $this->form_validation->set_rules($rules);

            if (!$this->form_validation->run() == FALSE) {

                //CONTINUE

            } else {

                $data['validation_errors'] = validation_errors();

                $this->load->view('login', $data);

            }
        }else {

            $this->load->view('login');

        }






    }
}