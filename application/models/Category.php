<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Category extends CI_Model{

    const pk = 'id';
    const tablename = 'categories';

    public $category = '';
    public $image = '';
    public $createdAt = null;
    public $updatedAt = null;

}