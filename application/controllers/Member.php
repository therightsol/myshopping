<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller
{
    public function index()
    {

         $this->load->view('member');
    }

    public function update_password(){

        $data['not_updated']= false;

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
                    'rules' => 'required|matches[npass]'

                )

            );


            $this->form_validation->set_rules($rules);

            if($this->form_validation->run() == true){

                $this->load->model('user');


                $session_pass = $this->session->userdata('password');

                $old = $this->input->post('opass' , true);


                if($old == $session_pass){
//                    continue

                    $new_password = $this->input->post('npass', true);


                    $hashedPass = password_hash($new_password, PASSWORD_BCRYPT, array('cost' => 12));

                    $colName = 'password';
                    $where = $this->session->userdata('username');
                    $updateData = array (
                        'password'    =>  $hashedPass,
                    );
                    $result = $this->user->updateRecord($colName, $updateData, $where);

                    var_export($result);

                    if ($result){
                        // @todo show proper response
                        echo 'YOur password has been updated';

                    }else {
/*                        $data['not_updated']= true;
                        $this->load->view('member/update_password' , $data);*/

                        echo 'password not updated';

                    }

                }else{

                    echo 'invalid password';

                }


                //@todo validation that password has requried length and it matches with confirm





                // $username = $this->session->userdata('username');
//                $username = 'ramishlhr';  delete this line






            }else{

                $data['validation_errors'] = validation_errors();
                $this->load->view('member/update_password', $data);

            }



            } else {
            $this->load->view('member/update_password' , $data);
        }




    }

    public function delete_account(){
            $this->load->model('user');
        $username = $this->session->userdata('username');
//        $username = 'ramishlhr';
        $result = $this->user->deleteRecord('username', $username);

        if ($result){
            echo 'account is deleted';
            // redirect logout
        }
    }
}

