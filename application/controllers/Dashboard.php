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
        $this->load->view('dashboard/dashboardlogin');
    }

    public function dashboardlogout()
    {
        $this->load->view('dashboard/dashboardlogout');
    }

    public function setting()
    {
        $data['success'] = false;
        $data['form_errors'] = false;

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

                $productkey = $this->input->post('key', true);
                $value = $this->input->post('value', true);

                $this->setting->key = $productkey;
                $this->setting->value = $value;

                date_default_timezone_set('ASIA/KARACHI');

                $this->setting->createdAt = date('Y-m-d H:i:s');

                $result = $this->setting->insertRecord();
                 //var_export($result);
                if ($result) {
                    //echo 'settings saved successfully';
                    $data['success'] = true;
                    $this->load->view('dashboard/setting' , $data);
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
                    'rules' => 'required|min_length[1]|numeric|callback_is_valid_amount'
                ),
                array(
                    'field' => 'sale',
                    'label' => 'Sale Price',
                    'rules' => 'required|min_length[1]|numeric|callback_is_valid_amount'
                ),
                array(
                    'field' => 'discount',
                    'label' => 'Discounted Price',
                    'rules' => 'required|min_length[1]|numeric|callback_is_valid_discount'
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

            if (! $this->form_validation->run() == False) {

                $this->load->model('product');

                $productName = $this->input->post('pname', true);
                $purchasePrice = $this->input->post('purchase', true);
                $salePrice = $this->input->post('sale', true);
                $discountedPrice = $this->input->post('discount', true);
                $tax = $this->input->post('tax', true);
                $textarea = $this->input->post('textarea', true);

                $this->product->title = $productName;
                $this->product->purchaseprice = $purchasePrice;
                $this->product->saleprice = $salePrice;
                $this->product->discountpercent = $discountedPrice;
                $this->product->tax = $tax;
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
                    $this->load->view('dashboard/add_product' , $data);

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

    public function delete_product()
    {
        $this->load->view('dashboard/delete_product');
    }

    public function update_product()
    {
        $this->load->view('dashboard/update_product');
    }

    public function view_product()
    {

        $this->load->model( 'product' );

       // $title = $this->input->post('ptitle' , true);

        $q = $this->db->get('products');
        $data = $q->result_array();

        if($data){

            echo 'This is value';
            $r['id'] = $data[0]['id'];
            $r['title'] = $data[0]['title'];
            $r['description'] = $data[0]['description'];

            $this->debug($r);
            exit;
            $this->load->view('dashboard/view_product', $r);


        }else{

            echo 'no value';

        }

        $data['id'] = $data[0]['id'];
        $data['title'] = $data[0]['title'];
        $data['description'] = $data[0]['description'];
       $this->load->view('dashboard/view_product', $data);
    }


    // by ali shan
    public function ajax_is_slug_available( $slug = '' ){
        $this->load->model('product');

        $rec = $this->product->getRecord($slug, 'slug');

        //var_export($rec);
        //echo $this->db->last_query() ;
        if ( $rec && !empty ($rec) ){
            echo false;
            return;
        }


        echo true;
    }

    // by ali shan
    public function is_valid_amount($str)
    {
        $exp = explode('.', $str);
        if ( is_array($exp) && isset($exp[0]) && strlen( $exp[0] ) > 9){
            $this->form_validation->set_message('is_valid_amount', 'Please enter valid and acceptable amount in %s');
            return FALSE;
        }

        return true;
    }


    // by ali shan
    public function is_valid_discount($str)
    {
        $exp = explode('.', $str);
        if ( is_array($exp) && isset($exp[0]) && strlen( $exp[0] ) > 2){
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

}