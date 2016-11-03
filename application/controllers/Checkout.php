<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
    public function index()
    {
        $this->load->library('form_validation');

        if ($this->session->userdata('username')) {
                $data['is_user_login'] = true;
                $this->load->view('checkout', $data);


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

            if ($this->form_validation->run() == True) {
                //continue
            } else {
                echo "Show validation errors";
                /*$data['validation_errors'] = validation_errors();
                $this->load->view('checkout', $data);*/
            }







        } else {
            $data['is_user_login'] = false;
            $this->load->view('checkout', $data);
        }
    }
}