<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Usersmeta extends CI_Model{

    const pk = 'id';
    const tablename = 'usersmetas';

    public $uid = '';
    public $metakey = '';
    public $metavalue = '';
    public $createdAt = null;
    public $updatedAt = null;

}