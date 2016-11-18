<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index(){

        $this->load->model('product');

        $products = $this->product->getRecord();

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

        $this->load->model('productmeta');

        $showMeta = $this->productmeta->getRecord();

        $data['showMeta'] = $showMeta;

        $this->load->view('home' , $data);

    }

    private function load_cartData(){
        $pids = $this->session->userdata('cartData');

        $this->load->model('product');
        //$this->product->getRecord($pids, 'id');

        $result = array();
        foreach($pids as $pid){
            $result[] = $this->product->getRecord($pid, 'id');
        }

        return $result;
    }


}