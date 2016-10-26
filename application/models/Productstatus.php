<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Productstatus extends CI_Model{

    const DB_TablePK = 'id';
    const DB_TableName = 'productstatuses';

    public $status = '';
    public $createdAt = null;
    public $updatedAt = null;

}