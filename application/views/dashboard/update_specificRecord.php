<?php
include 'inc/dashhead.inc.php';
include 'inc/wrapper.inc.php';
?>

<!-- update Specific Record -->
<div id="page-wrapper">

    <form method="post" action="<?php echo $root; ?>dashboard/update_specificProduct" class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <h1 style="text-align: center;">Update Record of  <?php  echo $title; ?></h1>

            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Product ID</label>
                <div class="col-md-6">
                    <input id="p_id" name="p_id" type="text" value=<?php echo $id; ?> class="form-control input-md">

                </div>

            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Product Title</label>
                <div class="col-md-6">
                    <input id="p_title" name="p_title" type="text" value=<?php echo $title; ?> class="form-control input-md">

                </div>
                <span id="slug-message"></span>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="purchaseprice">Purchase Price</label>
                <div class="col-md-6">
                    <input id="purchaseprice" name="purchaseprice" type="text" value=<?php echo $purchaseprice; ?> class="form-control input-md">

                </div>
            </div>




            <div class="form-group">
                <label class="col-md-4 control-label" for="saleprice">Sales Price</label>
                <div class="col-md-6">
                    <input id="saleprice" name="saleprice" type="text" value=<?php echo $saleprice; ?> class="form-control input-md">

                </div>
            </div>





            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textarea">Description</label>
                <div class="col-md-6">
                    <textarea class="form-control" id="" name="p_description"><?php echo $description; ?></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="pdiscount">Discount </label>
                <div class="col-md-6">
                    <input id="pdiscount" name="pdiscount" type="text" value=<?php echo $discountpercent; ?> class="form-control input-md">

                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="pslug">Slug</label>
                <div class="col-md-6">
                    <input id="pslug" name="pslug" type="text" value=<?php echo $slug; ?> class="form-control input-md">

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="p_sku">SKU</label>
                <div class="col-md-6">
                    <input id="p_sku" name="p_sku" type="text" value=<?php echo $sku; ?> class="form-control input-md">

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Status</label>
                <div class="col-md-6">
                    <input id="p_status" name="p_status" type="text" value=<?php echo $status; ?> class="form-control input-md">

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">TAX</label>
                <div class="col-md-6">
                    <input id="p_tax" name="p_tax" type="text" value=<?php echo $tax; ?> class="form-control input-md">

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Created AT</label>
                <div class="col-md-6">
                    <input id="p_createdAT" name="p_createdAT" type="text" value=<?php echo $createdAt; ?> class="form-control input-md">

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Updated AT</label>
                <div class="col-md-6">
                    <input id="p_updatedAT" name="p_updatedAT" type="text" value="<?php echo $updatedAt; ?>" class="form-control input-md">

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



