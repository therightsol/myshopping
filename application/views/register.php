<?php

include 'inc/head.inc.php';
include 'inc/topbar.inc.php';
include 'inc/header.inc.php';
include 'inc/menu.inc.php';
include 'inc/panel.inc.php';

?>

    <section id="content">
    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="<?php echo $root; ?>home">Home</a></li>
                <li class="active">Register Account</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="content-title"><h1 class="title">Register Account</h1>

                    <p class="title-desc">If you already have an account, please login at <a
                            href="<?php echo $root; ?>login">login page</a>.</p></header>
                <div class="xs-margin">

                </div>
<<<<<<< HEAD
                <form method="post" action="<?php echo $root; ?>register" id="register-form">

                    <?php if ($userexists): ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-danger">Sorry ! user already exist.<br />Please choose another username.</div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($success): ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-info">Congratulations ! user added Successfully .</div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($failure): ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-danger">Congratulations ! user added Successfully .</div>
                            </div>
                        </div>
                    <?php endif; ?>
=======
                <form novalidate  method="post" action="<?php echo $root; ?>register" id="register-form">
>>>>>>> origin/master
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <fieldset><h2 class="sub-title">YOUR PERSONAL DETAILS</h2>

                                <div class="text-danger">
                                    <?php
                                         if(form_error ('fname')){
                                             echo form_error ('fname');
                                         }
                                    ?>
                                </div>

                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-user"></span><span class="input-text">First Name&#42;</span></span>
                                    <input type="text" required class="form-control input-lg"
                                           placeholder="Your First Name" name="fname"></div>



                                <div class="text-danger">
                                    <?php
                                    if(form_error ('lname')){
                                        echo form_error ('lname');
                                    }
                                    ?>
                                </div>
                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-user"></span><span class="input-text">Last Name&#42;</span></span>
                                    <input type="text" required class="form-control input-lg"
                                           placeholder="Your Last Name" name="lname"></div>

                                <div class="text-danger">
                                    <?php
                                    if (form_error('email')){
                                        echo form_error('email');
                                    }
                                    ?>
                                </div>

                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-email"></span><span class="input-text">Email&#42;</span></span>
                                    <input type="text" required class="form-control input-lg"
                                           placeholder="Your Email" name="email">
                                </div>


                                <div class="text-danger">
                                    <?php
                                    if (form_error('username')){
                                        echo form_error('username');
                                    }
                                    ?>
                                </div>

                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-user"></span><span class="input-text">Username&#42;</span></span>
                                    <input type="text" required class="form-control input-lg"
                                           placeholder="Your Username" name="username">
                                </div>
                                <div class="text-danger">
                                    <?php
                                    if(form_error ('phone')){
                                        echo form_error ('phone');
                                    }
                                    ?>
                                </div>
                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-phone"></span><span class="input-text">Telephone&#42;</span></span>
                                    <input type="text" required class="form-control input-lg"
                                           placeholder="Your Telephone" name="phone"></div>
                                <div class="text-danger">
                                    <?php
                                    if(form_error ('fax')){
                                        echo form_error ('fax');
                                    }
                                    ?>
                                </div>
                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-fax"></span><span class="input-text">Fax</span></span>
                                    <input type="text" class="form-control input-lg" placeholder="Your Fax" name="fax"></div>
                            </fieldset>
                            <fieldset><h2 class="sub-title">YOUR PASSWORD</h2>
                                <div class="text-danger">
                                    <?php
                                    if(form_error ('pass1')){
                                        echo form_error ('pass1');
                                    }
                                    ?>
                                </div>
                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-password"></span><span class="input-text">Password&#42;</span></span>
                                    <input type="password" required class="form-control input-lg"
                                           placeholder="Your Password" name="pass1"></div>
                                <div class="text-danger">
                                    <?php
                                    if(form_error ('pass2')){
                                        echo form_error ('pass2');
                                    }
                                    ?>
                                </div>
                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-password"></span><span class="input-text">Password&#42;</span></span>
                                    <input type="password" required class="form-control input-lg"
                                           placeholder="Your Password" name="pass2"></div>
                            </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <fieldset><h2 class="sub-title">YOUR ADDRESS</h2>

                                <div class="text-danger">
                                    <?php
                                    if(form_error ('company')){
                                        echo form_error ('company');
                                    }
                                    ?>
                                </div>

                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-company"></span><span class="input-text">Company&#42;</span></span>
                                    <input type="text" required class="form-control input-lg"
                                           placeholder="Your Company" name="company"></div>
                                <div class="text-danger">
                                    <?php
                                    if(form_error ('address1')){
                                        echo form_error ('address1');
                                    }
                                    ?>
                                </div>

                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-address"></span><span class="input-text">Address 1&#42;</span></span>
                                    <input type="text" class="form-control input-lg" placeholder="Your Address" name="address1">
                                </div>
                                <div class="text-danger">
                                    <?php
                                    if(form_error ('address2')){
                                        echo form_error ('address2');
                                    }
                                    ?>
                                </div>

                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-address"></span><span class="input-text">Address 2&#42;</span></span>
                                    <input type="text" required class="form-control input-lg"
                                           placeholder="Your Address" name="address2"></div>

                                <div class="text-danger">
                                    <?php
                                    if(form_error ('city')){
                                        echo form_error ('city');
                                    }
                                    ?>
                                </div>

                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-city"></span><span
                                            class="input-text">City&#42;</span></span> <input type="text" required
                                                                                              class="form-control input-lg"
                                                                                              placeholder="Your City" name="city">
                                </div>

                                <div class="text-danger">
                                    <?php
                                    if(form_error ('pcode')){
                                        echo form_error ('pcode');
                                    }
                                    ?>
                                </div>

                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-postcode"></span><span class="input-text">Post Code&#42;</span></span>
                                    <input type="text" required class="form-control input-lg"
                                           placeholder="Your Post Code" name="pcode"></div>
                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-country"></span><span class="input-text">Country*</span></span>

                                    <div class="large-selectbox form-control clearfix"><select id="country" name="country"
                                                                                  class="selectbox">
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="France">France</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Spain">Spain</option>
                                        </select></div>
                                </div>
                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-region"></span><span class="input-text">Region / State&#42;</span></span>

                                    <div class="large-selectbox form-control clearfix"><select id="state" name="state"
                                                                                  class="selectbox">
                                            <option value="California">California</option>
                                            <option value="Texas">Texas</option>
                                            <option value="NewYork">NewYork</option>
                                            <option value="Narnia">Narnia</option>
                                            <option value="Jumanji">Jumanji</option>
                                        </select></div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <fieldset class="half-margin"><h2 class="sub-title">NEWSLETTER</h2>

                                <div class="input-desc-box"><span class="separator icon-box">&plus;</span>I wish to
                                    subscribe to the Venedor newsletter.
                                </div>
                                <div class="text-danger">
                                    <?php
                                    if(form_error ('checkbox')){
                                        echo form_error ('checkbox');
                                    }
                                    ?>
                                </div>
                                <div class="input-group custom-checkbox"><input type="checkbox" name="checkbox"> <span
                                        class="checbox-container"><i class="fa fa-check"></i></span> I have reed and
                                    agree to the <a href="<?php echo $root; ?>privacy">Privacy Policy</a>.
                                </div>
                            </fieldset>
                            <input type="submit" value="CREATE MY ACCCOUNT" class="btn btn-custom-2 md-margin">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php

include 'inc/footer.inc.php';
include 'inc/footerfiles.inc.php';

?>