<?php
include 'inc/dashhead.inc.php';
include 'inc/wrapper.inc.php';
?>

<!-- This Add product Page -->
<div id="page-wrapper">
<?php if($form_errors) : ?>

<div class="row">
        <p>There are some errors</p>
</div>
<?php endif; ?>

<form method="post" action="<?php echo $root; ?>dashboard/add_product" class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <h1 style="text-align: center;">Add Products</h1>


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
            <label class="col-md-4 control-label" for="name">SKU</label>
            <div class="col-md-6">
                <input id="pSKU" name="pSKU" type="text"  placeholder="SKU" class="form-control input-md">

            </div>
        </div>



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
                <div class="input-group">
                    <input id="dprice" name="discount" type="text" placeholder="Price" class="form-control input-md">

                    <span class="input-group-addon" id="basic-addon1">%</span>
                </div>
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

</div>

<script>
    jQuery(document).ready(function ( $ ){
        var slug = '';
        var titleElem = $('#ptitle');
        var elemSlug = $('#pSlug');
        var elem_slugMessage = $('#slug-message');

        titleElem.on('change keyup', function (){

           var title = $(this).val();
           title = jQuery.trim(title);

           slug = title.replace(/  +/g, ' ');       // replacing multiple spaces into one space
           slug = slug.replace(/ /gi, '-');             // replacing spaces into dashes
           /*console.info(slug); */
           elemSlug.val(slug);
       });

        titleElem.change(function ( $ ) {
            //console.log( slug);

            jQuery.ajax({
                url: "<?php echo $root; ?>dashboard/ajax_is_slug_available/" + slug
            }).done(function( is_available ) {
                //console.log(is_available);
                if ( is_available ){
                    titleElem.parent().removeClass('has-error');
                    elemSlug.parent().removeClass('has-error');

                    elem_slugMessage.html('');
                }else {
                    titleElem.parent().addClass('has-error');
                    elemSlug.parent().addClass('has-error');

                    elem_slugMessage.addClass('text-danger').html('This title is already exists. Please change title');
                }
            });
        });
    });
</script>


<?php
include 'inc/jsfooterlink.inc.php';
?>



