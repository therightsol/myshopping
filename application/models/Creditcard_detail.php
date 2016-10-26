<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Creditcard_detail extends CI_Model{
    const  DB_TablePK = 'id';
    const DB_TableName = "creditcard_details";

    public $cc_number = '';
    public $bankname = "";
    public $bankaccountnumber = '';
    public $cvv = '';
    public $cc_expiry = null;
    public $name_on_cc = '';
    public $pin = '';
    public $createdAt = null;
    public $updatedAt = null;


}