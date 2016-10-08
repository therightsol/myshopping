<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Model{
    const  pk = 'id';
    const tablename = "users";

    public $firstname = '';
    public $lastname = "";
    public $username = '';
    public $email = '';
    public $password = '';
    public $dashboardpassword = '';
    public $isEmailVerified = 0;
    public $usertype = null;
    public $createdAt = null;
    public $updatedAt = null;


}