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
                        <h3 class="panel-title">Add New Setting </h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="text-danger">
                                    <?php if(form_error('key')){

                                        echo form_error('key');

                                    }

                                    ?>
                                <div class="form-group">
                                    <input class="form-control" placeholder="KEY" type="text" name="key">
                                </div>
                                    <div class="text-danger">
                                        <?php if(form_error('value')){

                                            echo form_error('value');

                                        }

                                        ?>
                                <div class="form-group">
                                    <input class="form-control" placeholder="VALUE" name="value" type="text" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="" class="btn btn-lg btn-success btn-block">ADD NEW SETTING</a>
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
