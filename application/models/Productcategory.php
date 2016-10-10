<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Productcategory extends CI_Model{

    const pk = 'id';
    const tablename = 'productcategories';

    public $pid = '';
    public $cid = '';
    public $createdAt = null;
    public $updatedAt = null;

}