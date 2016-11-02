<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function index(){
        
        $data['active_page'] = 'login';


        $this->load->library('form_validation');

        $data['error_validate'] = false;
        $data['error_unique'] = false;
        $data['error_noData'] = false;
        $data['msg'] = false;
        $data['validate'] = false;
        $data['error_email_login'] = false;
        $data['error_password_login'] = false;


        if(filter_input_array(INPUT_POST)){

            // 1) set rules / define rules /
            $rules = array(
                array(
                    'field' => 'loginmail',
                    'label' => 'E-mail',
                    'rules' => 'required|valid_email|max_length[255]'
                ),

                array(
                    'field' => 'loginpass',
                    'label' => 'Password',
                    'rules' => 'required|min_length[7]|max_length[255]'
                )

            );



            $this->form_validation->set_rules($rules);

            if(! $this->form_validation->run()== false){
                /* $data['validate'] = true;
                $this->load->view ('login', $data);*/
                $this->load->model('user');
                $email = $this->input->post('loginmail', True);

                $isRecordAvailable = $this->checkIsAvailable( array ( 'email' => $email ) );

                if ($isRecordAvailable) {
                    //echo " continue, your username and password Matched". "<br/>";
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

                        redirect('home');
                        

                    }else{
                        $data['error_password_login'] = true;
                        $this->load->view ('login', $data);
                        // @todo show error
                        // provided password OR email was wrong
                        //$data['msg'] = true;
                        //$this->load->view ('login', $data);
                    }
                }
                else {
                    $data['error_email_login'] = true;
                    $this->load->view('login', $data);
                   // echo "Sorry Username and password not matched";
                    // var_export($_POST);


                }


            }
            else {
                $data['error_validate']= true;
                $this->load->view ('login', $data);
            }




        }
        else {
            $data['msg'] = false;
            $this->load->view('login', $data);

        }
        // echo '<tt><pre>' . var_export($data, True) . '</pre></tt>';

    }

    /*
     * Debug function
     */
    private function debug($val, $die = false)
    {
        echo '<tt><pre>' . var_export($val, True) . '</pre></tt>';

        if ($die) exit('<hr />Exit from Debug in Register.php Controller.');
    }
























    private function checkIsAvailable(array $arr)
    {
        $is_record_available = array();
        foreach ($arr as $key => $value) {
            $is_record_available[$key] = $this->user->getRecord($value, $key);

        }

        if (array_filter($is_record_available)) {
            return true;
        }

        return false;
        //$this->debug($is_record_available, true);
    }
}