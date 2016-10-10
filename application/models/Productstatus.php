<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Productstatus extends CI_Model{

    const pk = 'id';
    const tablename = 'productstatuses';

    public $status = '';
    public $createdAt = null;
    public $updatedAt = null;

}