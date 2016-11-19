<?php

include 'inc/head.inc.php';
include 'inc/anonymous_topbar.inc';
include 'inc/header.inc.php';
include 'inc/anonymous_menu.inc';
?>

<section id="content">
    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="<?php echo $root; ?>home">Home</a></li>
                <li class="active">Login</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="content-title"><h1 class="title">Login or Create An Account</h1>

                    <div class="md-margin"></div>
                </header>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12"><h2>New Customer</h2>

                        <p>By creating an account with our store, you will be able to move through the checkout
                            process faster, store multiple shipping addresses, view and track your orders in your
                            account and more.</p>

                        <div class="md-margin"></div>
                        <a href="<?php echo $root; ?>register" class="btn btn-custom-2">Create An Account</a>

                        <div class="lg-margin"></div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12"><h2>Registered Customers</h2>

                        <p>If you have an account with us, please log in.</p>
                        <?php if ($msg): ?>
                            <h1 style="color:blue;"> <?php echo $_POST['loginmail'] ; ?> <br/><br/>! You are Signed in Successfully. </h1>
                        <?php endif; ?>


                        <?php if ($error_email_login): ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="alert alert-danger">Sorry ! Email Provided is not correct.<br />Please Try Again.</div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($error_password_login): ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="alert alert-danger">Sorry ! Password Provided is not correct.<br />Please Try Again.</div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="xs-margin"></div>

                        <?php if (! $msg): ?>
                        <form id="login-form" method="post" action="<?php echo $root; ?>login">

                            <div class="text-danger" >

                                <?php

                                    if(form_error('loginmail')){

                                        echo form_error('loginmail');

                                    }

                                ?>

                            </div>

                            <div class="input-group"><span class="input-group-addon"><span
                                        class="input-icon input-icon-email"></span><span
                                        class="input-text">Email&#42;</span></span> <input type="text" required
                                                                                           class="form-control input-lg"
                                                                                           placeholder="Your Email" name="loginmail">
                            </div>

                            <div class="text-danger">

                                <?php

                                if(form_error('loginpass')){

                                    echo form_error('loginpass');

                                }

                                ?>

                            </div>

                            <div class="input-group xs-margin"><span class="input-group-addon"><span
                                        class="input-icon input-icon-password"></span><span class="input-text">Password&#42;</span></span>
                                <input type="password" required class="form-control input-lg"
                                       placeholder="Your Password" name="loginpass"></div>
                                <span class="help-block text-right"><a href="<?php echo $root; ?>reset">Forgot your
                                        password?</a></span>
                            <button type="submit" class="btn btn-custom-2">LOGIN</button>
                        </form>
                        <?php endif; ?>

                        <div class="sm-margin"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

include 'inc/footer.inc.php';
include 'inc/footerfiles.inc.php';

?>
