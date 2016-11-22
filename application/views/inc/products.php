<?php
if (isset($products) && is_array($products) && !empty($products)):

foreach ($products as $product):
    $price = $product['saleprice'];
    $price = explode('.', $price);
    if (is_array($price)){
        $mainPrice = $price[0];
        $minPrice = $price[1];

    }else {
        $mainPrice = $product['saleprice'];
        $minPrice = 0;
    }

    $discount = $product['discountpercent'];
    if($discount){


    }else{

        $discount = $product['discountpercent'];

    }




    ?>
<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="item item-hover">
        <div class="item-image-wrapper">
            <figure class="item-image-container"><a
                    href="<?php echo $root; ?>single"><img
                        src="<?php echo $root; ?>assets/images/products/item5.jpg"
                        alt="item1" class="item-image">
                    <img
                        src="<?php echo $root; ?>assets/images/products/item5-hover.jpg"
                        alt="item1  Hover"
                        class="item-image-hover"></a>
            </figure>
            <div class="item-price-container"><span class="old-price">$<?php echo $mainPrice;  ?><span
                        class="sub-price">.<?php echo $minPrice; ?></span></span> <span
                    class="item-price">$<?php echo $mainPrice;  ?><span
                        class="sub-price">.<?php echo $minPrice; ?></span></span></div>
            <span class="new-rect">New</span> <span
                class="discount-rect"><?php echo $discount . '%'; ?></span></div>
        <div class="item-meta-container">
            <div class="ratings-container">
                <div class="ratings">
                    <div class="ratings-result" data-result="80"></div>
                </div>
                <span class="ratings-amount">5 Reviews</span></div>
            <h3 class="item-name"><a href="<?php echo $root; ?>single"><?php echo $product['title']; ?></a>
            </h3>

            <div class="item-action">
                <a data-pid="<?php echo $product['id']; ?>" href="#"
                                        class="item-add-btn add_to_cart <?php echo 'pid-' . $product['id']; ?>">
                    <span
                        class="icon-cart-text">Add to Cart</span>
                </a>
                <div class="item-action-inner"><a href="<?php echo $root; ?>home"
                                                  class="icon-button icon-like">Favourite</a>
                    <a href="<?php echo $root; ?>checkout"
                       class="icon-button icon-compare">Checkout</a></div>
            </div>
            <div style="display: none; font-weight: bold; color: #009000;" class="added pid-<?php echo $product['id']; ?>">Added into cart.</div>

        </div>
    </div>
</div>

    <?php //echo var_export($this->session->userdata('cartData'), true); ?>


<?php
endforeach;
else:
    echo '<h2>Sorry! no product is available. </h2>';
endif;
    ?>

<script>
    jQuery(document).ready(function (){
        jQuery('.add_to_cart').click(function ( e ){
            e.preventDefault();

            var $this = jQuery(this);
            var span = $this.find('span');

            var id = $this.data('pid');

            var original_text = span.text();
            span.text('Adding into cart ...').delay(500);

            //console.log("Id is " + id);
            //alert(id);

            jQuery.ajax(
                {
                    url: "<?php echo $root; ?>home/ajax_add_to_cart/" + id
                }
            ).done(function ( response ){

                /*
                *   Response is :
                *   {"images":"","title":"abc","saleprice":"320.25000","discountpercent":"5.00","success":true}
                *
                * */

                response = jQuery.parseJSON( response );

                if ( response.success ){
                    // 1) refreshing cart -- adding item into cart
                    refresh_cart(response);

                    // 2) setting original text to button
                    span.text(original_text).fadeIn(100);

                    //3) displaying message that product is added into cart and then scrolling to cart
                    jQuery('.added.pid-'+id).show(350).delay(1600)
                        .slideUp(150).promise().done(function (){
                        jQuery('body').animate( { scrollTop: 100 }, 1200);
                    });

                    // 4) show cart dropdown.
                    jQuery('.dropdown-cart-menu-container').find('.dropdown-menu')
                        .addClass('showDropDown').delay(5500).queue(function(next){
                        jQuery(this).removeClass("showDropDown");
                        next();
                    });
                }
            });
        })
    });

    function refresh_cart( response ){
        var li = '';

        li += '<li class="item clearfix">';
            li  += "<a href=\"<?php echo $root; ?>home\" title=\"Delete item\" class=\"delete-item\">";
                li += "<i class=\"fa fa-times\"></i>";
            li += "</a>";

            li += "<a href=\"<?php echo $root; ?>home\" title=\"Edit item\" class=\"edit-item\">";
                li += "<i class=\"fa fa-pencil\"></i>";
            li += "</a>";

            li += "<figure>";
                //li += "<a href=\"<?php echo $root; ?>products\"><img src=\"<?php echo $root; ?>" + response.images + "\" alt=\"" + response.title + "\" ></a>";
                li += "<a href=\"<?php echo $root; ?>products\"><img src=\"<?php echo $root; ?>assets/images/products/thumbnails/item12.jpg\" alt=\"" + response.title + "\" ></a>";
            li += "</figure>";

            li += "<div class=\"dropdown-cart-details\">";
                li += "<p class=\"item-name\">";
                    li += "<a href=\"<?php echo $root; ?>products\">" + response.title + "</a>";
                li += "</p>";

                li += "<p>";
                    li += "Price: " + response.saleprice;
                    li += "<span class=\"item-price\">Discount:" + response.discountpercent + "% </span>";
                li += "</p>";
            li += '</div>';
        li += '</li>';
        jQuery('.dropdown-cart-product-list').append(li);
    }
</script>

<style>
    .showDropDown{
        display: block !important;
    }
</style>