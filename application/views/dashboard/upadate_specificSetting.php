<?php
include 'inc/dashhead.inc.php';
include 'inc/wrapper.inc.php';
?>

    <div id="page-wrapper">
        <form method="post" action="<?php echo $root; ?>dashboard/update_specificProduct" class="form-horizontal">
            <fieldset>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="name">KEY</label>
                    <div class="col-md-6">
                        <input id="key" name="key" type="text" value=<?php echo $key; ?> class="form-control input-md">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="name">Value</label>
                    <div class="col-md-6">
                        <input id="value" name="value" type="text" value=<?php echo $value; ?> class="form-control input-md">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton"></label>
                    <div class="col-md-4">
                        <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">UPDATE</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
<?php
include 'inc/jsfooterlink.inc.php';
?>
