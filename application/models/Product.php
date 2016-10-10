<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Product extends CI_Model{

    const pk = 'id';
    const tablename = 'products';

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