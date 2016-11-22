<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data = array();
        $this->load->view('dashboard/dashboard', $data);
    }

    public function dashboardlogin()
    {
        $this->load->library('form_validation');

        if(filter_input_array(INPUT_POST)){
            $rules = array(
                array(
                    'field' => 'email',
                    'label' => 'E-mail',
                    'rules' => 'required|valid_email|max_length[255]'
                ),
                array(
                    'field' => 'password',
                    'label' => 'Password',
                    'rules' => 'required|min_length[7]|max_length[255]'
                )

            );

            $this->form_validation->set_rules($rules);

            if(! $this->form_validation->run()== false){

                $this->load->model('user');

                $email = $this->input->post('email', True);

                $isRecordAvailable = $this->checkIsAvailable( array ( 'email' => $email ) );


                if ($isRecordAvailable) {

                    $password = $this->input->post('password', True);

                    $user = $this->user->getRecord( $email, 'email' );

                    $is_pass_match = password_verify($password, $user->password);

                    if ($is_pass_match){

                        $this->session->set_userdata('username', $user->username);

                        $this->session->set_userdata('email', $user->email);

                        $this->session->set_userdata('usertype', $user->usertype == 1);

                        redirect('dashboard');
                    }else{
                        $data['error_password_login'] = true;

                        $this->load->view ('dashboard/dashboardlogin', $data);
                    }
                }
                else {
                    $data['error_email_login'] = true;
                    $this->load->view('dashboard/dashboardlogin', $data);
                }
            }
            else {
                $data['error_validate']= true;
                $this->load->view ('dashboard/dashboardlogin', $data);
            }
        }
        else {
            $data['msg'] = false;
            $this->load->view('dashboard/dashboardlogin', $data);
        }
    }


    public function dashboardlogout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('password');
        $this->session->sess_destroy();
        redirect('dashboard/dashboardlogin','refresh');
    }

    public function setting()
    {
        $data['success'] = false;
        $data['form_errors'] = false;

        $this->load->model('setting');
        $q = $this->db->get('settings');
        $r = $q->result_array();

        if ($r) {
            $data = array('r' => $r);
            $this->load->view('dashboard/setting', $data);

        } else {
            $data['novalue'] = true;
            $this->load->view('dashboard/setting', $data);
        }

        $this->load->library('form_validation');

        if (filter_input_array(INPUT_POST)) {
            $rules = array(
                array(
                    'field' => 'key',
                    'label' => 'Product Key',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'value',
                    'label' => 'Value',
                    'rules' => 'required'
                )
            );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) {

                $this->load->model('setting');

                $key = $this->input->post('key', true);
                $value = $this->input->post('value', true);

                $this->setting->key = $key;
                $this->setting->value = $value;

                date_default_timezone_set('ASIA/KARACHI');

                $this->setting->createdAt = date('Y-m-d H:i:s');

                $result = $this->setting->insertRecord();
                //var_export($result);
                if ($result) {
                    //echo 'settings saved successfully';
                    $data['success'] = true;
                    //$this->load->view('dashboard', $data);
                    redirect('dashboard/setting');
                } else {
                    echo 'Sorry ';
                }
            } else {
                //echo 'THere are some errors';
                $data['validation_errors'] = validation_errors();
                $this->load->view('dashboard/setting', $data);
            }
        } else {
            //echo ' there is some error in inputs';
            $data['form_errors'] = true;
            $this->load->view('dashboard/setting', $data);
        }
    }

    public function add_product()
    {


        $data['success'] = false;
        $data['form_errors'] = false;

        $this->load->library('form_validation');

        if (filter_input_array(INPUT_POST)) {

            var_export($_POST);
            echo '<hr />';
            echo var_export($_FILES);


            $config['upload_path']          = './product_images/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 5000; // 5 MB


            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('product_image'))
            {
                // file not uploaded
                // $data['fnu'] = '';
                // redirect
                $data['ferror'] = $this->upload->display_errors();
            }
            else
            {
                // file uploaded
                // show success message
                // redirect
            }


            echo 'm here';

            exit;

            $rules = array(

                array(
                    'field' => 'pname',
                    'label' => 'Product Name',
                    'rules' => 'required|min_length[3]|max_length[255]'
                ),
                array(
                    'field' => 'purchase',
                    'label' => 'Purchase Price',
                    'rules' => 'required|min_length[1]|numeric'
                ),
                array(
                    'field' => 'sale',
                    'label' => 'Sale Price',
                    'rules' => 'required|min_length[1]|numeric'
                ),
                array(
                    'field' => 'discount',
                    'label' => 'Discounted Price',
                    'rules' => 'required|min_length[1]|numeric'
                ),
                array(
                    'field' => 'tax',
                    'label' => 'Tax',
                    'rules' => 'required|min_length[1]|numeric|callback_is_valid_amount'
                ),
                array(
                    'field' => 'textarea',
                    'label' => 'Text Area',
                    'rules' => ''
                ),

            );

            $this->form_validation->set_rules($rules);

            if (!$this->form_validation->run() == False) {

                $this->load->model('product');

                $productName = $this->input->post('pname', true);
                $purchasePrice = $this->input->post('purchase', true);
                $salePrice = $this->input->post('sale', true);
                $discountedPrice = $this->input->post('discount', true);
                $tax = $this->input->post('tax', true);
                $sku = $this->input->post('pSKU', true);

                $textarea = $this->input->post('textarea', true);

                $this->product->title = $productName;
                $this->product->purchaseprice = $purchasePrice;
                $this->product->saleprice = $salePrice;
                $this->product->discountpercent = $discountedPrice;
                $this->product->tax = $tax;
                $this->product->sku = $sku;

                $this->product->description = $textarea;
                $this->product->slug = $this->input->post('pSlug', True);
                $this->product->status = 1; // Add 1 as published, 2 as draft in product statuses DB on ur side

                date_default_timezone_set('ASIA/KARACHI');

                $this->product->createdAt = date('Y-m-d H:i:s');

                $result = $this->product->insertRecord();
//                var_export($result);

                if ($result) {

                    // Upload file now.


//                    echo 'Product Added Successfully';
                    $data['success'] = true;
                    $this->load->view('dashboard/add_product', $data);

                } else {

                    echo 'Sorry Product not added';

                }

            } else {
                // validation errors

                $data['validation_errors'] = validation_errors();
                $this->load->view('dashboard/add_product', $data);

            }


        } else {
            // not post method

            $this->load->view('dashboard/add_product', $data);

        }

    }

    public function view_specificRecord($id)

    {
        $this->load->model('product');

        $q = $this->product->getRecord($id, 'id');
        $r = (array)$q;


        if ($r) {


            $this->load->view('dashboard/view_specificrecord', $r);


        } else {
            $data['novalue'] = true;
            $this->load->view('dashboard/view_specificrecord', $data);

        }


    }

    public function delete_specificUser($id)

    {
        $this->load->model('user');
        $user_id = $id;
        $recordDeleted = $this->user->deleteRecord('id', $user_id);

        if ($recordDeleted) {
            redirect('dashboard/delete_user');
            /*$q = $this->db->get('products');
            $r = $q->result_array();
            $data = array('r' => $r);
            $this->load->view('dashboard/delete_product', $data);*/

        } else {
            $data['novalue'] = true;
            $this->load->view('dashboard/delete_user', $data);

        }
    }

    public function delete_specificRecord($id)

    {
        $this->load->model('product');
        $user_id = $id;
        $recordDeleted = $this->product->deleteRecord('id', $user_id);

        if ($recordDeleted) {
            redirect('dashboard/delete_product');
            /*$q = $this->db->get('products');
            $r = $q->result_array();
            $data = array('r' => $r);
            $this->load->view('dashboard/delete_product', $data);*/

        } else {
            $data['novalue'] = true;
            $this->load->view('dashboard/delete_product', $data);

        }
    }

    public function delete_product()
    {

        $this->load->model('product');


        $q = $this->db->get('products');
        $r = $q->result_array();



        if ( is_array($r) && !empty($r)) {

            $data = array('r' => $r);
            $this->load->view('dashboard/delete_product', $data);


        } else {
            $data['novalue'] = true;
            $this->load->view('dashboard/delete_product', $data);

        }

    }

    public function update_product()
    {
        $this->load->model('product');
        $q = $this->db->get('products');
        $r = $q->result_array();
        if ($r) {
            $data = array('r' => $r);
            $this->load->view('dashboard/update_product', $data);
        } else {
            $data['novalue'] = true;
            $this->load->view('dashboard/update_product', $data);
        }
    }

    public function view_update_specificRecord($id)
    {
        $this->load->model('product');
        $q = $this->product->getRecord($id, 'id');
        $r = (array)$q;
        if ($r) {
            $this->load->view('dashboard/update_specificRecord', $r);
        } else {
            $data['novalue'] = true;
            $this->load->view('dashboard/update_specificRecord', $data);
        }
    }

    public function view_update_specificRecord2($id)
    {
        $this->load->model('user');
        $q = $this->user->getRecord($id, 'id');
        $r = (array)$q;
        if ($r) {
            $this->load->view('dashboard/update_specificRecord2', $r);
        } else {
            $data['novalue'] = true;
            $this->load->view('dashboard/update_specificRecord2', $data);
        }
    }

    public function update_specificProduct()
    {
        //

        $this->load->model('product');

        $colName = 'id';
        $where = $this->input->post('p_id', true);


        $titleupdate = $this->input->post('p_title', true);
        $purchaseprice = $this->input->post('purchaseprice', true);
        $saleprice = $this->input->post('saleprice', true);
        $pdescription = $this->input->post('p_description', true);
        $pdiscount = $this->input->post('pdiscount', true);
        $p_sku = $this->input->post('p_sku', true);
        /*$p_status = $this->input->post('p_status', true);*/
        $p_tax = $this->input->post('p_tax', true);
        date_default_timezone_set('ASIA/KARACHI');

        $updateData = array(
            'title' => $titleupdate,
            'purchaseprice' => $purchaseprice,
            'saleprice' => $saleprice,
            'description' => $pdescription,
            'discountpercent' => $pdiscount,
            'sku' => $p_sku,
            /*'status'    =>  $titleupdate,*/
            'tax' => $p_tax,
            'updatedAt' => $this->product->updatedAt = date('Y-m-d H:i:s'),


        );
        $result = $this->product->updateRecord($colName, $updateData, $where);
        if ($result) {
            redirect('dashboard/update_product');
        } else {
            echo 'password not updated';
        }
    }

    public function view_product()
    {
        $this->load->model('product');
        $q = $this->db->get('products');
        $r = $q->result_array();

        if ($r) {
            $data = array('r' => $r);
            $this->load->view('dashboard/view_product', $data);

        } else {
            $data['novalue'] = true;
            $this->load->view('dashboard/view_product', $data);
        }
    }
    // by ali shan
    public function ajax_is_slug_available($slug = '')
    {
        $this->load->model('product');

        $rec = $this->product->getRecord($slug, 'slug');

        //var_export($rec);
        //echo $this->db->last_query() ;
        if ($rec && !empty ($rec)) {
            echo false;
            return;
        }


        echo true;
    }

    // by ali shan
    public function is_valid_amount($str)
    {
        $exp = explode('.', $str);
        if (is_array($exp) && isset($exp[0]) && strlen($exp[0]) > 9) {
            $this->form_validation->set_message('is_valid_amount', 'Please enter valid and acceptable amount in %s');
            return FALSE;
        }

        return true;
    }

    // by ali shan
    public function is_valid_discount($str)
    {
        $exp = explode('.', $str);
        if (is_array($exp) && isset($exp[0]) && strlen($exp[0]) > 2) {
            $this->form_validation->set_message('is_valid_discount', 'Please enter valid and acceptable discount from 1 to 99 in %s');
            return FALSE;
        }

        return true;
    }


    private function debug($val, $die = false)
    {
        echo '<tt><pre>' . var_export($val, True) . '</pre></tt>';

        if ($die) exit('<hr />Exit from Debug in Register.php Controller.');
    }

    public function update_specificSetting()
    {
        //

        $this->load->model('setting');
        $this->debug($_POST);



        $colName = 'key';
        $where = $_POST['p_key'];
        $value = $_POST['s_value'];



        $updateData = array('value' => $value);


        $result = $this->setting->updateRecord($colName, $updateData, $where);
        if ($result) {
            redirect('dashboard/setting');
        } else {
            echo 'password not updated';

        }
    }

    public function view_update_specificSetting($key)
    {
        $this->load->model('setting');
        $q = $this->setting->getRecord($key, 'key');
        $r = (array)$q;
        if ($r) {
            $this->load->view('dashboard/update_specificSetting', $r);
        } else {
            $data['novalue'] = true;
            $this->load->view('dashboard/update_specificSetting', $data);
        }
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

    public function add_user()
    {

        $data['user_added'] = false;
        $data['user_failed'] = false;
        $data['not_avail'] = false;
        $data['user_added'] = false;

        $this->load->library('form_validation');

        if (filter_input_array(INPUT_POST)) {


            $rules = array(

                array(
                    'field' => 'first_name',
                    'label' => 'First Name',
                    'rules' => 'required|min_length[3]|max_length[255]'
                ),
                array(
                    'field' => 'last_name',
                    'label' => 'Last Name',
                    'rules' => 'required|min_length[3]|max_length[255]'
                ),
                array(
                    'field' => 'user_name',
                    'label' => 'Username',
                    'rules' => 'required|min_length[3]|max_length[255]'
                ),
                array(
                    'field' => 'e_mail',
                    'label' => 'Email',
                    'rules' => 'required|valid_email'
                ),
                array(
                    'field' => 'user_pass',
                    'label' => 'Password',
                    'rules' => 'required|min_length[7]|max_length[255]'
                ),
                array(
                    'field' => 'c_pass',
                    'label' => 'Confirm Password',
                    'rules' => 'required|min_length[7]|max_length[255]|matches[user_pass]'
                ),
                array(
                    'field' => 'dash_pass',
                    'label' => 'Dashboard Password',
                    'rules' => 'required|min_length[7]|max_length[255]'
                ),

            );

            $this->form_validation->set_rules($rules);

            if (!$this->form_validation->run() == FALSE) {

                //CONTINUE

                $this->load->model('user');

                // step 1: check if username or email are available or not,

                $username = $this->input->post('user_name', True);
                $email = $this->input->post('e_mail', True);

                $isRecordAvailable = $this->checkIsAvailable(array('user_name' => $username, 'e_mail' => $email));

                if (!$isRecordAvailable) {

                    //you can now create record

                    // getting the remaining values

                    $firstname = $this->input->post('first_name', true);
                    $lastname = $this->input->post('last_name', true);
                    $password = $this->input->post('user_pass', true);
                    $usertype = $this->input->post('usertype' , true);

                    $encryptedpass = password_hash($password, PASSWORD_BCRYPT, array('cost => 12'));

                    $this->user->firstname = $firstname;
                    $this->user->lastname = $lastname;
                    $this->user->email = $email;
                    $this->user->username = $username;
                    $this->user->password = $encryptedpass;
                    $this->user->usertype = $usertype;

                    date_default_timezone_set('ASIA/KARACHI');

                    $this->user->createdAt = date('Y-m-d H:i:s');

                    $result = $this->user->insertRecord();

                    if($result){

//                        echo 'user added';

                        $data['user_added'] = true;

                        $this->load->view('dashboard/add_user' , $data);

                    }else{

//                        echo 'not added due to some error';

                        $data['user_failed'] = true;

                        $this->load->view('dashboard/add_user' , $data);

                    }

                }else{

//                    echo 'sorry user not available';

                    $data['not_avail'] = true;

                    $this->load->view('dashboard/add_user' , $data);

                }
            }else{

                $data['validation_errors'] = validation_errors();
                $this->load->view('dashboard/add_user' , $data);

            }
        }else{

            $this->load->view('dashboard/add_user' , $data);

        }
    }

    public function update_user()
    {
        $this->load->model('user');
        $q = $this->db->get('users');
        $r = $q->result_array();
        if ($r) {
            $data = array('r' => $r);
            $this->load->view('dashboard/update_user', $data);
        } else {
            $data['novalue'] = true;
            $this->load->view('dashboard/update_user', $data);
        }
    }

    public function view_update_user($id)
    {
        $this->load->model('user');
        $q = $this->user->getRecord($id, 'id');
        $r = (array)$q;
        if ($r) {
            $this->load->view('dashboard/view_update_user', $r);
        } else {
            $data['novalue'] = true;
            $this->load->view('dashboard/view_update_user', $data);
        }
    }

    public function update_specificUser()
    {
        //

        $this->load->model('user');

        $colName = 'id';
        $where = $this->input->post('u_id' , true);


        $firstupdate = $this->input->post('ufname', true);
        $lastupdate = $this->input->post('ulname', true);
        $typeupdate = $this->input->post('utype', true);
        $passwordupdate = $this->input->post('upass', true);

        $encryptedPass = password_hash($passwordupdate , password_becrypt , array('cost' => 12));

        $updateData = array(
            'ufname' => $firstupdate,
            'ulname' => $lastupdate,
            'utype' => $typeupdate,
            'upass' => $encryptedPass,

        );
        $result = $this->user->updateRecord($colName, $updateData, $where);
        if ($result) {

            redirect('dashboard/update_specificUser');
        } else {
            echo 'User not updated';
        }
    }

    public function delete_user(){

        $this->load->model('user');
        $q = $this->db->get('users');
        $r = $q->result_array();
        if ($r) {
            $data = array('r' => $r);
            $this->load->view('dashboard/delete_user', $data);
        } else {
            $data['novalue'] = true;
            $this->load->view('dashboard/delete_user', $data);
        }


    }

    public function view_user(){


        $this->load->model('user');
        $q = $this->db->get('users');
        $r = $q->result_array();

        if ($r) {
            $data = array('r' => $r);
            $this->load->view('dashboard/view_user', $data);

        } else {
            $data['novalue'] = true;
            $this->load->view('dashboard/view_user', $data);
        }

    }

}