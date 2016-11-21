<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index(){


        $this->load->model('product');

        $products = $this->product->getRecord();

        $data['products'] = $products;
        if (isset($_SESSION['cartData'])) {
            $cartdata = $this->load_cartData();
            $cartdata = json_decode(json_encode($cartdata), True);
            $data['r'] = $cartdata;
        }

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

    public function ajax_add_to_cart( $id ){

        if ( $id ){
            $cartData = $this->session->userdata('cartData');
            $cartData[] = $id;
            $this->session->set_userdata('cartData', $cartData);

            $value = $this->get_Array_for_cart_item( $id );

            if ( is_array( $value ) ){
                $value['success'] = true;

                echo json_encode( $value );
                return;
            }
        }

        echo json_encode( array ( 'success' => false ) );
    }

    private function get_Array_for_cart_item( $id = null ){

        if ( $id ) {

            $this->load->model('product');
            $result = $this->product->getRecord($id, 'id');

            /*
                stdClass::__set_state(array(
                   'id' => '5',
                   'title' => 'abc',
                   'description' => 'sdfsfsfsf',
                   'purchaseprice' => '259.35200',
                   'saleprice' => '320.25000',
                   'discountpercent' => '5.00',
                   'images' => '',
                   'slug' => 'aaa',
                   'sku' => '',
                   'status' => '1',
                   'tax' => '10.00',
                   'createdAt' => '2016-11-06 21:04:38',
                   'updatedAt' => NULL,
                ))
            */

            if (!empty($result) &&
                array_key_exists('images', $result) &&
                array_key_exists('title', $result) &&
                array_key_exists('saleprice', $result) &&
                array_key_exists('discountpercent', $result)
            ) {
                return array(
                    'images' => $result->images,
                    'title' => $result->title,
                    'saleprice' => $result->saleprice,
                    'discountpercent' => $result->discountpercent,
                );
            }
        }

       return false;
    }

    public function clear_cart(){
        // clearing session
        $this->session->unset_userdata('cartData');

        // redirecting
        $request_url = $_SERVER['REQUEST_URI'];
        $request_url = explode('/', $request_url, -1);

        $url = '';
        foreach ($request_url as $path){
            $url .= $path . '/';
        }

        echo 'Returning to back within 5 seconds.';
        header('refresh:1;url=' . $url);
    }

}