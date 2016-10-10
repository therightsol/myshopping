<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Order extends CI_Model{

    const pk = 'id';
    const tablename = 'orders';

    public $givenBy_uid = '';
    public $invoiceNumber = '';
    public $invoicepath = '';
    public $cc_details = '';
    public $status = '';
    public $totalAmount = '';
    public $salesTax = '';
    public $finalAmount = '';
    public $createdAt = null;
    public $updatedAt = null;

}