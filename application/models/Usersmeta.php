<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Usersmeta extends MY_Model{

    const DB_TablePK = 'id';
    const DB_TableName = 'usersmetas';

    public $uid = '';
    public $metakey = '';
    public $metavalue = '';
    public $createdAt = null;
    public $updatedAt = null;

}