<?php
include 'inc/dashhead.inc.php';
include 'inc/wrapper.inc.php';
?>
<div id="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-3">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Settings</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <fieldset>
                                <div class="text-danger">
                                <?php if(form_error('key')){

                                    echo form_error('key');
                                }
                                ?>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="KEY" name="key" type="text" autofocus>
                                </div>
                                <div class="text-danger">
                                    <?php if(form_error('value')){

                                        echo form_error('value');
                                    }
                                    ?>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Value" name="value" type="text" value="">
                                </div>
                                <input type="SUBMIT" class="btn btn-lg btn-success btn-block" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php
include 'inc/jsfooterlink.inc.php';
?>
