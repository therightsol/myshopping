<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function index()
    {
        $this->load->library('form_validation');

        if (filter_input_array(INPUT_POST)) {
            $rules = array(
                array(
                    'field' => 'contact-name',
                    'label' => 'Contact Name',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'contact-email',
                    'label' => 'E-MAIL',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'contact-subject',
                    'label' => 'Contact Subject',
                    'rules' => 'required'
                ),
                array (
                    'field' =>'contact-message',
                    'label' =>'Your Message',
                    'rules' =>'Require',
                )
            );
            $this->form_validation->set_rules($rules);

            if (!$this->form_validation->run() == true) {

                $this->load->view('contact');
            }

            else {
                    // Show Error
                $data ['validation_errors'] = validation_errors();
                $this->load->view('contact', $data);
                }
            }else{
            $this->load->view('contact');
        }
    }
}