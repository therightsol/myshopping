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

        $data['form_errors'] = true;

        $this->load->library('form_validation');

        if (filter_input_array(INPUT_POST)) {


            $rules = array(

                array(
                    'field' => 'id',
                    'label' => 'Product ID',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'value',
                    'label' => ' Value',
                    'rules' => 'required'
                ),
            );

            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run() == true) {

                $this->load - model('Setting');

                $productName = $this->input->post('id', true);
                $purchasePrice = $this->input->post('value', true);

                date_default_timezone_get('ASIA/KARACHI');

                $this->product->createdAt = date('Y-m-d H:i:s');

                $result = $this->product->insertRecord();
                var_export($result);

                if ($result) {

                    echo 'Website Settings are changed';

                } else {

                    echo 'Sorry ';

                }
            } else {

                echo 'THere are some errors';
            }

        } else {

            echo ' there is some error in inputs';

            $data['form_errors'] = true;

            $this->load->view('dashboard/setting', $data);

        }

    }

    public function add_product()
    {

        $data['form_errors'] = false;

        $this->load->library('form_validation');

        if (filter_input_array(INPUT_POST)) {


            $rules = array(

                array(
                    'field' => 'pname',
                    'label' => 'Product Name',
                    'rules' => 'required|min_length[7]|max_length[255]'
                ),
                array(
                    'field' => 'purchase',
                    'label' => 'Purchase Price',
                    'rules' => 'required|min_length[2]|max_length[9]'
                ),
                array(
                    'field' => 'sale',
                    'label' => 'Sale Price',
                    'rules' => 'required|min_length[2]|max_length[9]'
                ),
                array(
                    'field' => 'discount',
                    'label' => 'Discounted Price',
                    'rules' => 'required|min_length[2]|max_length[3]'
                ),
                array(
                    'field' => 'tax',
                    'label' => 'Tax',
                    'rules' => 'required|min_length[2]|max_length[5]'
                ),
                array(
                    'field' => 'textarea',
                    'label' => 'Text Area',
                    'rules' => 'required||min_length[100]'
                ),

            );

            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run() == true) {

                $this->load - model('product');

                $productName = $this->input->post('pname', true);
                $purchasePrice = $this->input->post('purchase', true);
                $salePrice = $this->input->post('sale', true);
                $discountedPrice = $this->input->post('discount', true);
                $tax = $this->input->post('tax', true);
                $textarea = $this->input->post('textarea', true);

                date_default_timezone_get('ASIA/KARACHI');

                $this->product->createdAt = date('Y-m-d H:i:s');

                $result = $this->product->insertRecord();
                var_export($result);

                if ($result) {

                    echo 'Product Added Successfully';

                } else {

                    echo 'Sorry Product not added';

                }

            } else {

                echo 'THere are some errors';

            }


        } else {

            echo ' there is some error in inputs';

            $data['form_errors'] = true;

            $this->load->view('dashboard/add_product', $data);

        }

    }

    public function view_all_products()
    {
        $this->load->view('view_all_products');
    }
}