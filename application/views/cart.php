<?php

include 'inc/head.inc.php';
include 'inc/topbar.inc.php';
include 'inc/header.inc.php';
include 'inc/menu.inc.php';

?>
<div id="option-panel">
    <div id="option-panel-wrapper">
        <div id="option-panel-btn"></div>
        <div id="option-panel-container">
            <ul id="option-panel-tabs-container" class="clearfix">
                <li class="active"><a href="cart.html#panel-layout" data-toggle="tab" data-panel-title="Layout"></a>
                </li>
                <li><a href="cart.html#panel-home" data-toggle="tab" data-panel-title="Background Settings"></a></li>
                <li><a href="cart.html#panel-color" data-toggle="tab" data-panel-title="Color Settings"></a></li>
                <li><a href="cart.html#panel-font" data-toggle="tab" data-panel-title="Font Settings"></a></li>
                <li><a id="option-close" href="cart.html#"></a></li>
            </ul>
            <div id="option-panel-title" class="clearfix"><span>Layout</span> <a href="cart.html#"
                                                                                 id="option-panel-reset">Reset</a></div>
            <div id="option-panel-content" class="tab-content">
                <div class="tab-pane fade in active" id="panel-layout">
                    <div id="panel-option-layout" class="panel-group custom-accordion sm-accordion">
                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title"><span>Layout</span></div>
                                <a class="accordion-btn opened" data-toggle="collapse" data-target="#document-layout"
                                   data-parent="#panel-option-layout"></a></div>
                            <div id="document-layout" class="collapse in">
                                <div class="panel-body">
                                    <ul class="layout-style-list clearfix">
                                        <li data-layout="fullwidth"><img src="<?php echo $root; ?>assets/images/panel/fullwidth.png"
                                                                         alt="Fullwidth">

                                            <p>Fullwidth</p></li>
                                        <li data-layout="boxed"><img src="<?php echo $root; ?>assets/images/panel/boxed.png" alt="Boxed">

                                            <p>Boxed</p></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="panel-home">
                    <div id="panel-home-accordion" class="panel-group custom-accordion sm-accordion">
                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title"><span>Basic Color</span></div>
                                <a class="accordion-btn opened" data-toggle="collapse"
                                   data-target="#body-background-color" data-parent="#panel-home-accordion"></a></div>
                            <div id="body-background-color" class="collapse in">
                                <div class="panel-body">
                                    <div id="panel-color-picker"></div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title"><span>Patterns</span></div>
                                <a class="accordion-btn" data-toggle="collapse" data-target="#body-background-pattern"
                                   data-parent="#panel-home-accordion"></a></div>
                            <div id="body-background-pattern" class="collapse">
                                <div class="panel-body">
                                    <ul class="clearfix pattern-box-list">
                                        <li><img data-src="images/patterns/pattern1.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern1.png" alt="pattern 1"></li>
                                        <li><img data-src="images/patterns/pattern2.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern2.png" alt="pattern 2"></li>
                                        <li><img data-src="images/patterns/pattern3.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern3.png" alt="pattern 3"></li>
                                        <li><img data-src="images/patterns/pattern4.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern4.png" alt="pattern 4"></li>
                                        <li><img data-src="images/patterns/pattern5.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern5.png" alt="pattern 5"></li>
                                        <li><img data-src="images/patterns/pattern6.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern6.png" alt="pattern 6"></li>
                                        <li><img data-src="images/patterns/pattern7.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern7.png" alt="pattern 7"></li>
                                        <li><img data-src="images/patterns/pattern8.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern8.png" alt="pattern 8"></li>
                                        <li><img data-src="images/patterns/pattern9.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern9.png" alt="pattern 9"></li>
                                        <li><img data-src="images/patterns/pattern10.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern10.png" alt="pattern 10"></li>
                                        <li><img data-src="images/patterns/pattern11.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern11.png" alt="pattern 11"></li>
                                        <li><img data-src="images/patterns/pattern12.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern12.png" alt="pattern 12"></li>
                                        <li><img data-src="images/patterns/pattern13.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern13.png" alt="pattern 13"></li>
                                        <li><img data-src="images/patterns/pattern14.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern14.png" alt="pattern 14"></li>
                                        <li><img data-src="images/patterns/pattern15.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern15.png" alt="pattern 15"></li>
                                        <li><img data-src="images/patterns/pattern16.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern16.png" alt="pattern 16"></li>
                                        <li><img data-src="images/patterns/pattern17.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern17.png" alt="pattern 17"></li>
                                        <li><img data-src="images/patterns/pattern18.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern18.png" alt="pattern 18"></li>
                                        <li><img data-src="images/patterns/pattern19.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern19.png" alt="pattern 19"></li>
                                        <li><img data-src="images/patterns/pattern20.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern20.png" alt="pattern 20"></li>
                                        <li><img data-src="images/patterns/pattern21.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern21.png" alt="pattern 21"></li>
                                        <li><img data-src="images/patterns/pattern22.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern22.png" alt="pattern 22"></li>
                                        <li><img data-src="images/patterns/pattern23.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern23.png" alt="pattern 23"></li>
                                        <li><img data-src="images/patterns/pattern24.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern24.png" alt="pattern 24"></li>
                                        <li><img data-src="images/patterns/pattern25.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern25.png" alt="pattern 25"></li>
                                        <li><img data-src="images/patterns/pattern26.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern26.png" alt="pattern 26"></li>
                                        <li><img data-src="images/patterns/pattern27.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern27.png" alt="pattern 27"></li>
                                        <li><img data-src="images/patterns/pattern28.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern28.png" alt="pattern 28"></li>
                                        <li><img data-src="images/patterns/pattern29.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern29.png" alt="pattern 29"></li>
                                        <li><img data-src="images/patterns/pattern30.png"
                                                 src="<?php echo $root; ?>assets/images/patterns/pattern30.png" alt="pattern 30"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="panel-color">
                    <div id="panel-color-accordion" class="panel-group custom-accordion sm-accordion">
                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title"><span>Green Mode</span></div>
                                <a class="accordion-btn opened" data-toggle="collapse" data-target="#color-mode"
                                   data-parent="#panel-color-accordion"></a></div>
                            <ul class="colorbox-list clearfix collapse in" id="color-mode">
                                <li>
                                    <div class="color-box first-color"><span></span></div>
                                    <p>First Color</p></li>
                                <li>
                                    <div class="color-box second-color"><span></span></div>
                                    <p>Second Color</p></li>
                                <li>
                                    <div class="color-box third-color"><span></span></div>
                                    <p>Third Color</p></li>
                                <li>
                                    <div class="color-box fourth-color"><span></span></div>
                                    <p>Fourth Color</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="panel-font">
                    <div id="panel-font-accordion" class="panel-group custom-accordion sm-accordion">
                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title"><span>First Font</span></div>
                                <a class="accordion-btn opened" data-toggle="collapse"
                                   data-target="#first-font-container" data-parent="#panel-font-accordion"></a></div>
                            <div class="collapse in" id="first-font-container"><select class="form-control"
                                                                                       name="first-font"
                                                                                       id="first-font">
                                    <option value="Arial">Arial</option>
                                    <option value="Open Sans">Open Sans</option>
                                    <option value="PT Sans">PT Sans</option>
                                    <option value="Lato">Lato</option>
                                    <option value="Roboto">Roboto</option>
                                    <option value="Droid Sans">Droid Sans</option>
                                    <option value="Ubuntu">Ubuntu</option>
                                    <option value="Arvo">Arvo</option>
                                    <option value="Droid Serif">Ubuntu</option>
                                    <option value="Nunito">Nunito</option>
                                </select></div>
                        </div>
                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title"><span>Second Font</span></div>
                                <a class="accordion-btn" data-toggle="collapse" data-target="#second-font-container"
                                   data-parent="#panel-font-accordion"></a></div>
                            <div class="collapse" id="second-font-container"><select class="form-control"
                                                                                     name="second-font"
                                                                                     id="second-font">
                                    <option value="Oswald">Oswald</option>
                                    <option value="Gudea">Gudea</option>
                                    <option value="Open Sans">Open Sans</option>
                                    <option value="PT Sans">PT Sans</option>
                                    <option value="Lato">Lato</option>
                                    <option value="Roboto">Roboto</option>
                                    <option value="Droid Sans">Droid Sans</option>
                                    <option value="Ubuntu">Ubuntu</option>
                                    <option value="Arvo">Arvo</option>
                                    <option value="Droid Serif">Droid Serif</option>
                                    <option value="Nunito">Nunito</option>
                                </select></div>
                        </div>
                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title"><span>Third Font</span></div>
                                <a class="accordion-btn" data-toggle="collapse" data-target="#third-font-container"
                                   data-parent="#panel-font-accordion"></a></div>
                            <div class="collapse" id="third-font-container"><select class="form-control"
                                                                                    name="third-font" id="third-font">
                                    <option value="PT Sans">PT Sans</option>
                                    <option value="Gudea">Gudea</option>
                                    <option value="Open Sans">Open Sans</option>
                                    <option value="Lato">Lato</option>
                                    <option value="Roboto">Roboto</option>
                                    <option value="Droid Sans">Droid Sans</option>
                                    <option value="Ubuntu">Ubuntu</option>
                                    <option value="Arvo">Arvo</option>
                                    <option value="Droid Serif">Droid Serif</option>
                                    <option value="Nunito">Nunito</option>
                                </select></div>
                        </div>
                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title"><span>Fourth Font</span></div>
                                <a class="accordion-btn" data-toggle="collapse" data-target="#fourth-font-container"
                                   data-parent="#panel-font-accordion"></a></div>
                            <div class="collapse" id="fourth-font-container"><select class="form-control"
                                                                                     name="fourth-font"
                                                                                     id="fourth-font">
                                    <option value="Gudea">Gudea</option>
                                    <option value="Open Sans">Open Sans</option>
                                    <option value="PT Sans">PT Sans</option>
                                    <option value="Lato">Lato</option>
                                    <option value="Roboto">Roboto</option>
                                    <option value="Droid Sans">Droid Sans</option>
                                    <option value="Ubuntu">Ubuntu</option>
                                    <option value="Arvo">Arvo</option>
                                    <option value="Droid Serif">Droid Serif</option>
                                    <option value="Nunito">Nunito</option>
                                </select></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                            <tr>
                                <td class="item-name-col">
                                    <figure><a href="cart.html#"><img src="<?php echo $root; ?>assets/images/products/compare1.jpg"
                                                                      alt="Lowlands Lace Blouse"></a></figure>
                                    <header class="item-name"><a href="cart.html#">Lowlands Lace Blouse</a></header>
                                    <ul>
                                        <li>Color: White</li>
                                        <li>Size: SM</li>
                                    </ul>
                                </td>
                                <td class="item-code">MP125984154</td>
                                <td class="item-price-col"><span class="item-price-special">$1175</span></td>
                                <td>
                                    <div class="custom-quantity-input"><input type="text" name="quantity" value="1">
                                        <a href="cart.html#" onclick="return!1"
                                           class="quantity-btn quantity-input-up"><i class="fa fa-angle-up"></i></a>
                                        <a href="cart.html#" onclick="return!1"
                                           class="quantity-btn quantity-input-down"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </td>
                                <td class="item-total-col"><span class="item-price-special">$1175</span> <a
                                        href="cart.html#" class="close-button"></a></td>
                            </tr>
                            <tr>
                                <td class="item-name-col">
                                    <figure><a href="cart.html#"><img src="<?php echo $root; ?>assets/images/products/compare2.jpg"
                                                                      alt="Samsung Galaxy Ace"></a></figure>
                                    <header class="item-name"><a href="cart.html#">Samsung Galaxy Ace</a></header>
                                    <ul>
                                        <li>Color: Black</li>
                                        <li>Size: XL</li>
                                    </ul>
                                </td>
                                <td class="item-code">MP125984154</td>
                                <td class="item-price-col"><span class="item-price-special">$1475</span></td>
                                <td>
                                    <div class="custom-quantity-input"><input type="text" name="quantity" value="1">
                                        <a href="cart.html#" onclick="return!1"
                                           class="quantity-btn quantity-input-up"><i class="fa fa-angle-up"></i></a>
                                        <a href="cart.html#" onclick="return!1"
                                           class="quantity-btn quantity-input-down"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </td>
                                <td class="item-total-col"><span class="item-price-special">$1475</span> <a
                                        href="cart.html#" class="close-button"></a></td>
                            </tr>
                            <tr>
                                <td class="item-name-col">
                                    <figure><a href="cart.html#"><img src="<?php echo $root; ?>assets/images/products/compare3.jpg"
                                                                      alt="Iphone Case Cover Original"></a></figure>
                                    <header class="item-name"><a href="cart.html#">Iphone Case Cover Original</a>
                                    </header>
                                    <ul>
                                        <li>Color: White</li>
                                        <li>Size: SM</li>
                                    </ul>
                                </td>
                                <td class="item-code">MP125984154</td>
                                <td class="item-price-col"><span class="item-price-special">$399</span></td>
                                <td>
                                    <div class="custom-quantity-input"><input type="text" name="quantity" value="3">
                                        <a href="cart.html#" onclick="return!1"
                                           class="quantity-btn quantity-input-up"><i class="fa fa-angle-up"></i></a>
                                        <a href="cart.html#" onclick="return!1"
                                           class="quantity-btn quantity-input-down"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </td>
                                <td class="item-total-col"><span class="item-price-special">$1197</span> <a
                                        href="cart.html#" class="close-button"></a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="lg-margin"></div>
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12 lg-margin">
                        <div class="tab-container left clearfix">
                            <ul class="nav-tabs">
                                <li class="active"><a href="cart.html#shipping" data-toggle="tab">Shipping &amp;
                                        Taxes</a></li>
                                <li><a href="cart.html#discount" data-toggle="tab">Discount Code</a></li>
                                <li><a href="cart.html#gift" data-toggle="tab">Gift voucher</a></li>
                            </ul>
                            <div class="tab-content clearfix">
                                <div class="tab-pane active" id="shipping">
                                    <form action="cart.html#" id="shipping-form"><p class="shipping-desc">Enter your
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

                                    <form action="cart.html#">
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
                                <td>$434.50</td>
                            </tr>
                            <tr>
                                <td class="total-table-title">Shipping:</td>
                                <td>$6.00</td>
                            </tr>
                            <tr>
                                <td class="total-table-title">TAX (0%):</td>
                                <td>$0.00</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td>Total:</td>
                                <td>$440.50</td>
                            </tr>
                            </tfoot>
                        </table>
                        <div class="md-margin"></div>
                        <a href="cart.html#" class="btn btn-custom-2">CONTINUE SHOPPING</a> <a href="cart.html#"
                                                                                               class="btn btn-custom">CHECKOUT</a>
                    </div>
                </div>
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
                                <figure class="item-image-container"><a href="product.html"><img
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
                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>

                                <div class="item-action"><a href="cart.html#" class="item-add-btn"><span
                                            class="icon-cart-text">Add to Cart</span></a>

                                    <div class="item-action-inner"><a href="cart.html#"
                                                                      class="icon-button icon-like">Favourite</a> <a
                                            href="cart.html#" class="icon-button icon-compare">Checkout</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item item-hover">
                            <div class="item-image-wrapper">
                                <figure class="item-image-container"><a href="product.html"><img
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
                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>

                                <div class="item-action"><a href="cart.html#" class="item-add-btn"><span
                                            class="icon-cart-text">Add to Cart</span></a>

                                    <div class="item-action-inner"><a href="cart.html#"
                                                                      class="icon-button icon-like">Favourite</a> <a
                                            href="cart.html#" class="icon-button icon-compare">Checkout</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item item-hover">
                            <div class="item-image-wrapper">
                                <figure class="item-image-container"><a href="product.html"><img
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
                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>

                                <div class="item-action"><a href="cart.html#" class="item-add-btn"><span
                                            class="icon-cart-text">Add to Cart</span></a>

                                    <div class="item-action-inner"><a href="cart.html#"
                                                                      class="icon-button icon-like">Favourite</a> <a
                                            href="cart.html#" class="icon-button icon-compare">Checkout</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item item-hover">
                            <div class="item-image-wrapper">
                                <figure class="item-image-container"><a href="product.html"><img
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
                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>

                                <div class="item-action"><a href="cart.html#" class="item-add-btn"><span
                                            class="icon-cart-text">Add to Cart</span></a>

                                    <div class="item-action-inner"><a href="cart.html#"
                                                                      class="icon-button icon-like">Favourite</a> <a
                                            href="cart.html#" class="icon-button icon-compare">Checkout</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item item-hover">
                            <div class="item-image-wrapper">
                                <figure class="item-image-container"><a href="product.html"><img
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
                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>

                                <div class="item-action"><a href="cart.html#" class="item-add-btn"><span
                                            class="icon-cart-text">Add to Cart</span></a>

                                    <div class="item-action-inner"><a href="cart.html#"
                                                                      class="icon-button icon-like">Favourite</a> <a
                                            href="cart.html#" class="icon-button icon-compare">Checkout</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item item-hover">
                            <div class="item-image-wrapper">
                                <figure class="item-image-container"><a href="product.html"><img
                                            src="<?php echo $root; ?>assets/images/products/item7.jpg" alt="item1" class="item-image"> <img
                                            src="<?php echo $root; ?>assets/images/products/item7-hover.jpg" alt="item1  Hover"
                                            class="item-image-hover"></a></figure>
                                <div class="item-price-container"><span class="item-price">$280</span></div>
                            </div>
                            <div class="item-meta-container">
                                <div class="ratings-container"></div>
                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>

                                <div class="item-action"><a href="cart.html#" class="item-add-btn"><span
                                            class="icon-cart-text">Add to Cart</span></a>

                                    <div class="item-action-inner"><a href="cart.html#"
                                                                      class="icon-button icon-like">Favourite</a> <a
                                            href="cart.html#" class="icon-button icon-compare">Checkout</a></div>
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
