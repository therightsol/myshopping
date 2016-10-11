<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Country extends CI_Model{
    const  pk = 'id';
    const tablename = "countries";

    public $countryname = '';
    public $countryshortname = "";
    public $currencyFullName = '';
    public $currencyshort = '';
    public $countryflaqimage = '';
    public $currencysymbol = '';
    public $isActive = null;
    public $createdAt = null;
    public $updatedAt = null;
