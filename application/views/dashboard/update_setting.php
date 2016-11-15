<?php
include 'inc/dashhead.inc.php';
include 'inc/wrapper.inc.php';
?>

<div id="page-wrapper">
    <div class="">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">UPDATE SETTING </h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="KEY" type="text" name="key" <?php echo $key ?> >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="VALUE" name="value" type="text" value="">
                                </div>

                                <!-- Change this to a button or input when using this as a form -->
                                <a href="" class="btn btn-lg btn-success btn-block">UPDATE SETTING</a>
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
