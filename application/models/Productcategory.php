<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Productcategory extends CI_Model{

    const DB_TablePK = 'id';
    const DB_TableName = 'productcategories';

    public $pid = '';
    public $cid = '';
    public $createdAt = null;
    public $updatedAt = null;

}