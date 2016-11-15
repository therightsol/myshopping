<?php
if (isset($products) && is_array($products)):
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
                class="discount-rect">-15%</span></div>
        <div class="item-meta-container">
            <div class="ratings-container">
                <div class="ratings">
                    <div class="ratings-result" data-result="80"></div>
                </div>
                <span class="ratings-amount">5 Reviews</span></div>
            <h3 class="item-name"><a href="<?php echo $root; ?>single"><?php echo $product['title']; ?></a>
            </h3>

            <div class="item-action">
                <a data-pid="<?php echo $product['id']; ?>" href=""
                                        class="item-add-btn add_to_cart <?php echo 'pid-' . $product['id']; ?>">
                    <span
                        class="icon-cart-text">Add to Cart</span>
                </a>

                <div class="item-action-inner"><a href="<?php echo $root; ?>home"
                                                  class="icon-button icon-like">Favourite</a>
                    <a href="<?php echo $root; ?>checkout"
                       class="icon-button icon-compare">Checkout</a></div>
            </div>
        </div>
    </div>
</div>
    <script>
        jQuery(document).ready(function (){
           jQuery('.add_to_cart').click(function (){
               var id = jQuery(this).data('pid');

               jQuery.ajax(
                   {
                      url: "<?php echo $root; ?>home/ajax_add_to_cart/" + id
                   }
               ).done(function ( response ){
                   console.info(response);
               });
           })
        });
    </script>
    <?php //echo var_export($this->session->userdata('cartData'), true); ?>


<?php
endforeach;
else:
    echo '<h2>Sorry! no product is available. </h2>';
endif;
    ?>