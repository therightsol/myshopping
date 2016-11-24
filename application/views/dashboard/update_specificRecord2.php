<?php
include 'inc/dashhead.inc.php';
include 'inc/wrapper.inc.php';
?>

<!-- update Specific Record -->
<div id="page-wrapper">

    <form method="post" action="<?php echo $root; ?>dashboard/update_specificUser" class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <h1 style="text-align: center;">Update Record of  <?php  echo '"' . $username . '"'; ?></h1>

            <div class="form-group">
                <label class="col-md-4 control-label" for="u_id">User ID:</label>
                <div class="col-md-6">
                    <input id="u_id" name="u_id" type="text" readonly value="<?php echo $id; ?>" class="form-control input-md">

                </div>

            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="update_fname">First Name:</label>
                <div class="col-md-6">
                    <input id="update_fname" name="update_fname" type="text" value="<?php echo $firstname; ?>" class="form-control input-md">

                </div>
                <span id="slug-message"></span>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="update_lname">Last Name:</label>
                <div class="col-md-6">
                    <input id="update_lname" name="update_lname" type="text" value="<?php echo $lastname; ?>" class="form-control input-md">

                </div>
            </div>




            <div class="form-group">
                <label class="col-md-4 control-label" for="update_utype">User Type:</label>
                <div class="col-md-6">
                    <input id="update_utype" name="update_utype" type="text" value="<?php echo $usertype; ?>" class="form-control input-md">

                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="update_upass">Change Password: </label>
                <div class="col-md-6">
                    <input id="update_upass" name="update_upass" type="password" value="" class="form-control input-md">

                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="update_cpass">Confirm Password:</label>
                <div class="col-md-6">
                    <input id="update_cpass" name="update_cpass" type="password" value="" class="form-control input-md">

                </div>
            </div>


            <!--<select name="statuses" id="">
                <?php /*foreach($statuses as $status): */?>
                <option value="<?php /*echo $status['id'] ; */?>">
                    <?php /*echo $status['status']; */?>
                </option>
                <?php /*endforeach; */?>
            </select>-->




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



