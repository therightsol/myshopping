<?php include 'inc/head.inc.php'; ?>
<?php include 'inc/topbar.inc.php'; ?>
<?php include 'inc/header.inc.php'; ?>
<?php include 'inc/menu.inc.php'; ?>
<?php include 'inc/panel.inc.php'?>



<section id="content">
    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="<?php echo $root; ?>home">Home</a></li>
                <li class="active">Reset Password</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="content-title"><h1 class="title">Reset Password</h1>

                    <div class="md-margin"></div>
                </header>
                <div class="row">

                    <div class="col-md-6 col-sm-6 col-xs-12"><h2>Reset your password</h2>

                        <p>Enter your email, username or phone to get a new password.</p>

                        <div class="xs-margin"></div>
                        <form id="reset-form" method="get" action="reset.html#">
                            <div class="input-group"><span class="input-group-addon"><span
                                        class="input-icon input-icon-user"></span><span
                                        class="input-text">Details&#42;</span></span> <input type="text" required
                                                                                             class="form-control input-lg"
                                                                                             placeholder="Email, Username or Phone" name="resetmail">
                            </div>

                            <span class="help-block text-right">Remembered your password? <a href="<?php echo $root; ?>login">Go ahead and login.</a></span>
                            <button class="btn btn-custom-2">Reset My Password</button>
                        </form>
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