<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Setting extends My_Model{
    const  DB_TablePK = 'id';
    const DB_TableName = "settings";

    public $key = "";
    public $value = '';
    public $createdAt = null;
    public $updatedAt = null;


}
