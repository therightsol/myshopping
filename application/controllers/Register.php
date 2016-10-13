<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function index(){

        $this->load->library('form_validation');


        if (filter_input_array(INPUT_POST)){


            // 1) set rules / define rules
            $rules = array (
                array(
                    'field' => 'email',
                    'label' => 'E-mail',
                    'rules' => 'required|valid_email'
                ),

                array(
                    'field' => 'pass1',
                    'label' => 'Password',
                    'rules' => 'required|min_length[7]|max_length[35]'
                ),

                array(
                    'field' => 'pass2',
                    'label' => 'Confirm Password',
                    'rules' => 'required|min_length[7]|max_length[35]|matches[pass1]'
                )
                
            );


            $this->form_validation->set_rules( $rules );

            if (! $this->form_validation->run() == FALSE ){
                //continue
            }else {

                // Show errors
                
                $data['validation_errors'] = validation_errors();

                $this->load->view('register', $data);
            }
        }else {
           $this->load->view('register');
            /*$pass='alishan';
            echo $pass . '<br>' ;

            echo 'md5 Pass' . md5($pass) . '<br/>';
            echo 'hashed Pass -- ' . password_hash($pass, PASSWORD_BCRYPT, array('cost' => 12)) . '<br/>';
        */
        }



    }
}