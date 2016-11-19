<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
    public function index(){





       if (isset($_SESSION['cartData'])) {
            $cartdata = $this->load_cartData();
            $cartdata = json_decode(json_encode($cartdata), True);
            $data['r'] = $cartdata;

       }


        $data['empty'] = true;

        $this->load->view('cart', $data);
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