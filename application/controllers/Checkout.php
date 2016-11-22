<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
    public function index()
    {
        $this->load->library('form_validation');


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


            if ($this->form_validation->run() == false ) {
                //continue
               // echo "form validation not true";
                $data['is_user_login'] = true;

                $this->load->model('user');
                $this->load->model('usersmeta');

                $un = $this->session->userdata('username');
                $user = $this->user->getRecord ($un, 'username');
                $user = (array) $user;

                $id = $user['id'];
                $metaRec = $this->usersmeta->getRecord ($id, 'uid', true);
                $metaRec= (array) $metaRec ;

                $data['telephoneNum'] =  ($metaRec[0]['metavalue']);
                $data['fax'] =  ($metaRec[1]['metavalue']);
                $data['companyName'] =  ($metaRec[2]['metavalue']);
                $data['firstAddress'] =  ($metaRec[3]['metavalue']);
                $data['secondAddress'] =  ($metaRec[4]['metavalue']);
                $data['cityName'] =  ($metaRec[5]['metavalue']);
                $data['postCode'] =  ($metaRec[6]['metavalue']);
                $data['countryName'] =  ($metaRec[7]['metavalue']);
                $data['region/state'] =  ($metaRec[8]['metavalue']);


                if (isset($_SESSION['cartData'])) {
                    $cartdata = $this->load_cartData();
                    $cartdata = json_decode(json_encode($cartdata), True);
                    $data['r'] = $cartdata;

                }


                $data['empty'] = true;


                $merge = array_merge($user + $data);




                $this->load->view ('checkout', $merge);


            }

            else

            {
               //echo "Show validation errors,   form validation true";
                $data['validation_errors'] = validation_errors();
                $this->load->view('checkout', $data);

            }

        }
        else
        {
           // echo "filter input array else ..........";

            if ($this->session->userdata('username')) {
                $data['is_user_login'] = true;
                $data['id'] = null;

                $data['username'] = $this->session->userdata('username');



                $data['guest'] = false;
                //echo "login user";
            }
            else {
                $data['is_user_login'] = false;
                $data['guest'] = true;
                $data['id'] = null;
                //echo "guest";
            }

            $this->load->view ('checkout', $data);

        }


    }







    private function debug($val, $die = false)
    {
        echo '<tt><pre>' . var_export($val, True) . '</pre></tt>';

        if ($die) exit('<hr />Exit from Debug in Register.php Controller.');
    }
    private function load_cartData(){
        $pids = $this->session->userdata('cartData');

        $this->load->model('product');
        //$this->product->getRecord($pids, 'id');

        $result = array();
        foreach($pids as $pid){
            $result[] = $this->product->getRecord($pid, 'id');
        }

        return $result;
    }


}