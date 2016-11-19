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

                $this->load->model('user');

                $email = $this->input->post('loginmail', True);

                $isRecordAvailable = $this->checkIsAvailable( array ( 'email' => $email ) );

                if ($isRecordAvailable) {

                    $password = $this->input->post('loginpass', True);

                    $user = $this->user->getRecord( $email, 'email' );

                    $is_pass_match = password_verify($password, $user->password);

                    if ($is_pass_match){

                        $this->session->set_userdata('username', $user->username);

                        $this->session->set_userdata('email', $user->email);

                        $this->session->set_userdata('usertype', $user->usertype);

                        redirect('dashboard/dashboardlogin');
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
        $this->load->view('dashboard/dashboardlogout');
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


        var_export($r);
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


        $updateData = array(
            'title' => $titleupdate,
            'purchaseprice' => $purchaseprice,
            'saleprice' => $saleprice,
            'description' => $pdescription,
            'discountpercent' => $pdiscount,
            'sku' => $p_sku,
            /*'status'    =>  $titleupdate,*/
            'tax' => $p_tax,


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

}