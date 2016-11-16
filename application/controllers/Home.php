<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index(){

        $this->load->model('product');

        $products = $this->product->getRecord();

        var_export($products);

        $data['products'] = $products;

        $this->load->view('home' , $data);

    }

    public function view_product(){

        $this->load->model('product');

        $tableName = $this->product->getRecord('title');

        $result = $this->get_all_Record_withTable($tableName);





        if($result){

            echo 'This is Product view.';

        }else{

            echo 'Sorry there is some error.';

        }

    }

    public function ajax_add_to_cart( $id ){

        $cartData = $this->session->userdata('cartData');
        $cartData[] = $id;
        $this->session->set_userdata('cartData', $cartData);

        echo true;

    }


}