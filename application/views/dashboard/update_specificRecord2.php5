<?php
include 'inc/dashhead.inc.php';
include 'inc/wrapper.inc.php';
?>

<!-- update Specific Record -->
<div id="page-wrapper">

    <form method="post" action="<?php echo $root; ?>dashboard/update_specificUser" class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <h1 style="text-align: center;">Update Record of  <?php  echo $title; ?></h1>

            <div class="form-group">
                <label class="col-md-4 control-label" for="name">User ID:</label>
                <div class="col-md-6">
                    <input id="u_id" name="u_id" type="text" value=<?php echo $id; ?> class="form-control input-md">

                </div>

            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">First Name:</label>
                <div class="col-md-6">
                    <input id="ufname" name="ufname" type="text" value=<?php echo $firstname; ?> class="form-control input-md">

                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="purchaseprice">Last Name:</label>
                <div class="col-md-6">
                    <input id="ulname" name="ulname" type="text" value="<?php echo $lastname; ?>" class="form-control input-md">

                </div>
            </div>




            <div class="form-group">
                <label class="col-md-4 control-label" for="saleprice">Usertype:</label>
                <div class="col-md-6">
                    <input id="utype" name="utype" type="text" value="<?php echo $saleprice; ?>" class="form-control input-md">

                </div>
            </div>



            <div class="form-group">
                <label class="col-md-4 control-label" for="pdiscount">Password: </label>
                <div class="col-md-6">
                    <input id="upass" name="upass" type="password" value=<?php echo $encryptedPass; ?> class="form-control input-md">

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



