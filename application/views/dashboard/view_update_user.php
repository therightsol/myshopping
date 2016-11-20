<?php
include 'inc/dashhead.inc.php';
include 'inc/wrapper.inc.php';
?>

<!-- View Specific Record -->
<div id="page-wrapper">

    <form method="post" action="<?php echo $root; ?>dashboard/update_specificUser" class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <h1 style="text-align: center;">Update Record of <?php echo '"' . $username . '"'; ?></h1>

            <div class="form-group">
                <label class="col-md-4 control-label" for="u_id">ID:</label>
                <div class="col-md-6">
                    <input id="u_id" name="u_id" type="text" value="<?php echo $id; ?>" readonly class="form-control input-md">

                </div>
                <span id="slug-message"></span>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="ufname">First Name:</label>
                <div class="col-md-6">
                    <input id="ufname" name="ufname" type="text" value="<?php echo $firstname; ?>" class="form-control input-md">

                </div>
                <span id="slug-message"></span>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="ulname">Last Name:</label>
                <div class="col-md-6">
                    <input id="ulname" name="ulname" type="text" value="<?php echo $lastname; ?>" class="form-control input-md">

                </div>
            </div>




            <div class="form-group">
                <label class="col-md-4 control-label" for="utype">User Type:</label>
                <div class="col-md-6">
                    <input id="utype" name="utype" type="text" value="<?php echo $usertype; ?>" class="form-control input-md">

                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="upass"> Change Password: </label>
                <div class="col-md-6">
                    <input id="upass" name="upass" type="password" value="" class="form-control input-md">

                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="ucpass"> Confirm Password: </label>
                <div class="col-md-6">
                    <input id="ucpass" name="ucpass" type="password" value="" class="form-control input-md">

                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">UPDATE</button>
                </div>
            </div>

            <!-- Text input-->


        </fieldset>
    </form>

</div>


<?php
include 'inc/jsfooterlink.inc.php';
?>



