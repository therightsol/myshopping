<?php   ?>

<div id="main-nav-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12 clearfix">
                <nav id="main-nav">
                    <div id="responsive-nav">
                        <div id="responsive-nav-button">Menu <span id="responsive-nav-button-icon"></span>
                        </div>
                    </div>
                    <ul class="menu clearfix">
                        <li><a class="active" href="<?php echo $root; ?>home">HOME</a></li>
                        <li class="mega-menu-container"><a href="<?php echo $root; ?>home">SHOP</a>

                            <div class="mega-menu clearfix">
                                <div class="col-5"><a href="<?php echo $root; ?>category"
                                                      class="mega-menu-title">Clothing</a>
                                    <ul class="mega-menu-list clearfix">
                                        <li><a href="<?php echo $root; ?>category_list">Dresses</a></li>
                                        <li><a href="<?php echo $root; ?>category_list">Jeans &amp; Trousers</a></li>
                                        <li><a href="<?php echo $root; ?>category_list">Blouses &amp; Shirts</a></li>
                                        <li><a href="<?php echo $root; ?>category_list">Tops &amp; T-Shirts</a></li>
                                        <li><a href="<?php echo $root; ?>category_list">Jackets &amp; Coats</a></li>
                                        <li><a href="<?php echo $root; ?>category_list">Skirts</a></li>
                                    </ul>
                                </div>
                                <div class="col-5"><a href="<?php echo $root; ?>category" class="mega-menu-title">Shoes</a>
                                    <ul class="mega-menu-list clearfix">
                                        <li><a href="<?php echo $root; ?>category_list">Formal Shoes</a></li>
                                        <li><a href="<?php echo $root; ?>category_list">Casual Shoes</a></li>
                                        <li><a href="<?php echo $root; ?>category_list">Sandals</a></li>
                                        <li><a href="<?php echo $root; ?>category_list">Boots</a></li>
                                        <li><a href="<?php echo $root; ?>category_list">Wide Fit</a></li>
                                        <li><a href="<?php echo $root; ?>category_list">Slippers</a></li>
                                    </ul>
                                </div>
                                <div class="col-5"><a href="<?php echo $root; ?>category" class="mega-menu-title">Accessories</a>
                                    <ul class="mega-menu-list clearfix">
                                        <li><a href="<?php echo $root; ?>category_list">Bags &amp; Purses</a></li>
                                        <li><a href="<?php echo $root; ?>category_list">Belts</a></li>
                                        <li><a href="<?php echo $root; ?>category_list">Gloves</a></li>
                                        <li><a href="<?php echo $root; ?>category_list">Jewellery</a></li>
                                        <li><a href="<?php echo $root; ?>category_list">Sunglasses</a></li>
                                        <li><a href="<?php echo $root; ?>category_list">Hair Accessories</a></li>
                                    </ul>
                                </div>
                                <div class="col-5"><a href="<?php echo $root; ?>category"
                                                      class="mega-menu-title">Sports</a>
                                    <ul class="mega-menu-list clearfix">
                                        <li><a href="<?php echo $root; ?>category_list">Sport Tops &amp; Vests</a></li>
                                        <li><a href="<?php echo $root; ?>category_list">Swimwear</a></li>
                                        <li><a href="<?php echo $root; ?>category_list">Footwear</a></li>
                                        <li><a href="<?php echo $root; ?>category_list">Sports Underwear</a></li>
                                        <li><a href="<?php echo $root; ?>category_list">Bags</a></li>
                                    </ul>
                                </div>
                                <div class="col-5"><a href="<?php echo $root; ?>category"
                                                      class="mega-menu-title">Maternity</a>
                                    <ul class="mega-menu-list clearfix">
                                        <li><a href="<?php echo $root; ?>category_list">Tops &amp; Skirts</a></li>
                                        <li><a href="<?php echo $root; ?>category_list">Dresses</a></li>
                                        <li><a href="<?php echo $root; ?>category_list">Trousers &amp; Shorts</a></li>
                                        <li><a href="<?php echo $root; ?>category_list">Knitwear</a></li>
                                        <li><a href="<?php echo $root; ?>category_list">Jackets &amp; Coats</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="mega-menu-container"><a href="<?php echo $root; ?>products">Product</a>


                            <div class="mega-menu clearfix">
                                <div class="col-5"><a href="<?php echo $root; ?>compare_product" class="mega-menu-title">Compare Products</a>
                                    <ul class="mega-menu-list clearfix">

                                    </ul>
                                </div>

                            </div>
                        </li>

                        <li><a href="<?php echo $root; ?>about">About Us</a></li>
                        <li><a href="<?php echo $root; ?>contact">Contact Us</a></li>
                        <li><a href="<?php echo $root; ?>member">Member Area</a></li>
                    </ul>
                </nav>
                <div id="quick-access">
                    <div class="dropdown-cart-menu-container pull-right">
                        <div class="btn-group dropdown-cart">
                            <button type="button" class="btn btn-custom dropdown-toggle"


                                    data-toggle="dropdown"><span class="cart-menu-icon"></span> <?php echo sizeof($this->session->userdata('cartData')); ?>- item(s)
                                <span class="drop-price">- $0.00</span></button>
                            <div style="min-width: 600px;padding: 10px 30px;"  class="dropdown-menu dropdown-cart-menu pull-right clearfix" role="menu"><p
                                    class="dropdown-cart-description">Recently added item(s).</p>
                                <ul class="dropdown-cart-product-list">


                                    <?php if(($this->session->userdata('cartData')) && !empty($this->session->userdata('cartData'))): ?>






                                    <?php

                                    $total = 0;
                                    $percentDiscount = 0;
                                    foreach($r as $arr):  ?>
                                        <li class="item clearfix">
                                            <a href="<?php echo $root; ?>home" title="Delete item" class="delete-item">
                                                <i class="fa fa-times"></i>
                                            </a>

                                            <a href="<?php echo $root; ?>home" title="Edit item"  class="edit-item">
                                                <i class="fa fa-pencil"></i>
                                            </a>

                                            <figure>
                                                <a href="<?php echo $root; ?>products"><img src="<?php echo $root; ?>assets/images/products/thumbnails/item12.jpg" alt="phone 4"></a>
                                            </figure>

                                            <div class="dropdown-cart-details">
                                                <p class="item-name">
                                                    <a href="<?php echo $root; ?>products"><?php echo $arr['title'];  ?></a>
                                                </p>

                                                <p>
                                                    Price: <?php echo $arr['saleprice'];  ?>
                                                    <span class="item-price">, Discount: <?php echo $arr['discountpercent']; ?> %</span>
                                                </p>
                                            </div>
                                        </li>
                                        <?php

                                        $percentDiscount = $arr['saleprice'] * ($arr['discountpercent']/100);
                                        $total+= $arr['saleprice'];
                                        ?>
                                    <?php endforeach;   ?>











                                </ul>
                                <ul class="dropdown-cart-total">
                                    <li><span class="dropdown-cart-total-title">Tot Discount:</span><?php  echo $percentDiscount ?></li>
                                    <li><span class="dropdown-cart-total-title">Tot Price:</span><?php echo $total;   ?><span
                                            class="sub-price">.99</span></li>
                                </ul>
                                <?php endif;  ?>





















                                <div class="dropdown-cart-action"><p><a href="<?php echo $root; ?>cart"
                                                                        class="btn btn-custom-2 btn-block">Cart</a>
                                    </p>

                                    <p><a href="<?php echo $root; ?>checkout" class="btn btn-custom btn-block">Checkout</a>
                                    </p>
                                    <p><a href="<?php echo $root; ?>home/clear_cart" class="btn btn-custom btn-block">Clear Cart</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="form-inline quick-search-form" role="form" action="href=<?php echo $root; ?>home">
                        <div class="form-group"><input type="text" class="form-control"
                                                       placeholder="Search here"></div>
                        <button type="submit" id="quick-search" class="btn btn-custom"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>