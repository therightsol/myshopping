<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Usertype extends CI_Model{

    const pk = 'id';
    const tablename = 'usertypes';

    public $type  = '';
    public $createdAt  = null;
    public $updatedAt  = null;

}