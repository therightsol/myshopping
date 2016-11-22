<?php
include 'inc/dashhead.inc.php';
include 'inc/wrapper.inc.php';
?>

<!-- View Specific Record -->
<div id="page-wrapper">

    <div style="border: 1px solid black; float: left; width: 50%; height: 500px;">
        <img  " class="center_img" src="../../product_images/user3.png">
    </div>
    <form style="border: 1px solid black; width: 50%; height: 500px; float: right" method="post" action="<?php echo $root; ?>dashboard/update_specificProduct" class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <h1
                style="text-align: center;">View Record of  <?php  echo $title; ?></h1>

            <div class="form-group">
                <label class="col-md-4 control-label" >ID:</label>
                <p class="col-md-6 control-label" style="text-align: left"><?php echo $id;   ?></p>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" >Title:</label>
                <p class="col-md-6 control-label" style="text-align: left"><?php echo $title;   ?></p>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" >Purchase Price:</label>
                <p class="col-md-6 control-label" style="text-align: left"><?php echo $purchaseprice;   ?></p>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" >Sale Price:</label>
                <p class="col-md-6 control-label" style="text-align: left"><?php echo $saleprice;   ?></p>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" >SLUG:</label>
                <p class="col-md-6 control-label" style="text-align: left"><?php echo $slug;   ?></p>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" >SKU:</label>
                <p class="col-md-6 control-label" style="text-align: left"><?php echo $sku;   ?></p>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" >Status:</label>
                <p class="col-md-6 control-label" style="text-align: left"><?php echo $status;   ?></p>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" >TAX:</label>
                <p class="col-md-6 control-label" style="text-align: left"><?php echo $tax;   ?></p>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" >Created AT:</label>
                <p class="col-md-6 control-label" style="text-align: left"><?php echo $createdAt;   ?></p>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" >Updated AT:</label>
                <p class="col-md-6 control-label" style="text-align: left"><?php echo $updatedAt;   ?></p>
            </div>
            <!-- Text input-->


        </fieldset>
    </form>

</div>


<?php
include 'inc/jsfooterlink.inc.php';
?>
