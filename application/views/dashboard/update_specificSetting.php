<?php
include 'inc/dashhead.inc.php';
include 'inc/wrapper.inc.php';
?>

<!-- update Specific Record -->
<div id="page-wrapper">

    <form method="post" action="<?php echo $root; ?>dashboard/update_specificSetting" class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <h1 style="text-align: center;">Update Settings </h1>

            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Key</label>
                <div class="col-md-6">
                    <input id="s_value" name="p_key" type="text" value=<?php echo $key; ?> class="form-control input-md">

                </div>

            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Value</label>
                <div class="col-md-6">
                    <input id="s_value" name="s_value" type="text" value=<?php echo $value; ?> class="form-control input-md">
                </div>
                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton"></label>
                    <div class="col-md-4">
                        <button style="margin-top: 10px;margin-left: 20px;" type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">UPDATE</button>
                    </div>
                </div>
        </fieldset>
    </form>
</div>
<?php
include 'inc/jsfooterlink.inc.php';
?>



