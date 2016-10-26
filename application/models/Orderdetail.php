<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Orderdetail extends CI_Model{

    const DB_TablePK = 'id';
    const DB_TableName = 'orderdetails';

    public $oid = '';
    public $pid = '';
    public $quantity = '';
    public $bill = '';
    public $discountpercent = '';
    public $payableamount = '';
    public $createdAt = null;
    public $updatedAt = null;

}