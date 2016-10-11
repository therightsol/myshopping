<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Ordermeta extends CI_Model{
    const  pk = 'id';
    const tablename = "ordermetas";

    public $oid = null;
    public $metakey = "";
    public $metavalue = '';
    public $createdAt = null;
    public $updatedAt = null;
