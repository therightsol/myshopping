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

                //$un = $this->session->userdata('username');


                $r = $this->user->get_user_with_usersmeta_easy();       // fetch record where user id = 8

                $meta = $r[0]['meta_record'];
                $meta = explode(';', $meta);

                $metaVal = array();
                foreach ($meta as $key => $value){
                    $temp = explode('|', $value);
                    $metaVal[$temp[0]] = $temp[1];
                }

                unset($r[0]['meta_record']);

                $r = array_merge($r[0], $metaVal);


                $this->debug($r, false);

                echo '<hr />';

                $uid = 6;

                $r = $this->user->get_user_with_usersmeta_hard(
                    array ( 'u.id', 'u.username', 'u.email', 'u.password', 'ut.type', 'um.id'),
                    'um.metakey', 'um.metavalue', '|', ';', 'meta_record',
                    array( 'usersmetas um', 'usertypes ut'),
                    'users u',
                    array('um.uid' => $uid, 'u.id' => $uid, 'ut.id' => 'has-query'),
                    'select users.usertype from users where users.id = ' . $uid
                );
                $meta = $r[0]['meta_record'];
                $meta = explode(';', $meta);

                $metaVal = array();
                foreach ($meta as $key => $value){
                    $temp = explode('|', $value);
                    $metaVal[$temp[0]] = $temp[1];
                }

                unset($r[0]['meta_record']);

                $r = array_merge($r[0], $metaVal);
                $this->debug($r, false);


                /* -- Debugging -- */
                //echo $this->db->last_query();
                $this->output->enable_profiler(true);


                /*$user = $this->user->getRecord ($un, 'username');
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

                $merge = array_merge($user + $data);

                $this->load->view ('checkout', $merge);*/


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


}