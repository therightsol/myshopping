<?php
include 'inc/dashhead.inc.php';
include 'inc/wrapper.inc.php';
?>

<!-- This Add product Page -->

<?php if($form_errors) : ?>

<div class="row">

        <p>There are some errors</p>

</div>

<?php endif; ?>

<form method="post" action="<?php echo $root; ?>dashboard/add_product" class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Add Product</legend>

        <!-- Text input-->

        <div class="text-danger">
        <?php if(form_error('pname')){

            echo form_error('pname');

        }

        ?>

        </div>

        <?php if($success) : ?>

        <div class="row">

            <div class="col-md-12">

                <div class="alert alert-success"><?php echo'Product added successfully.'; ?>.</div>

            </div>

        </div>

        <?php endif; ?>

        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Product Name</label>
            <div class="col-md-6">
                <input id="name" name="pname" type="text" placeholder="Name" class="form-control input-md">

            </div>
        </div>

        <div class="text-danger">
            <?php if(form_error('purchase')){

                echo form_error('purchase');

            }

            ?>

        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="pprice">Purchase Price</label>
            <div class="col-md-6">
                <input id="pprice" name="purchase" type="text" placeholder="Price" class="form-control input-md">

            </div>
        </div>

        <div class="text-danger">
            <?php if(form_error('sale')){

                echo form_error('sale');

            }

            ?>

        </div>


        <div class="form-group">
            <label class="col-md-4 control-label" for="sprice">Sale Price</label>
            <div class="col-md-6">
                <input id="sprice" name="sale" type="text" placeholder="Price" class="form-control input-md">

            </div>
        </div>

        <div class="text-danger">
            <?php if(form_error('discount')){

                echo form_error('discount');

            }

            ?>

        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="dprice">Discounted Price</label>
            <div class="col-md-6">
                <input id="dprice" name="discount" type="text" placeholder="Price" class="form-control input-md">

            </div>
        </div>

        <div class="text-danger">
            <?php if(form_error('tax')){

                echo form_error('tax');

            }

            ?>

        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="tax">Tax</label>
            <div class="col-md-6">
                <input id="tax" name="tax" type="text" placeholder="Name" class="form-control input-md">

            </div>
        </div>

        <div class="text-danger">

            <?php if(form_error('textarea')){

                echo form_error('textarea');

            }
            ?>

        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textarea">Description</label>
            <div class="col-md-4">
                <textarea class="form-control" id="textarea" name="textarea">Product Description</textarea>
            </div>
        </div>

        <!-- File Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="upload">Upload Image</label>
            <div class="col-md-4">
                <input id="upload" name="file" class="input-file" type="file">
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
                <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </fieldset>
</form>




<?php
include 'inc/jsfooterlink.inc.php';
?>



