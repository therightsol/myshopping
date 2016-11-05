<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
    public function index()
    {
        $this->load->library('form_validation');
        if ($this->session->userdata('username')) {
            $data['is_user_login'] = true;
            $data['guest'] = false;
        }
        else {
            $data['is_user_login'] = false;
            $data['guest'] = true;
        }

        // if ($this->session->userdata('username')) {

        if (filter_input_array(INPUT_POST)){


            $rules = array(
                array(
                    'field' => 'email',
                    'label' => 'E-mail',
                    'rules' => 'required|valid_email|max_length[255]'
                ),

                array(
                    'field' => 'pass1',
                    'label' => 'Password',
                    'rules' => 'required|min_length[7]|max_length[255]'
                ),

                array(
                    'field' => 'pass2',
                    'label' => 'Confirm Password',
                    'rules' => 'required|min_length[7]|max_length[255]|matches[pass1]'
                ),
                array(
                    'field' => 'fname',
                    'label' => 'First Name',
                    'rules' => 'required|min_length[4]|max_length[100]'
                ),
                array(
                    'field' => 'lname',
                    'label' => 'Last Name',
                    'rules' => 'required|min_length[4]|max_length[100]'
                ),
                array(
                    'field' => 'phone',
                    'label' => 'Telephone',
                    'rules' => 'required|min_length[11]|numeric'
                ),
                array(
                    'field' => 'fax',
                    'label' => 'FAX',
                    'rules' => 'required|numeric'
                ),
                array(
                    'field' => 'company',
                    'label' => 'Company Name',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'address1',
                    'label' => 'Address1',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'address2',
                    'label' => 'Address2',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'postcode',
                    'label' => 'Post Code',
                    'rules' => 'required|alpha_numeric'
                ),

                array(
                    'field' => 'city',
                    'label' => 'City Name',
                    'rules' => 'required'
                ),


                array(
                    'field' => 'checkbox_agree',
                    'label' => 'Checkbox',
                    'rules' => 'required'
                ),
                array(

                    'field' => 'country',
                    'label' => 'Country',
                    'rules' => 'required'

                ),
                array(

                    'field' => 'state',
                    'label' => 'Region/State',
                    'rules' => 'required'

                )
            );
            $this->form_validation->set_rules($rules);


            if (! $this->form_validation->run() == True ) {
                //continue


                $this->load->model('user');

                $un = $this->session->userdata('username');

                $user = $this->user->getRecord ($un, 'username');




//if id is unique we want just one row to be returned



                /* if ($isRecordAvailable) {
                     echo " continue, your username and password Matched". "<br/>";
                     // var_export($_POST);

                     // user is available now check is password is same as provided
                     $password = $this->input->post('loginpass', True);

                     $user = $this->user->getRecord( $email, 'email' );

                     $is_pass_match = password_verify($password, $user->password);
                     //$this->debug($user);exit;


                     if ($is_pass_match){
                         // Now login

                         $this->session->set_userdata('username', $user->username);
                         $this->session->set_userdata('email', $user->email);
                         $this->session->set_userdata('usertype', $user->usertype);

                         redirect('home');*/


                if ($this->session->userdata('username')) {
                    $data['is_user_login'] = true;
                    $data['fname'] = $user->firstname;
                    $data['lname'] = $user->lastname;
                    $data['email'] = $user->email;

                    $this->load->view('checkout', $data);
                }
                else {
                    $data['is_user_login'] = false;
                    $data['fname'] = "";
                    $data['lname'] = "";
                    $data['email'] = "";
                    $this->load->view('checkout', $data);
                }


            } else {
                echo "Show validation errors";
                /*$data['validation_errors'] = validation_errors();
                $this->load->view('checkout', $data);*/
            }







        } else {
            /* $data['is_user_login'] = false;
              $data['guest'] = true;*/
            $this->load->view('checkout');
            //echo "main page";
        }


    }







    private function debug($val, $die = false)
    {
        echo '<tt><pre>' . var_export($val, True) . '</pre></tt>';

        if ($die) exit('<hr />Exit from Debug in Register.php Controller.');
    }
}