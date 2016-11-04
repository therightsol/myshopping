<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Product extends MY_Model{

    const DB_TablePK = 'id';
    const DB_TableName = 'products';

    public $title = '';
    public $description = '';
    public $purchaseprice = '';
    public $saleprice = '';
    public $discountpercent = '';
    public $images = '';
    public $slug = '';
    public $sku = '';
    public $status = '';
    public $tax = '';
    public $createdAt = null;
    public $updatedAt = null;

}