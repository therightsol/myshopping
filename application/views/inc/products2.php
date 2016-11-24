<?php

    if(($products) && is_array($products) &&!empty($products)) :

    foreach ($products as $product):
    $price = $product['saleprice'];
    $price = explode('.' , $price);

    if(is_array($price)){

        $mainprice = $price[0];
        $minprice = $price[1];

    }else{

        $mainprice = $product['saleprice'];
        $minprice = 0;

    }

    $discount = $product['discountpercent'];

    if(is_array($discount)){



    }else{

        $discount = $product['discountpercent'];


    }

?>

<div class="item item-hover">
    <div class="item-image-wrapper">
        <figure class="item-image-container"><a href="<?php echo $root; ?>single"><img
                    src="<?php echo $root ; ?>assets/images/products/item8.jpg" alt="item1" class="item-image"> <img
                    src="<?php echo $root ; ?>assets/images/products/item8-hover.jpg" alt="item1  Hover"
                    class="item-image-hover"></a></figure>
        <div class="item-price-container"><span class="old-price"><?php echo $mainprice; ?></span> <span
                class="item-price"><?php echo $minprice; ?></span></div>
        <span class="discount-rect">-<?php echo $discount; ?>%</span></div>
    <div class="item-meta-container">
        <div class="ratings-container">
            <div class="ratings">
                <div class="ratings-result" data-result="75"></div>
            </div>
            <span class="ratings-amount">2 Reviews</span></div>
        <h3 class="item-name"><a href="<?php echo $root; ?>single"><?php echo $product['title']; ?></a></h3>

        <div class="item-action"><a href="<?php echo $root; ?>cart" class="item-add-btn"><span
                    class="icon-cart-text">Add to Cart</span></a>

            <div class="item-action-inner"><a href="<?php echo $root; ?>home"
                                              class="icon-button icon-like">Favourite</a>
                <a href="<?php echo $root; ?>checkout" class="icon-button icon-compare">Checkout</a>
            </div>
        </div>
    </div>
</div>

        <?php
    endforeach;
    else:
        echo '<h2>Sorry! no product is available here. </h2>';
    endif;
?>