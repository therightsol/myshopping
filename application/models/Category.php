<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Category extends CI_Model{

    const DB_TablePK = 'id';
    const DB_TableName = 'categories';

    public $category = '';
    public $image = '';
    public $createdAt = null;
    public $updatedAt = null;

}