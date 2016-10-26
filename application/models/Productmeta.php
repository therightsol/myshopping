<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Productmeta extends CI_Model{

    const DB_TablePK = 'id';
    const DB_TableName = 'productmetas';

    public $pid = '';
    public $metakey = '';
    public $metavalue = '';
    public $createdAt = null;
    public $updatedAt = null;

}