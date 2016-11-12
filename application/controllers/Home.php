<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index(){

        $this->load->view('home');
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
}