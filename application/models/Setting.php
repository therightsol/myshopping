<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Setting extends CI_Model{
    const  pk = 'id';
    const tablename = "settings";

    public $key = "";
    public $value = '';
    public $createdAt = null;
    public $updatedAt = null;


}
