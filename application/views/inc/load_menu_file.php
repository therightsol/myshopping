<?php
/**
 * Created by PhpStorm.
 * User: Ali Shan
 * Date: 01-Nov-16
 * Time: 7:57 PM
 */

$is_user_loggedIn = $this->session->userdata('username');

if ($is_user_loggedIn && !empty($is_user_loggedIn)){
    // check user type
    $user_type = $this->session->userdata('usertype');
    if ($user_type && !empty($user_type)){
        if ($user_type == 1){
            // user is admin

            include 'admin_topbar.inc';
            include 'header.inc.php';
            include 'admin_menu.inc';

        }else if ($user_type == 2){
            include 'member_topbar.inc';
            include 'header.inc.php';
            include 'member_menu.inc';

        }
    }
}else {
    include 'anonymous_topbar.inc';
    include 'header.inc.php';
    include 'anonymous_menu.inc';

}