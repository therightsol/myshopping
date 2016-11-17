<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index(){
        $result = $this->load_cartData();
        $data['cartData'] = $result;

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

    private function load_cartData(){
        $pids = $this->session->userdata('cartData');

        $this->load->model('product');
        //$this->product->getRecord($pids, 'id');

        $result = array();
        foreach($pids as $pid){
            $result[] = $this->product->getRecord($pid, 'id')
        }

        return $result;
    }


}