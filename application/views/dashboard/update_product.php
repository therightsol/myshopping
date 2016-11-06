<?php
include 'inc/dashhead.inc.php';
include 'inc/wrapper.inc.php';
?>

<!-- This Add product Page -->
<div id="page-wrapper">

    <form method="post" action="<?php echo $root; ?>dashboard/add_product" class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <legend>Add Product</legend>


            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Product Title</label>
                <div class="col-md-6">
                    <input id="ptitle" name="ptitle" type="text" placeholder="Product Title" class="form-control input-md">

                </div>
                <span id="slug-message"></span>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Slug</label>
                <div class="col-md-6">
                    <input id="pSlug" name="pSlug" type="text" readonly placeholder="" class="form-control input-md">

                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Product Name</label>
                <div class="col-md-6">
                    <input id="name" name="pname" type="text" placeholder="Name" class="form-control input-md">

                </div>
            </div>



            <div class="form-group">
                <label class="col-md-4 control-label" for="pprice">Purchase Price</label>
                <div class="col-md-6">
                    <input id="pprice" name="purchase" type="text" placeholder="Price" class="form-control input-md">

                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="sprice">Sale Price</label>
                <div class="col-md-6">
                    <input id="sprice" name="sale" type="text" placeholder="Price" class="form-control input-md">

                </div>
            </div>



            <div class="form-group">
                <label class="col-md-4 control-label" for="dprice">Discounted Price</label>
                <div class="col-md-6">
                    <div class="input-group">
                        <input id="dprice" name="discount" type="text" placeholder="Price" class="form-control input-md">

                        <span class="input-group-addon" id="basic-addon1">%</span>
                    </div>
                </div>
            </div>



            <div class="form-group">
                <label class="col-md-4 control-label" for="tax">Tax</label>
                <div class="col-md-6">
                    <input id="tax" name="tax" type="text" placeholder="Name" class="form-control input-md">

                </div>
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

</div>


<?php
include 'inc/jsfooterlink.inc.php';
?>



