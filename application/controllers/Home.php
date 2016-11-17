<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index(){

        $this->load->model('product');

        $q = $this->db->get('products');
        $r = $q->result_array();


        /*$result = $this->product->getRecord();

        var_export($result);
        exit;*/

        if ($r) {
            $data = array('r' => $r);
                  var_export($data);
            $this->load->view('home', $data);

        } else {
            $data['novalue'] = true;
            $this->load->view('home', $data);
        }








    }

    public function view_product(){

        $this->load->model('product');

        $tableName = $this->product->getRecord('title');

        $result = $this->get_all_Record_withTable($tableName);

        var_export($result);



        if($result){

            echo 'This is Product view.';

        }else{

            echo 'Sorry there is some error.';

        }

    }


}