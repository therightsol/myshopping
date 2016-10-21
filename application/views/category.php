<?php

include 'inc/head.inc.php';
include 'inc/topbar.inc.php';
include 'inc/header.inc.php';
include 'inc/menu.inc.php';
include 'inc/panel.inc.php';

?>
<!DOCTYPE html>
<html>
<body>

<section id="content">
    <div id="category-header">
        <div class="row">
            <div class="container">
                <div class="col-2">
                    <div class="category-image"><img src="<?php echo $root; ?>assets/images/products/category-show.png" alt="Phone"
                                                     class="img-responsive"></div>
                </div>
                <div class="col-2 last">
                    <div class="category-title"><h2>Mobile</h2>

                        <p>Aenean dictum libero vitae magna sagittis, eu convallis dolor blandit. Fusce consectetur
                            tincidunt pretium. Etiam non tellus massa. Aenean tincidunt in augue nec tempus. Nulla
                            porta libero sit amet lorem pellentesque posuere...</p><a href="<?php echo $root; ?>category"
                                                                                      class="btn btn-custom">LEARN
                            MORE</a></div>
                </div>
            </div>
        </div>
    </div>
    <div id="category-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="<?php echo $root; ?>category">Electronics</a></li>
                <li class="active">Mobile</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-9 col-sm-8 col-xs-12 main-content">
                        <div class="category-toolbar clearfix">
                            <div class="toolbox-filter clearfix">
                                <div class="sort-box"><span class="separator">sort by:</span>

                                    <div class="btn-group select-dropdown">
                                        <button type="button" class="btn select-btn">Position</button>
                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i
                                                class="fa fa-angle-down"></i></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="<?php echo $root; ?>category">Date</a></li>
                                            <li><a href="<?php echo $root; ?>category">Name</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="view-box"><a href="<?php echo $root; ?>cstegory"
                                                         class="active icon-button icon-grid"><i
                                            class="fa fa-th-large"></i></a> <a href="category-list.html"
                                                                               class="icon-button icon-list"><i
                                            class="fa fa-th-list"></i></a></div>
                            </div>
                            <div class="toolbox-pagination clearfix">
                                <ul class="pagination">
                                    <li class="active"><a href="<?php echo $root; ?>category">1</a></li>
                                    <li><a href="<?php echo $root; ?>category">2</a></li>
                                    <li><a href="<?php echo $root; ?>category">3</a></li>
                                    <li><a href="<?php echo $root; ?>category">4</a></li>
                                    <li><a href="<?php echo $root; ?>category">5</a></li>
                                    <li><a href="<?php echo $root; ?>category"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                                <div class="view-count-box"><span class="separator">view:</span>

                                    <div class="btn-group select-dropdown">
                                        <button type="button" class="btn select-btn">10</button>
                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i
                                                class="fa fa-angle-down"></i></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="<?php echo $root; ?>category">15</a></li>
                                            <li><a href="<?php echo $root; ?>category">30</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-margin"></div>
                        <div class="category-item-container">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container"><a href="<?php echo $root; ?>products"><img
                                                        src="<?php echo $root; ?>assets/images/products/item2.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>assets/images/products/item2-hover.jpg" alt="item1  Hover"
                                                         class="item-image-hover"></a></figure>
                                            <div class="item-price-container"><span class="old-price">$210<span
                                                        class="sub-price">.99</span></span> <span class="item-price">$160<span
                                                        class="sub-price">.99</span></span></div>
                                            <span class="new-rect">New</span> <span
                                                class="discount-rect">-15%</span></div>
                                        <div class="item-meta-container">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="80"></div>
                                                </div>
                                                <span class="ratings-amount">5 Reviews</span></div>
                                            <h3 class="item-name"><a href="<?php echo $root; ?>products">Phasellus consequat</a>
                                            </h3>

                                            <div class="item-action"><a href="<?php echo $root; ?>category"
                                                                        class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                <div class="item-action-inner"><a href="<?php echo $root; ?>category"
                                                                                  class="icon-button icon-like">Favourite</a>
                                                    <a href="<?php echo $root; ?>category" class="icon-button icon-compare">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container"><a href="<?php echo $root; ?>products"><img
                                                        src="<?php echo $root; ?>assets/images/products/item1.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>assets/images/products/item1-hover.jpg" alt="item1  Hover"
                                                         class="item-image-hover"></a></figure>
                                            <div class="item-price-container"><span class="item-price">$199</span>
                                            </div>
                                            <span class="new-rect">New</span></div>
                                        <div class="item-meta-container">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="74"></div>
                                                </div>
                                                <span class="ratings-amount">9 Reviews</span></div>
                                            <h3 class="item-name"><a href="<?php echo $root; ?>products">Phasellus consequat</a>
                                            </h3>

                                            <div class="item-action"><a href="<?php echo $root; ?>category"
                                                                        class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                <div class="item-action-inner"><a href="<?php echo $root; ?>category"
                                                                                  class="icon-button icon-like">Favourite</a>
                                                    <a href="<?php echo $root; ?>category" class="icon-button icon-compare">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container"><a href="<?php echo $root; ?>products"><img
                                                        src="<?php echo $root; ?>assets/images/products/item4.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>assets/images/products/item4-hover.jpg" alt="item1  Hover"
                                                         class="item-image-hover"></a></figure>
                                            <div class="item-price-container"><span class="old-price">$120<span
                                                        class="sub-price">.99</span></span> <span class="item-price">$99<span
                                                        class="sub-price">.99</span></span></div>
                                            <span class="discount-rect">-25%</span></div>
                                        <div class="item-meta-container">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="90"></div>
                                                </div>
                                                <span class="ratings-amount">4 Reviews</span></div>
                                            <h3 class="item-name"><a href="<?php echo $root; ?>products">Phasellus consequat</a>
                                            </h3>

                                            <div class="item-action"><a href="<?php echo $root; ?>category"
                                                                        class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                <div class="item-action-inner"><a href="<?php echo $root; ?>category"
                                                                                  class="icon-button icon-like">Favourite</a>
                                                    <a href="<?php echo $root; ?>category" class="icon-button icon-compare">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container"><a href="<?php echo $root; ?>products"><img
                                                        src="<?php echo $root; ?>assets/images/products/item10.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>assets/images/products/item10-hover.jpg" alt="item1  Hover"
                                                         class="item-image-hover"></a></figure>
                                            <div class="item-price-container"><span class="item-price">$180<span
                                                        class="sub-price">.99</span></span></div>
                                        </div>
                                        <div class="item-meta-container">
                                            <div class="ratings-container"></div>
                                            <h3 class="item-name"><a href="<?php echo $root; ?>products">Phasellus consequat</a>
                                            </h3>

                                            <div class="item-action"><a href="<?php echo $root; ?>category"
                                                                        class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                <div class="item-action-inner"><a href="<?php echo $root; ?>category"
                                                                                  class="icon-button icon-like">Favourite</a>
                                                    <a href="<?php echo $root; ?>category" class="icon-button icon-compare">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container"><a href="<?php echo $root; ?>products"><img
                                                        src="<?php echo $root; ?>assets/images/products/item6.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>assets/images/products/item6-hover.jpg" alt="item1  Hover"
                                                         class="item-image-hover"></a></figure>
                                            <div class="item-price-container"><span class="old-price">$99<span
                                                        class="sub-price">.99</span></span> <span class="item-price">$84<span
                                                        class="sub-price">.99</span></span></div>
                                            <span class="discount-rect">-20%</span></div>
                                        <div class="item-meta-container">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="70"></div>
                                                </div>
                                                <span class="ratings-amount">6 Reviews</span></div>
                                            <h3 class="item-name"><a href="<?php echo $root; ?>products">Phasellus consequat</a>
                                            </h3>

                                            <div class="item-action"><a href="<?php echo $root; ?>category"
                                                                        class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                <div class="item-action-inner"><a href="<?php echo $root; ?>category"
                                                                                  class="icon-button icon-like">Favourite</a>
                                                    <a href="<?php echo $root; ?>category" class="icon-button icon-compare">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container"><a href="<?php echo $root; ?>products"><img
                                                        src="<?php echo $root; ?>assets/images/products/item9.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>assets/images/products/item9-hover.jpg" alt="item1  Hover"
                                                         class="item-image-hover"></a></figure>
                                            <div class="item-price-container"><span class="item-price">$49<span
                                                        class="sub-price">.99</span></span></div>
                                            <span class="new-rect">New</span></div>
                                        <div class="item-meta-container">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="60"></div>
                                                </div>
                                                <span class="ratings-amount">2 Reviews</span></div>
                                            <h3 class="item-name"><a href="<?php echo $root; ?>products">Phasellus consequat</a>
                                            </h3>

                                            <div class="item-action"><a href="<?php echo $root; ?>category"
                                                                        class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                <div class="item-action-inner"><a href="<?php echo $root; ?>category"
                                                                                  class="icon-button icon-like">Favourite</a>
                                                    <a href="<?php echo $root; ?>category" class="icon-button icon-compare">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container"><a href="<?php echo $root; ?>products"><img
                                                        src="<?php echo $root; ?>assets/images/products/item2.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>assets/images/products/item2-hover.jpg" alt="item1  Hover"
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
                                            <h3 class="item-name"><a href="<?php echo $root; ?>productsv">Phasellus consequat</a>
                                            </h3>

                                            <div class="item-action"><a href="<?php echo $root; ?>category"
                                                                        class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                <div class="item-action-inner"><a href="<?php echo $root; ?>category"
                                                                                  class="icon-button icon-like">Favourite</a>
                                                    <a href="<?php echo $root; ?>category" class="icon-button icon-compare">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container"><a href="<?php echo $root; ?>products"><img
                                                        src="<?php echo $root; ?>assets/images/products/item3.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>assets/images/products/item3-hover.jpg" alt="item1  Hover"
                                                         class="item-image-hover"></a></figure>
                                            <div class="item-price-container"><span class="item-price">$200</span>
                                            </div>
                                            <span class="discount-rect">-10%</span></div>
                                        <div class="item-meta-container">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="74"></div>
                                                </div>
                                                <span class="ratings-amount">9 Reviews</span></div>
                                            <h3 class="item-name"><a href="<?php echo $root; ?>products">Phasellus consequat</a>
                                            </h3>

                                            <div class="item-action"><a href="<?php echo $root; ?>category"
                                                                        class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                <div class="item-action-inner"><a href="<?php echo $root; ?>category"
                                                                                  class="icon-button icon-like">Favourite</a>
                                                    <a href="<?php echo $root; ?>category" class="icon-button icon-compare">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container"><a href="<?php echo $root; ?>products"><img
                                                        src="<?php echo $root; ?>assets/images/products/item5.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>assets/images/products/item5-hover.jpg" alt="item1  Hover"
                                                         class="item-image-hover"></a></figure>
                                            <div class="item-price-container"><span class="old-price">$120<span
                                                        class="sub-price">.99</span></span> <span class="item-price">$99<span
                                                        class="sub-price">.99</span></span></div>
                                            <span class="new-rect">New</span></div>
                                        <div class="item-meta-container">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="96"></div>
                                                </div>
                                                <span class="ratings-amount">5 Reviews</span></div>
                                            <h3 class="item-name"><a href="<?php echo $root; ?>products">Phasellus consequat</a>
                                            </h3>

                                            <div class="item-action"><a href="<?php echo $root; ?>category"
                                                                        class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                <div class="item-action-inner"><a href="<?php echo $root; ?>category"
                                                                                  class="icon-button icon-like">Favourite</a>
                                                    <a href="<?php echo $root; ?>category" class="icon-button icon-compare">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container"><a href="<?php echo $root; ?>products"><img
                                                        src="<?php echo $root; ?>assets/images/products/item3.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>assets/images/products/item3-hover.jpg" alt="item1  Hover"
                                                         class="item-image-hover"></a></figure>
                                            <div class="item-price-container"><span class="item-price">$99<span
                                                        class="sub-price">.99</span></span></div>
                                        </div>
                                        <div class="item-meta-container">
                                            <div class="ratings-container"></div>
                                            <h3 class="item-name"><a href="<?php echo $root; ?>products">Phasellus consequat</a>
                                            </h3>

                                            <div class="item-action"><a href="<?php echo $root; ?>category"
                                                                        class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                <div class="item-action-inner"><a href="<?php echo $root; ?>category"
                                                                                  class="icon-button icon-like">Favourite</a>
                                                    <a href="<?php echo $root; ?>category" class="icon-button icon-compare">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container"><a href="<?php echo $root; ?>products"><img
                                                        src="<?php echo $root; ?>assets/images/products/item7.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>assets/images/products/item7-hover.jpg" alt="item1  Hover"
                                                         class="item-image-hover"></a></figure>
                                            <div class="item-price-container"><span class="old-price">$99<span
                                                        class="sub-price">.99</span></span> <span class="item-price">$84<span
                                                        class="sub-price">.99</span></span></div>
                                            <span class="discount-rect">-30%</span></div>
                                        <div class="item-meta-container">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="70"></div>
                                                </div>
                                                <span class="ratings-amount">6 Reviews</span></div>
                                            <h3 class="item-name"><a href="<?php echo $root; ?>products">Phasellus consequat</a>
                                            </h3>

                                            <div class="item-action"><a href="<?php echo $root; ?>category"
                                                                        class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                <div class="item-action-inner"><a href="<?php echo $root; ?>category"
                                                                                  class="icon-button icon-like">Favourite</a>
                                                    <a href="<?php echo $root; ?>category" class="icon-button icon-compare">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container"><a href="<?php echo $root; ?>products"><img
                                                        src="<?php echo $root; ?>assets/images/products/item5.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>assets/images/products/item5-hover.jpg" alt="item1  Hover"
                                                         class="item-image-hover"></a></figure>
                                            <div class="item-price-container"><span class="item-price">$49<span
                                                        class="sub-price">.99</span></span></div>
                                        </div>
                                        <div class="item-meta-container">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="60"></div>
                                                </div>
                                                <span class="ratings-amount">2 Reviews</span></div>
                                            <h3 class="item-name"><a href="<?php echo $root; ?>products">Phasellus consequat</a>
                                            </h3>

                                            <div class="item-action"><a href="<?php echo $root; ?>category"
                                                                        class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                <div class="item-action-inner"><a href="<?php echo $root; ?>category"
                                                                                  class="icon-button icon-like">Favourite</a>
                                                    <a href="<?php echo $root; ?>category" class="icon-button icon-compare">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-container clearfix">
                            <div class="pull-right">
                                <ul class="pagination">
                                    <li class="active"><a href="<?php echo $root; ?>category">1</a></li>
                                    <li><a href="<?php echo $root; ?>category">2</a></li>
                                    <li><a href="<?php echo $root; ?>category">3</a></li>
                                    <li><a href="<?php echo $root; ?>category">4</a></li>
                                    <li><a href="<?php echo $root; ?>category">5</a></li>
                                    <li><a href="<?php echo $root; ?>category"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                            <div class="pull-right view-count-box hidden-xs"><span class="separator">view:</span>

                                <div class="btn-group select-dropdown">
                                    <button type="button" class="btn select-btn">10</button>
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i
                                            class="fa fa-angle-down"></i></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="<?php echo $root; ?>category">15</a></li>
                                        <li><a href="<?php echo $root; ?>category">30</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <aside class="col-md-3 col-sm-4 col-xs-12 sidebar">
                        <div class="widget">
                            <div class="panel-group custom-accordion sm-accordion" id="category-filter">
                                <div class="panel">
                                    <div class="accordion-header">
                                        <div class="accordion-title"><span>Category</span></div>
                                        <a class="accordion-btn opened" data-toggle="collapse"
                                           data-target="#category-list-1"></a></div>
                                    <div id="category-list-1" class="collapse in">
                                        <div class="panel-body">
                                            <ul class="category-filter-list jscrollpane">
                                                <li><a href="<?php echo $root; ?>category">Mobile Phones (341)</a></li>
                                                <li><a href="<?php echo $root; ?>category">Smartphones (55)</a></li>
                                                <li><a href="<?php echo $root; ?>category">Communicators (24)</a></li>
                                                <li><a href="<?php echo $root; ?>category">CDMA Phones (14)</a></li>
                                                <li><a href="<?php echo $root; ?>category">Accessories (83)</a></li>
                                                <li><a href="<?php echo $root; ?>category">Chargers (8)</a></li>
                                                <li><a href="<?php echo $root; ?>category">Memory Cards (6)</a></li>
                                                <li><a href="<?php echo $root; ?>category">Protectors (12)</a></li>
                                                <li><a href="<?php echo $root; ?>category">ravelsim (5)</a></li>
                                                <li><a href="<?php echo $root; ?>category">CDMA Phones (14)</a></li>
                                                <li><a href="<?php echo $root; ?>category">Accessories (83)</a></li>
                                                <li><a href="<?php echo $root; ?>category">Chargers (8)</a></li>
                                                <li><a href="<?php echo $root; ?>category">Memory Cards (6)</a></li>
                                                <li><a href="<?php echo $root; ?>category">Protectors (12)</a></li>
                                                <li><a href="<?php echo $root; ?>category">ravelsim (5)</a></li>
                                                <li><a href="<?php echo $root; ?>category">CDMA Phones (14)</a></li>
                                                <li><a href="<?php echo $root; ?>category">Accessories (83)</a></li>
                                                <li><a href="<?php echo $root; ?>category">Chargers (8)</a></li>
                                                <li><a href="<?php echo $root; ?>category">Memory Cards (6)</a></li>
                                                <li><a href="<?php echo $root; ?>category">Protectors (12)</a></li>
                                                <li><a href="<?php echo $root; ?>category">ravelsim (5)</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="accordion-header">
                                        <div class="accordion-title"><span>Brand</span></div>
                                        <a class="accordion-btn opened" data-toggle="collapse"
                                           data-target="#category-list-2"></a></div>
                                    <div id="category-list-2" class="collapse in">
                                        <div class="panel-body">
                                            <ul class="category-filter-list jscrollpane">
                                                <li><a href="<?php echo $root; ?>category">Samsung (50)</a></li>
                                                <li><a href="<?php echo $root; ?>category">Apple (80)</a></li>
                                                <li><a href="<?php echo $root; ?>category">HTC (20)</a></li>
                                                <li><a href="<?php echo $root; ?>category">Motoroloa (20)</a></li>
                                                <li><a href="<?php echo $root; ?>category">Nokia (11)</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="accordion-header">
                                        <div class="accordion-title"><span>Price</span></div>
                                        <a class="accordion-btn opened" data-toggle="collapse"
                                           data-target="#category-list-3"></a></div>
                                    <div id="category-list-3" class="collapse in">
                                        <div class="panel-body">
                                            <div id="price-range"></div>
                                            <div id="price-range-details"><span class="sm-separator">from</span>
                                                <input type="text" id="price-range-low" class="separator"> <span
                                                    class="sm-separator">to</span> <input type="text"
                                                                                          id="price-range-high">
                                            </div>
                                            <div id="price-range-btns"><a href="<?php echo $root; ?>category"
                                                                          class="btn btn-custom-2 btn-sm">Ok</a> <a
                                                    href="<?php echo $root; ?>category" class="btn btn-custom-2 btn-sm">Clear</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="accordion-header">
                                        <div class="accordion-title"><span>Color</span></div>
                                        <a class="accordion-btn opened" data-toggle="collapse"
                                           data-target="#category-list-4"></a></div>
                                    <div id="category-list-4" class="collapse in">
                                        <div class="panel-body">
                                            <ul class="filter-color-list clearfix">
                                                <li><a href="<?php echo $root; ?>category" data-bgcolor="#fff"
                                                       class="filter-color-box"></a></li>
                                                <li><a href="<?php echo $root; ?>category" data-bgcolor="#ffff33"
                                                       class="filter-color-box"></a></li>
                                                <li><a href="<?php echo $root; ?>category" data-bgcolor="#ff9900"
                                                       class="filter-color-box"></a></li>
                                                <li class="last-md"><a href="<?php echo $root; ?>category" data-bgcolor="#ff9999"
                                                                       class="filter-color-box"></a></li>
                                                <li class="last-lg"><a href="<?php echo $root; ?>category" data-bgcolor="#99cc33"
                                                                       class="filter-color-box"></a></li>
                                                <li><a href="<?php echo $root; ?>category" data-bgcolor="#339933"
                                                       class="filter-color-box"></a></li>
                                                <li><a href="<?php echo $root; ?>category" data-bgcolor="#ff0000"
                                                       class="filter-color-box"></a></li>
                                                <li class="last-md"><a href="<?php echo $root; ?>category" data-bgcolor="#ff3366"
                                                                       class="filter-color-box"></a></li>
                                                <li><a href="<?php echo $root; ?>category" data-bgcolor="#cc33ff"
                                                       class="filter-color-box"></a></li>
                                                <li class="last-lg"><a href="<?php echo $root; ?>category" data-bgcolor="#9966cc"
                                                                       class="filter-color-box"></a></li>
                                                <li><a href="<?php echo $root; ?>category" data-bgcolor="#99ccff"
                                                       class="filter-color-box"></a></li>
                                                <li class="last-md"><a href="<?php echo $root; ?>category" data-bgcolor="#3333cc"
                                                                       class="filter-color-box"></a></li>
                                                <li><a href="<?php echo $root; ?>category" data-bgcolor="#999999"
                                                       class="filter-color-box"></a></li>
                                                <li><a href="<?php echo $root; ?>category" data-bgcolor="#663300"
                                                       class="filter-color-box"></a></li>
                                                <li class="last-lg"><a href="<?php echo $root; ?>category" data-bgcolor="#000"
                                                                       class="filter-color-box"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget featured"><h3>Featured</h3>

                            <div class="featured-slider flexslider sidebarslider">
                                <ul class="featured-list clearfix">
                                    <li>
                                        <div class="featured-product clearfix">
                                            <figure><img src="<?php echo $root; ?>assets/images/products/thumbnails/item5.jpg" alt="item5">
                                            </figure>
                                            <h5><a href="<?php echo $root; ?>category">Jacket Suiting Blazer</a></h5>

                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="84"></div>
                                                </div>
                                            </div>
                                            <div class="featured-price">$40</div>
                                        </div>
                                        <div class="featured-product clearfix">
                                            <figure><img src="<?php echo $root; ?>assets/images/products/thumbnails/item1.jpg" alt="item1">
                                            </figure>
                                            <h5><a href="<?php echo $root; ?>category">Gap Graphic Cuffed</a></h5>

                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="84"></div>
                                                </div>
                                            </div>
                                            <div class="featured-price">$18</div>
                                        </div>
                                        <div class="featured-product clearfix">
                                            <figure><img src="<?php echo $root; ?>assets/images/products/thumbnails/item2.jpg" alt="item2">
                                            </figure>
                                            <h5><a href="<?php echo $root; ?>category">Women's Lauren Dress</a></h5>

                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="84"></div>
                                                </div>
                                            </div>
                                            <div class="featured-price">$30</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="featured-product clearfix">
                                            <figure><img src="<?php echo $root; ?>assets/images/products/thumbnails/item3.jpg" alt="item3">
                                            </figure>
                                            <h5><a href="<?php echo $root; ?>category">Swiss Mobile Phone</a></h5>

                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="64"></div>
                                                </div>
                                            </div>
                                            <div class="featured-price">$39</div>
                                        </div>
                                        <div class="featured-product clearfix">
                                            <figure><img src="<?php echo $root; ?>assets/images/products/thumbnails/item4.jpg" alt="item4">
                                            </figure>
                                            <h5><a href="<?php echo $root; ?>category">Zwinzed HeadPhones</a></h5>

                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="94"></div>
                                                </div>
                                            </div>
                                            <div class="featured-price">$18.99</div>
                                        </div>
                                        <div class="featured-product clearfix">
                                            <figure><img src="<?php echo $root; ?>assets/images/products/thumbnails/item7.jpg" alt="item7">
                                            </figure>
                                            <h5><a href="<?php echo $root; ?>category">Kless Man Suit</a></h5>

                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="74"></div>
                                                </div>
                                            </div>
                                            <div class="featured-price">$99</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="featured-product clearfix">
                                            <figure><img src="<?php echo $root; ?>assets/images/products/thumbnails/item4.jpg" alt="item4">
                                            </figure>
                                            <h5><a href="<?php echo $root; ?>category">Gap Graphic Cuffed</a></h5>

                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="84"></div>
                                                </div>
                                            </div>
                                            <div class="featured-price">$17</div>
                                        </div>
                                        <div class="featured-product clearfix">
                                            <figure><img src="<?php echo $root; ?>assets/images/products/thumbnails/item6.jpg" alt="item6">
                                            </figure>
                                            <h5><a href="<?php echo $root; ?>category">Women's Lauren Dress</a></h5>

                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="84"></div>
                                                </div>
                                            </div>
                                            <div class="featured-price">$30</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget banner-slider-container">
                            <div class="banner-slider flexslider">
                                <ul class="banner-slider-list clearfix">
                                    <li><a href="<?php echo $root; ?>category"><img src="<?php echo $root; ?>assets/images/banner1.jpg" alt="Banner 1"></a>
                                    </li>
                                    <li><a href="<?php echo $root; ?>category"><img src="<?php echo $root; ?>assets/images/banner2.jpg" alt="Banner 2"></a>
                                    </li>
                                    <li><a href="<?php echo $root; ?>category"><img src="<?php echo $root; ?>assets/images/banner3.jpg" alt="Banner 3"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>

<?php

include 'inc/footer.inc.php';
include 'inc/footerfiles.inc.php';

?>
