<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Usertype extends CI_Model{

    const DB_TablePK = 'id';
    const DB_TableName = 'usertypes';

    public $type  = '';
    public $createdAt  = null;
    public $updatedAt  = null;

}