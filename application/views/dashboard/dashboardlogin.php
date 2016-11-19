<?php
include 'inc/dashhead.inc.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <fieldset>

                                <div class="text-danger">
                                    <?php
                                    if (form_error('loginmail')){
                                        echo ('loginmail');
                                    }
                                    ?>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="loginmail" type="email" autofocus>
                                </div>
                                <div class="text-danger">
                                    <?php
                                    if (form_error('loginmail')){
                                        echo ('loginmail');
                                    }
                                    ?>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="loginpass" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include 'inc/jsfooterlink.inc.php';
?>