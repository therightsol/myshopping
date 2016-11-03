<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {

        $data['login'] = 'dashboardlogin.php';
        $this->load->view('dashboard', $data);
    }

    public function login()
    {
        $this->load->view('dashboardlogin');
    }

    public function logout()
    {
        $this->load->view('dashboardlogout');
    }

    public function settings()
    {
        $this->load->view('settings');
    }

    public function add_product()
    {
        $this->load->view('add_product');
    }

    public function view_all_products()
    {
        $this->load->view('view_all_products');
    }
}
