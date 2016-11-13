<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index(){
        $this->load->model('product');
        $products = $this->product->getRecord();

        $data['products'] = $products;

        $this->load->view('home', $data);
    }

    public function view_products(){

        $this->load->model('product');

        $tableName = $this->product->getrecord('title');

        $result = get_all_Record_withTable($tableName);

        if($result){

            echo 'This is Product view';

        }else{

            echo 'sorry there is some errors';

        }

    }

    public function ajax_add_to_cart( $id ){

        $cartData = $this->session->userdata('cartData');
        $cartData[] = $id;
        $this->session->set_userdata('cartData', $cartData);

        echo true;

    }
}