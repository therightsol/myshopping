<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller
{
    public function index()
    {

         $this->load->view('member');
    }

    public function update_password(){
        $this->load->library('form_validation');

        if (filter_input_array(INPUT_POST)){
            // @todo -- Pending validations -- for - Asad

            $rules = array(

                array(

                    'field' => 'opass',
                    'label' => 'Password',
                    'rules' => 'required'

                ),
                array(

                    'field' => 'npass',
                    'label' => 'New Password',
                    'rules' => 'required'

                ),
                array(

                    'field' => 'cpass',
                    'label' => 'Confirm Password',
                    'rules' => 'required'

                )

            );


            $this->form_validation->set_rules($rules);

            if($this->form_validation->run() == true){

                $old = $this->input->post('opass' , true);

                $password = $this->input->post('npass', true);

                //@todo validation that password has requried length and it matches with confirm

                $hashedPass = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));

                $this->load->model('user');


                // $username = $this->session->userdata('username');
                $username = 'ramishlhr'; // delete this line

                $colName = 'username';
                $updateData = array (
                    'password'    =>  $hashedPass,
                    'firstname'    =>  'AAAAA'
                );
                $result = $this->user->updateRecord($colName, $updateData, $username);

                if ($result){
                    // @todo show proper response
                    echo 'YOur password has been updated';
                }


            }

            else {
                $this->index();
            }

            }




    }

    public function delete_account(){
            $this->load->model('user');
        //$username = $this->session->userdata('username');
        $username = 'ramishlhr';
        $result = $this->user->deleteRecord('username', $username);

        if ($result){
            echo 'account is deleted';
            // redirect logout
        }
    }
}

