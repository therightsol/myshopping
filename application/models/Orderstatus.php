<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Orderstatus extends CI_Model{

    const DB_TablePK = 'id';
    const DB_TableName = 'orderstatuses';

    public $status = '';
    public $createdAt = null;
    public $updatedAt = null;

}