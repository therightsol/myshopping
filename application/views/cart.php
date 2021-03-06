<?php include 'inc/head.inc.php'; ?>

<body>
<!-- This is test by RAMISH AHMED BUTT -->

<?php include 'inc/load_menu_file.php';


?>

<script type="text/javascript">

    $(document).ready(function () {
        $('#bttclose').click(function () {
            $('.closepro').hide();
        });

        $('#bttclose1').click(function () {
            $('.closepro1').hide();
        })

        ;$('#bttclose2').click(function () {
            $('.closepro2').hide();
        });
    });

</script>



<section id="content">
    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="content-title"><h1 class="title">Shopping Cart</h1>

                    <p class="title-desc">Just this week, you can use the free premium delivery.</p></header>

                <?php if(($this->session->userdata('cartData')) && !empty($this->session->userdata('cartData'))): ?>

                <div class="xs-margin"></div>
                <div class="row">
                    <div class="col-md-12 table-responsive">
                        <table class="table cart-table">
                            <thead>
                            <tr>
                                <th class="table-title">Product Name</th>
                                <th class="table-title">Product Code</th>
                                <th class="table-title">Unit Price</th>
                                <th class="table-title">Quantity</th>
                                <th class="table-title">SubTotal</th>
                            </tr>
                            </thead>
                            <tbody>



                            <?php

                            $total = 0;
                            foreach($r as $arr):  ?>

                            <tr class="closepro" >
                                <td class="item-name-col">
                                    <figure><a href=""><img src="<?php echo $root; ?>assets/images/products/compare1.jpg"
                                                                      alt="Lowlands Lace Blouse"></a></figure>
                                    <header class="item-name"><a href=""><?php echo $arr['title'];   ?></a></header>
                                    <ul>
                                        <li><?php echo $arr['description'];   ?></li>
                                        <li>Size: SM</li>
                                    </ul>
                                </td>
                                <td class="item-code">   <?php echo $arr['sku'];  ?></td>
                                <td class="item-price-col"><span class="item-price-special"> <?php echo $arr['saleprice'];  ?></span></td>
                                <td>
                                    <div class="custom-quantity-input"><input type="text" name="quantity" value="1">
                                        <a href="" onclick="return!1"
                                           class="quantity-btn quantity-input-up"><i class="fa fa-angle-up"></i></a>
                                        <a href="" onclick="return!1"
                                           class="quantity-btn quantity-input-down"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </td>
                                <td class="item-total-col"><span class="item-price-special"> <?php echo $arr['saleprice'];  ?></span>
                                    <span id="bttclose" class="close-button"></span> </td>
                            </tr>



                                <?php

                                $percentDiscount = $arr['saleprice'] * ($arr['discountpercent']/100);
                                $total+= $arr['saleprice'];


                                ?>
                            <?php endforeach;   ?>






                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="lg-margin"></div>
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12 lg-margin">
                        <div class="tab-container left clearfix">
                            <ul class="nav-tabs">
                                <li class="active"><a href="<?php echo $root; ?>cart" data-toggle="tab">Shipping &amp;
                                        Taxes</a></li>
                                <li><a href="<?php echo $root; ?>cart" data-toggle="tab">Discount Code</a></li>
                                <li><a href="<?php echo $root; ?>cart" data-toggle="tab">Gift voucher</a></li>
                            </ul>
                            <div class="tab-content clearfix">
                                <div class="tab-pane active" id="shipping">
                                    <form action="<?php echo $root; ?>cart" id="shipping-form"><p class="shipping-desc">Enter your
                                            destination to get a shipping estimate.</p>

                                        <div class="form-group"><label for="select-country" class="control-label">Country&#42;</label>

                                            <div class="input-container normal-selectbox"><select
                                                    id="select-country" name="select-country" class="selectbox">
                                                    <option value="Japan">Japan</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="France">France</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Spain">Spain</option>
                                                </select></div>
                                        </div>
                                        <div class="xss-margin"></div>
                                        <div class="form-group"><label for="select-state" class="control-label">Regison/State&#42;</label>

                                            <div class="input-container normal-selectbox"><select id="select-state"
                                                                                                  name="select-state"
                                                                                                  class="selectbox">
                                                    <option value="California">California</option>
                                                    <option value="Texas">Texas</option>
                                                    <option value="NewYork">NewYork</option>
                                                    <option value="Narnia">Narnia</option>
                                                    <option value="Jumanji">Jumanji</option>
                                                </select></div>
                                        </div>
                                        <div class="xss-margin"></div>
                                        <div class="form-group"><label for="select-country" class="control-label">Post
                                                Code&#42;</label>

                                            <div class="input-container"><input type="text" required
                                                                                class="form-control"
                                                                                placeholder="Your fax"></div>
                                        </div>
                                        <div class="xss-margin"></div>
                                        <p class="text-right"><input type="submit" class="btn btn-custom-2"
                                                                     value="GET QUOTES"></p></form>
                                </div>
                                <div class="tab-pane" id="discount"><p>Enter your discount coupon code here.</p>

                                    <form action="<?php echo $root; ?>cart">
                                        <div class="input-group"><input type="text" required class="form-control"
                                                                        placeholder="Coupon code"></div>
                                        <input type="submit" class="btn btn-custom-2" value="APPLY COUPON"></form>
                                </div>
                                <div class="tab-pane" id="gift"><p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Sequi dignissimos nostrum debitis optio molestiae in quam
                                        dicta labore obcaecati ullam necessitatibus animi deleniti minima dolor suscipit
                                        nobis est excepturi inventore.</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <table class="table total-table">
                            <tbody>
                            <tr>
                                <td class="total-table-title">Subtotal:</td>
                                <td><?php  echo $total ; ?></td>
                            </tr>
                            <tr>
                                <td class="total-table-title">Discount :</td>
                                <td><?php  echo $percentDiscount ; ?></td>
                            </tr>
                            <tr>
                                <td class="total-table-title">TAX (0%):</td>
                                <td>$0.00</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td>Total:</td>
                                <td><?php  echo $total - $percentDiscount ; ?></td>
                            </tr>
                            </tfoot>
                        </table>
                        <div class="md-margin"></div>
                        <a href="<?php echo $root; ?>cart" class="btn btn-custom-2">CONTINUE SHOPPING</a> <a href="<?php echo $root; ?>cart"
                                                                                               class="btn btn-custom">CHECKOUT</a>
                    </div>
                </div>

            <?php  endif; ?>






                <div class="md-margin2x"></div>
                <div class="similiar-items-container carousel-wrapper">
                    <header class="content-title">



                        <div class="title-bg"><h2 class="title">Similiar Products</h2></div>
                        <p class="title-desc">Note the similar products - after buying for more than $500 you can
                            get a discount.</p></header>
                    <div class="carousel-controls">
                        <div id="similiar-items-slider-prev" class="carousel-btn carousel-btn-prev"></div>
                        <div id="similiar-items-slider-next"
                             class="carousel-btn carousel-btn-next carousel-space"></div>
                    </div>
                    <div class="similiar-items-slider owl-carousel">
                        <div class="item item-hover">
                            <div class="item-image-wrapper">
                                <figure class="item-image-container"><a href="<?php echo $root; ?>product"><img
                                            src="<?php echo $root; ?>assets/images/products/item3.jpg" alt="item1" class="item-image"> <img
                                            src="<?php echo $root; ?>assets/images/products/item3-hover.jpg" alt="item1  Hover"
                                            class="item-image-hover"></a></figure>
                                <div class="item-price-container"><span class="item-price">$160<span
                                            class="sub-price">.99</span></span></div>
                                <span class="new-rect">New</span></div>
                            <div class="item-meta-container">
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-result" data-result="80"></div>
                                    </div>
                                    <span class="ratings-amount">5 Reviews</span></div>
                                <h3 class="item-name"><a href="<?php echo $root; ?>product">Phasellus consequat</a></h3>

                                <div class="item-action"><a href="<?php echo $root; ?>addproduct" class="item-add-btn"><span
                                            class="icon-cart-text">Add to Cart</span></a>

                                    <div class="item-action-inner"><a href="<?php echo $root; ?>cart"
                                                                      class="icon-button icon-like">Favourite</a> <a
                                            href="<?php echo $root; ?>cart" class="icon-button icon-compare">Checkout</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item item-hover">
                            <div class="item-image-wrapper">
                                <figure class="item-image-container"><a href="<?php echo $root; ?>product"><img
                                            src="<?php echo $root; ?>assets/images/products/item1.jpg" alt="item1" class="item-image"> <img
                                            src="<?php echo $root; ?>assets/images/products/item1-hover.jpg" alt="item1  Hover"
                                            class="item-image-hover"></a></figure>
                                <div class="item-price-container"><span class="item-price">$100</span></div>
                            </div>
                            <div class="item-meta-container">
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-result" data-result="99"></div>
                                    </div>
                                    <span class="ratings-amount">4 Reviews</span></div>
                                <h3 class="item-name"><a href="<?php echo $root; ?>product">Phasellus consequat</a></h3>

                                <div class="item-action"><a href="<?php echo $root; ?>addproduct" class="item-add-btn"><span
                                            class="icon-cart-text">Add to Cart</span></a>

                                    <div class="item-action-inner"><a href="<?php echo $root; ?>cart"
                                                                      class="icon-button icon-like">Favourite</a> <a
                                            href="<?php echo $root; ?>cart" class="icon-button icon-compare">Checkout</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item item-hover">
                            <div class="item-image-wrapper">
                                <figure class="item-image-container"><a href="<?php echo $root; ?>product"><img
                                            src="<?php echo $root; ?>assets/images/products/item4.jpg" alt="item1" class="item-image"> <img
                                            src="<?php echo $root; ?>assets/images/products/item4-hover.jpg" alt="item1  Hover"
                                            class="item-image-hover"></a></figure>
                                <div class="item-price-container"><span class="old-price">$100</span> <span
                                        class="item-price">$80</span></div>
                                <span class="discount-rect">-20%</span></div>
                            <div class="item-meta-container">
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-result" data-result="75"></div>
                                    </div>
                                    <span class="ratings-amount">2 Reviews</span></div>
                                <h3 class="item-name"><a href="<?php echo $root; ?>product">Phasellus consequat</a></h3>

                                <div class="item-action"><a href="<?php echo $root; ?>addproduct" class="item-add-btn"><span
                                            class="icon-cart-text">Add to Cart</span></a>

                                    <div class="item-action-inner"><a href="<?php echo $root; ?>cart"
                                                                      class="icon-button icon-like">Favourite</a> <a
                                            href="<?php echo $root; ?>cart" class="icon-button icon-compare">Checkout</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item item-hover">
                            <div class="item-image-wrapper">
                                <figure class="item-image-container"><a href="<?php echo $root; ?>product"><img
                                            src="<?php echo $root; ?>assets/images/products/item10.jpg" alt="item1" class="item-image"> <img
                                            src="<?php echo $root; ?>assets/images/products/item10-hover.jpg" alt="item1  Hover"
                                            class="item-image-hover"></a></figure>
                                <div class="item-price-container"><span class="old-price">$120</span> <span
                                        class="item-price">$60</span></div>
                                <span class="discount-rect">-50%</span></div>
                            <div class="item-meta-container">
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-result" data-result="65"></div>
                                    </div>
                                    <span class="ratings-amount">4 Reviews</span></div>
                                <h3 class="item-name"><a href=<?php echo $root; ?>product">Phasellus consequat</a></h3>

                                <div class="item-action"><a href="<?php echo $root; ?>addproduct" class="item-add-btn"><span
                                            class="icon-cart-text">Add to Cart</span></a>

                                    <div class="item-action-inner"><a href="<?php echo $root; ?>cart"
                                                                      class="icon-button icon-like">Favourite</a> <a
                                            href="<?php echo $root; ?>cart" class="icon-button icon-compare">Checkout</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item item-hover">
                            <div class="item-image-wrapper">
                                <figure class="item-image-container"><a href="<?php echo $root; ?>product"><img
                                            src="<?php echo $root; ?>assets/images/products/item5.jpg" alt="item1" class="item-image"> <img
                                            src="<?php echo $root; ?>assets/images/products/item5-hover.jpg" alt="item1  Hover"
                                            class="item-image-hover"></a></figure>
                                <div class="item-price-container"><span class="item-price">$99</span></div>
                                <span class="new-rect">New</span></div>
                            <div class="item-meta-container">
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-result" data-result="40"></div>
                                    </div>
                                    <span class="ratings-amount">3 Reviews</span></div>
                                <h3 class="item-name"><a href="<?php echo $root; ?>product">Phasellus consequat</a></h3>

                                <div class="item-action"><a href="<?php echo $root; ?>addproduct" class="item-add-btn"><span
                                            class="icon-cart-text">Add to Cart</span></a>

                                    <div class="item-action-inner"><a href="<?php echo $root; ?>cart"
                                                                      class="icon-button icon-like">Favourite</a> <a
                                            href="<?php echo $root; ?>cart" class="icon-button icon-compare">Checkout</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item item-hover">
                            <div class="item-image-wrapper">
                                <figure class="item-image-container"><a href="<?php echo $root; ?>product"><img
                                            src="<?php echo $root; ?>assets/images/products/item7.jpg" alt="item1" class="item-image"> <img
                                            src="<?php echo $root; ?>assets/images/products/item7-hover.jpg" alt="item1  Hover"
                                            class="item-image-hover"></a></figure>
                                <div class="item-price-container"><span class="item-price">$280</span></div>
                            </div>
                            <div class="item-meta-container">
                                <div class="ratings-container"></div>
                                <h3 class="item-name"><a href="<?php echo $root; ?>product">Phasellus consequat</a></h3>

                                <div class="item-action"><a href="<?php echo $root; ?>addproduct" class="item-add-btn"><span
                                            class="icon-cart-text">Add to Cart</span></a>

                                    <div class="item-action-inner"><a href="<?php echo $root; ?>productcart"
                                                                      class="icon-button icon-like">Favourite</a> <a
                                            href="<?php echo $root; ?>productcart" class="icon-button icon-compare">Checkout</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<?php

include 'inc/footer.inc.php';
include 'inc/footerfiles.inc.php';

?>
