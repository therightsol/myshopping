<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Orderstatus extends CI_Model{

    const pk = 'id';
    const tablename = 'orderstatuses';

    public $status = '';
    public $createdAt = null;
    public $updatedAt = null;

}