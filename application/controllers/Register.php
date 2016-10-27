<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function index(){

        $data['userexists'] = false;
        $data['success'] = false;
        $data['failure'] = false;
        $data['emailexists'] = false;

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

                    // id of newly created record in users table
                    $result = $this->user->insertRecord();

                    if ($result){
                        $this->load->model('usersmeta');

                        $metaRec = array (
                            array(
                                'uid' => $this->usersmeta->uid = $result,
                                'metakey' => $this->usersmeta->metakey = 'telephoneNum',
                                'metavalue' => $this->usersmeta->metavalue = $this->input->post('phone', True),
                            ),
                            array(
                                'uid' => $this->usersmeta->uid = $result,
                                'metakey' => $this->usersmeta->metakey = 'fax',
                                'metavalue' => $this->usersmeta->metavalue = $this->input->post('fax', True)
                            ),
                            array(
                                'uid' => $this->usersmeta->uid = $result,
                                'metakey' => $this->usersmeta->metakey = 'companyName',
                                'metavalue' => $this->usersmeta->metavalue = $this->input->post('company', True)
                            )
                        );


                        //$numRows = $this->usersmeta->insertBatch( $metaRec );

                        /*$numRows = count($metaRec);
                        if ($numRows == count($metaRec)){

                            // Send Email
                            $body = "<h1>Welcome to MyShopping</h1><br />"
                                . "You are successfully registered. Please verify your account.";
                                // @todo verification will pending untill next 4 lectures.
                            $is_email_sent = $this->send_email('myshoppinglhr@gmail.com', $email, 'Verify your account - MyShopping', $body );
                            var_export($is_email_sent);*/



                            // @todo show this to register page -- pending to Ubaid Ullah
                            echo "You are successfully registered.";




                        }else {
                            // @todo show related errors / internal error
                        }





                        /*$this->usersmeta->uid = $result;
                        $this->usersmeta->metakey = 'companyName';
                        $this->usersmeta->metavalue = $this->input->post('company', True);
                        $this->usersmeta->uid = $result;

                        $this->usersmeta->uid = $result;
                        $this->usersmeta->metakey = 'firstAddress';
                        $this->usersmeta->metavalue = $this->input->post('address1', True);
                        $this->usersmeta->uid = $result;

                        $this->usersmeta->uid = $result;
                        $this->usersmeta->metakey = 'secondAddress';
                        $this->usersmeta->metavalue = $this->input->post('address2', True);
                        $this->usersmeta->uid = $result;

                        $this->usersmeta->uid = $result;
                        $this->usersmeta->metakey = 'cityName';
                        $this->usersmeta->metavalue = $this->input->post('city', True);
                        $this->usersmeta->uid = $result;

                        $this->usersmeta->uid = $result;
                        $this->usersmeta->metakey = 'postCode';
                        $this->usersmeta->metavalue = $this->input->post('pcode', True);
                        $this->usersmeta->uid = $result;

                        $this->usersmeta->uid = $result;
                        $this->usersmeta->metakey = 'countryName';
                        $this->usersmeta->metavalue = $this->input->post('country', True);
                        $this->usersmeta->uid = $result;

                        $this->usersmeta->uid = $result;
                        $this->usersmeta->metakey = 'regionOrstate';
                        $this->usersmeta->metavalue = $this->input->post('state', True);
                        $this->usersmeta->uid = $result;*/



                        if ($result){

                            // echo 'User successfully registered';
                            $data['success'] = true;
                            $this->load->view('register', $data);

                        } elseif(! isset($_POST['checkbox'])){
                            $check['checkbox' ] = "Please check before submit";
                            $this->load->view('register', $check);
                        }
                    else {
                            //echo ' Sorry! there are some internal problem';
                            $data['failure'] = true;
                            $this->load->view('register', $data);
                        }
                    }else {
                        echo ' Sorry! there are some internal problem';
                    }
                }else{
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


    /* Send Email */

    private function send_email( $from, $to, $subject, $body){
        $this->load->library('email');


        $result = $this->email
            ->from($from)
            ->reply_to($from)    // Optional, an account where a human being reads.
            ->to($to)
            ->subject($subject)
            ->message($body)
            ->send();

        echo $this->email->print_debugger();

        return $result;

    }

}