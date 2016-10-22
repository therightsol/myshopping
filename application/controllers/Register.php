<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function index(){

        $data['userexists'] = false;

        $this->load->library('form_validation');


        if (filter_input_array(INPUT_POST)){


            // 1) set rules / define rules /
            $rules = array (
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
                    'rules' => 'required|min_length[7]|max_length[100]'
                ),
                array(
                    'field' => 'lname',
                    'label' => 'Last Name',
                    'rules' => 'required|min_length[7]|max_length[100]'
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
                    'field' => 'pcode',
                    'label' => 'Post Code',
                    'rules' => 'required|alpha_numeric'
                ),
                array(
                    'field' => 'fax',
                    'label' => 'FAX',
                    'rules' => 'required|min_length[11]|numeric'
                ),
                array(
                    'field' => 'city',
                    'label' => 'City Name',
                    'rules' => 'required'
                ),

                array(
                    'field' => 'username',
                    'label' => 'Username',
                    'rules' => 'required|min_length[3]|max_length[255]'
                ),
                array(
                    'field' => 'checkbox',
                    'label' => 'Check Box',
                    'rules' => 'required'
                )
            );



            $this->form_validation->set_rules( $rules );

            if ( $this->form_validation->run() == FALSE ){
                //continue

                $this->load->model('user');
                // 1) check is user and email address available or not

                $username = $this->input->post('username', True);
                $email = $this->input->post('email', True);

                $isRecordAvailable = $this->checkIsAvailable(array('username' => $username, 'email' => $email));



                if (! $isRecordAvailable){
                    // you can now create record


                    /* Getting values from form*/

                    $firstName = $this->input->post('fname', True);
                    $lastName = $this->input->post('lname', True);
                    /*$phone = $this->input->post('phone', True);
                    $fax = $this->input->post('fax', True);
                    $company = $this->input->post('company', True);
                    $address1 = $this->input->post('address1', True);
                    $address2 = $this->input->post('address2', True);
                    $city = $this->input->post('city', True);
                    $passCode = $this->input->post('pcode', True);
                    $country = $this->input->post('country', True);
                    $state = $this->input->post('state', True);*/

                    $password = $this->input->post('pass2', True);
                    $encryptedPass = password_hash($password, PASSWORD_BCRYPT, array('cost'=>12));


                    $this->user->email = $email;
                    $this->user->password = $encryptedPass;
                    $this->user->username = $username;
                    $this->user->firstname = $firstName;
                    $this->user->lastname = $lastName;

                    $result = $this->user->insertRecord();

                    if ($result){
                        echo 'User successfully registered';
                    }else {
                        echo ' Sorry! there are some internal problem';
                    }



                }else {
                    $data['userexists'] = true;
                    $this->load->view('register', $data);
                }
            }else {

                // Show errors
                
                $data['validation_errors'] = validation_errors();

                $this->load->view('register', $data);
            }
        }else {
           $this->load->view('register', $data);
            /*$pass='alishan';
            echo $pass . '<br>' ;

            echo 'md5 Pass' . md5($pass) . '<br/>';
            echo 'hashed Pass -- ' . password_hash($pass, PASSWORD_BCRYPT, array('cost' => 12)) . '<br/>';
        */
        }

    }

    private function checkIsAvailable( array $arr ){
        $is_record_available = array ();
        foreach( $arr as $key => $value ){
            $is_record_available[$key] = $this->user->getRecord($value, $key);

        }

        if(array_filter($is_record_available)) {
            return true;
        }

        return false;
        //$this->debug($is_record_available, true);
    }


    /*
     * Debug function
     */
    private function debug( $val, $die = false ){
        echo '<tt><pre>' . var_export($val, True) . '</pre></tt>';

        if ($die) exit('<hr />Exit from Debug in Register.php Controller.');
    }
}