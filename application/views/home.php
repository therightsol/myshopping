<?php include 'inc/head.inc.php'; ?>

<body>
<!-- This is test by RAMISH AHMED BUTT -->
<?php include 'inc/topbar.inc.php'; ?>
<?php include 'inc/header.inc.php'; ?>
<?php include 'inc/menu.inc.php'; ?>
<?php include 'inc/slider.inc.php'; ?>
<?php $root = './assets/'; ?>
<div id="option-panel">
    <div id="option-panel-wrapper">
        <div id="option-panel-btn"></div>
        <div id="option-panel-container">
            <ul id="option-panel-tabs-container" class="clearfix">
                <li class="active"><a href="index.html#panel-layout" data-toggle="tab" data-panel-title="Layout"></a>
                </li>
                <li><a href="index.html#panel-home" data-toggle="tab" data-panel-title="Background Settings"></a></li>
                <li><a href="index.html#panel-color" data-toggle="tab" data-panel-title="Color Settings"></a></li>
                <li><a href="index.html#panel-font" data-toggle="tab" data-panel-title="Font Settings"></a></li>
                <li><a id="option-close" href="index.html#"></a></li>
            </ul>
            <div id="option-panel-title" class="clearfix"><span>Layout</span> <a href="index.html#"
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
                                        <li data-layout="fullwidth"><img src="<?php echo $root; ?>images/panel/fullwidth.png"
                                                                         alt="Fullwidth">

                                            <p>Fullwidth</p></li>
                                        <li data-layout="boxed"><img src="<?php echo $root; ?>images/panel/boxed.png" alt="Boxed">

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
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern1.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern1.png" alt="pattern 1"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern2.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern2.png" alt="pattern 2"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern3.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern3.png" alt="pattern 3"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern4.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern4.png" alt="pattern 4"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern5.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern5.png" alt="pattern 5"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern6.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern6.png" alt="pattern 6"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern7.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern7.png" alt="pattern 7"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern8.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern8.png" alt="pattern 8"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern9.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern9.png" alt="pattern 9"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern10.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern10.png" alt="pattern 10"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern11.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern11.png" alt="pattern 11"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern12.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern12.png" alt="pattern 12"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern13.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern13.png" alt="pattern 13"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern14.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern14.png" alt="pattern 14"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern15.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern15.png" alt="pattern 15"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern16.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern16.png" alt="pattern 16"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern17.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern17.png" alt="pattern 17"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern18.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern18.png" alt="pattern 18"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern19.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern19.png" alt="pattern 19"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern20.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern20.png" alt="pattern 20"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern21.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern21.png" alt="pattern 21"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern22.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern22.png" alt="pattern 22"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern23.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern23.png" alt="pattern 23"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern24.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern24.png" alt="pattern 24"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern25.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern25.png" alt="pattern 25"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern26.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern26.png" alt="pattern 26"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern27.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern27.png" alt="pattern 27"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern28.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern28.png" alt="pattern 28"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern29.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern29.png" alt="pattern 29"></li>
                                        <li><img data-src="<?php echo $root; ?>images/patterns/pattern30.png"
                                                 src="<?php echo $root; ?>images/patterns/pattern30.png" alt="pattern 30"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--This is just a test.. By Assad Khan-->

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
<div id="wrapper">

    <section id="content">

        <div class="md-margin2x"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-9 col-sm-8 col-xs-12 main-content">
                            <header class="content-title"><h2 class="title">Our Products</h2>

                                <p class="title-desc">Save your money and time with our store. Here\'s the best part of
                                    our impressive assortment.</p></header>
                            <ul id="products-tabs-list" class="tab-style-1 clearfix">
                                <li class="active"><a href="index.html#all" data-toggle="tab">All</a></li>
                                <li><a href="index.html#latest" data-toggle="tab">Latest</a></li>
                                <li><a href="index.html#featured" data-toggle="tab">Featured</a></li>
                                <li><a href="index.html#bestsellers" data-toggle="tab">Bestsellers</a></li>
                                <li><a href="index.html#special" data-toggle="tab">Special</a></li>
                            </ul>
                            <div id="products-tabs-content" class="row tab-content">
                                <div class="tab-pane active" id="all">
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item5.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item5-hover.jpg" alt="item1  Hover"
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
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item6.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item6-hover.jpg" alt="item1  Hover"
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
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item7.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item7-hover.jpg" alt="item1  Hover"
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
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item10.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item10-hover.jpg" alt="item1  Hover"
                                                         class="item-image-hover"></a></figure>
                                                <div class="item-price-container"><span class="item-price">$180<span
                                                        class="sub-price">.99</span></span></div>
                                            </div>
                                            <div class="item-meta-container">
                                                <div class="ratings-container"></div>
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item8.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item8-hover.jpg" alt="item1  Hover"
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
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item9.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item9-hover.jpg" alt="item1  Hover"
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
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="latest">
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item2.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item2-hover.jpg" alt="item1  Hover"
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
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item3.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item3-hover.jpg" alt="item1  Hover"
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
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item5.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item5-hover.jpg" alt="item1  Hover"
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
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item3.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item3-hover.jpg" alt="item1  Hover"
                                                         class="item-image-hover"></a></figure>
                                                <div class="item-price-container"><span class="item-price">$99<span
                                                        class="sub-price">.99</span></span></div>
                                            </div>
                                            <div class="item-meta-container">
                                                <div class="ratings-container"></div>
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item7.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item7-hover.jpg" alt="item1  Hover"
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
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item5.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item5-hover.jpg" alt="item1  Hover"
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
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="featured">
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item1.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item1-hover.jpg" alt="item1  Hover"
                                                         class="item-image-hover"></a></figure>
                                                <div class="item-price-container"><span class="old-price">$210<span
                                                        class="sub-price">.99</span></span> <span class="item-price">$140<span
                                                        class="sub-price">.99</span></span></div>
                                                <span class="new-rect">New</span> <span
                                                    class="discount-rect">-25%</span></div>
                                            <div class="item-meta-container">
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="50"></div>
                                                    </div>
                                                    <span class="ratings-amount">3 Reviews</span></div>
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item4.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item4-hover.jpg" alt="item1  Hover"
                                                         class="item-image-hover"></a></figure>
                                                <div class="item-price-container"><span class="item-price">$399</span>
                                                </div>
                                                <span class="new-rect">New</span></div>
                                            <div class="item-meta-container">
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="100"></div>
                                                    </div>
                                                    <span class="ratings-amount">7 Reviews</span></div>
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item8.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item8-hover.jpg" alt="item1  Hover"
                                                         class="item-image-hover"></a></figure>
                                                <div class="item-price-container"><span class="old-price">$120<span
                                                        class="sub-price">.99</span></span> <span class="item-price">$89<span
                                                        class="sub-price">.99</span></span></div>
                                                <span class="discount-rect">-35%</span></div>
                                            <div class="item-meta-container">
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="50"></div>
                                                    </div>
                                                    <span class="ratings-amount">2 Reviews</span></div>
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item10.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item10-hover.jpg" alt="item1  Hover"
                                                         class="item-image-hover"></a></figure>
                                                <div class="item-price-container"><span class="item-price">$180<span
                                                        class="sub-price">.99</span></span></div>
                                            </div>
                                            <div class="item-meta-container">
                                                <div class="ratings-container"></div>
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item6.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item6-hover.jpg" alt="item1  Hover"
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
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item5.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item5-hover.jpg" alt="item1  Hover"
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
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="bestsellers">
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item3.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item3-hover.jpg" alt="item1  Hover"
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
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item4.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item4-hover.jpg" alt="item1  Hover"
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
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item2.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item2-hover.jpg" alt="item1  Hover"
                                                         class="item-image-hover"></a></figure>
                                                <div class="item-price-container"><span class="old-price">$180<span
                                                        class="sub-price">.99</span></span> <span class="item-price">$99<span
                                                        class="sub-price">.99</span></span></div>
                                                <span class="discount-rect">-50%</span></div>
                                            <div class="item-meta-container">
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="90"></div>
                                                    </div>
                                                    <span class="ratings-amount">4 Reviews</span></div>
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item9.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item9-hover.jpg" alt="item1  Hover"
                                                         class="item-image-hover"></a></figure>
                                                <div class="item-price-container"><span class="item-price">$180<span
                                                        class="sub-price">.99</span></span></div>
                                            </div>
                                            <div class="item-meta-container">
                                                <div class="ratings-container"></div>
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item5.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item5-hover.jpg" alt="item1  Hover"
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
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item3.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item3-hover.jpg" alt="item1  Hover"
                                                         class="item-image-hover"></a></figure>
                                                <div class="item-price-container"><span class="item-price">$99<span
                                                        class="sub-price">.99</span></span></div>
                                                <span class="new-rect">New</span></div>
                                            <div class="item-meta-container">
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="60"></div>
                                                    </div>
                                                    <span class="ratings-amount">2 Reviews</span></div>
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="special">
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item2.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item2-hover.jpg" alt="item1  Hover"
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
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item1.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item1-hover.jpg" alt="item1  Hover"
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
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item4.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item4-hover.jpg" alt="item1  Hover"
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
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item10.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item10-hover.jpg" alt="item1  Hover"
                                                         class="item-image-hover"></a></figure>
                                                <div class="item-price-container"><span class="item-price">$180<span
                                                        class="sub-price">.99</span></span></div>
                                            </div>
                                            <div class="item-meta-container">
                                                <div class="ratings-container"></div>
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item6.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item6-hover.jpg" alt="item1  Hover"
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
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container"><a href="product.html"><img
                                                        src="<?php echo $root; ?>images/products/item9.jpg" alt="item1" class="item-image">
                                                    <img src="<?php echo $root; ?>images/products/item9-hover.jpg" alt="item1  Hover"
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
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a>
                                                </h3>

                                                <div class="item-action"><a href="index.html#"
                                                                            class="item-add-btn"><span
                                                        class="icon-cart-text">Add to Cart</span></a>

                                                    <div class="item-action-inner"><a href="index.html#"
                                                                                      class="icon-button icon-like">Favourite</a>
                                                        <a href="index.html#"
                                                           class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sm-margin"></div>
                            <div class="row">
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <header class="content-title"><h2 class="title">Welcome to Venedor</h2></header>
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Venedor is a fully responsive Magento theme with
                                        advanced admin module. Based on Bootstrap’s 12 column 1200px responsive grid
                                        Theme. Great looks on desktops, tablets and mobiles.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Venedor
                                        is extremely customizable, easy to use and fully responsive. Suitable for every
                                        type of store. Great as a starting point for your custom projects. This theme
                                        includes several extensions including ajax price slider that will help you
                                        improve your sales. We supply a full help with our products and after purchase
                                        support to all our customers. <a href="index.html#">Buy Venedor Theme!</a></p>
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="sm-margin visible-xs"></div>
                                    <img src="<?php echo $root; ?>images/showcase.png" alt="Showcase Venedor" class="img-responsive"></div>
                            </div>
                            <div class="xlg-margin"></div>
                            <div class="hot-items carousel-wrapper">
                                <header class="content-title">
                                    <div class="title-bg"><h2 class="title">On Sale</h2></div>
                                    <p class="title-desc">Only with us you can get a new model with a discount.</p>
                                </header>
                                <div class="carousel-controls">
                                    <div id="hot-items-slider-prev" class="carousel-btn carousel-btn-prev"></div>
                                    <div id="hot-items-slider-next"
                                         class="carousel-btn carousel-btn-next carousel-space"></div>
                                </div>
                                <div class="hot-items-slider owl-carousel">
                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container"><a href="product.html"><img
                                                    src="<?php echo $root; ?>images/products/item2.jpg" alt="item1" class="item-image"> <img
                                                    src="<?php echo $root; ?>images/products/item2-hover.jpg" alt="item1  Hover"
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

                                            <div class="item-action"><a href="index.html#" class="item-add-btn"><span
                                                    class="icon-cart-text">Add to Cart</span></a>

                                                <div class="item-action-inner"><a href="index.html#"
                                                                                  class="icon-button icon-like">Favourite</a>
                                                    <a href="index.html#" class="icon-button icon-compare">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container"><a href="product.html"><img
                                                    src="<?php echo $root; ?>images/products/item3.jpg" alt="item1" class="item-image"> <img
                                                    src="<?php echo $root; ?>images/products/item3-hover.jpg" alt="item1  Hover"
                                                    class="item-image-hover"></a></figure>
                                            <div class="item-price-container"><span class="item-price">$100</span></div>
                                            <span class="new-rect">New</span></div>
                                        <div class="item-meta-container">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="99"></div>
                                                </div>
                                                <span class="ratings-amount">4 Reviews</span></div>
                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>

                                            <div class="item-action"><a href="index.html#" class="item-add-btn"><span
                                                    class="icon-cart-text">Add to Cart</span></a>

                                                <div class="item-action-inner"><a href="index.html#"
                                                                                  class="icon-button icon-like">Favourite</a>
                                                    <a href="index.html#" class="icon-button icon-compare">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container"><a href="product.html"><img
                                                    src="<?php echo $root; ?>images/products/item8.jpg" alt="item1" class="item-image"> <img
                                                    src="<?php echo $root; ?>images/products/item8-hover.jpg" alt="item1  Hover"
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

                                            <div class="item-action"><a href="index.html#" class="item-add-btn"><span
                                                    class="icon-cart-text">Add to Cart</span></a>

                                                <div class="item-action-inner"><a href="index.html#"
                                                                                  class="icon-button icon-like">Favourite</a>
                                                    <a href="index.html#" class="icon-button icon-compare">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container"><a href="product.html"><img
                                                    src="<?php echo $root; ?>images/products/item5.jpg" alt="item1" class="item-image"> <img
                                                    src="<?php echo $root; ?>images/products/item5-hover.jpg" alt="item1  Hover"
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

                                            <div class="item-action"><a href="index.html#" class="item-add-btn"><span
                                                    class="icon-cart-text">Add to Cart</span></a>

                                                <div class="item-action-inner"><a href="index.html#"
                                                                                  class="icon-button icon-like">Favourite</a>
                                                    <a href="index.html#" class="icon-button icon-compare">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container"><a href="product.html"><img
                                                    src="<?php echo $root; ?>images/products/item7.jpg" alt="item1" class="item-image"> <img
                                                    src="<?php echo $root; ?>images/products/item7-hover.jpg" alt="item1  Hover"
                                                    class="item-image-hover"></a></figure>
                                            <div class="item-price-container"><span class="item-price">$280</span></div>
                                        </div>
                                        <div class="item-meta-container">
                                            <div class="ratings-container"></div>
                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>

                                            <div class="item-action"><a href="index.html#" class="item-add-btn"><span
                                                    class="icon-cart-text">Add to Cart</span></a>

                                                <div class="item-action-inner"><a href="index.html#"
                                                                                  class="icon-button icon-like">Favourite</a>
                                                    <a href="index.html#" class="icon-button icon-compare">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lg-margin"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12 sidebar">
                            <div class="widget subscribe"><h3>BE THE FIRST TO KNOW</h3>

                                <p>Get all the latest information on Events, Sales and Offers. Sign up for the Venedor
                                    store newsletter today.</p>

                                <form action="index.html#" id="subscribe-form">
                                    <div class="form-group"><input type="email" class="form-control"
                                                                   id="subscribe-email"
                                                                   placeholder="Enter your email address"></div>
                                    <input type="submit" value="SUBMIT" class="btn btn-custom"></form>
                            </div>
                            <div class="widget testimonials"><h3>Testimonials</h3>

                                <div class="testimonials-slider flexslider sidebarslider">
                                    <ul class="testimonials-list clearfix">
                                        <li>
                                            <div class="testimonial-details">
                                                <header>Best Service!</header>
                                                Maecenas semper aliquam massa. Praesent pharetra sem vitae nisi eleifend
                                                molestie. Aliquam molestie scelerisque ultricies. Suspendisse potenti.
                                            </div>
                                            <figure class="clearfix"><img src="<?php echo $root; ?>images/testimonials/anna.jpg"
                                                                          alt="Computer Ceo">
                                                <figcaption><a href="index.html#">Anna Retallic</a>
                                                    <span>12.05.2013</span></figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <div class="testimonial-details">
                                                <header>Cool Style!</header>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt iure
                                                quisquam necessitatibus fugit! Nisi tempora reiciendis omnis error
                                                sapiente ipsam maiores dolorem maxime.
                                            </div>
                                            <figure class="clearfix"><img src="<?php echo $root; ?>images/testimonials/jake.jpg"
                                                                          alt="Computer Ceo">
                                                <figcaption><a href="index.html#">Jake Suasoo</a>
                                                    <span>17.05.2013</span></figcaption>
                                            </figure>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget latest-posts"><h3>Latest News</h3>

                                <div class="latest-posts-slider flexslider sidebarslider">
                                    <ul class="latest-posts-list clearfix">
                                        <li><a href="single.html">
                                            <figure class="latest-posts-media-container"><img class="img-responsive"
                                                                                              src="<?php echo $root; ?>images/blog/post1-small.jpg"
                                                                                              alt="lats post"></figure>
                                        </a><h4><a href="single.html">35% Discount on second purchase!</a></h4>

                                            <p>Sed blandit nulla nec nunc ullamcorper tristique. Mauris adipiscing
                                                cursus ante ultricies dictum sed lobortis.</p>

                                            <div class="latest-posts-meta-container clearfix">
                                                <div class="pull-left"><a href="index.html#">Read More...</a></div>
                                                <div class="pull-right">12.05.2013</div>
                                            </div>
                                        </li>
                                        <li><a href="single.html">
                                            <figure class="latest-posts-media-container"><img class="img-responsive"
                                                                                              src="<?php echo $root; ?>images/blog/post2-small.jpg"
                                                                                              alt="lats post"></figure>
                                        </a><h4><a href="single.html">Free shipping for regular customers.</a></h4>

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque fuga
                                                officia in molestiae easint..</p>

                                            <div class="latest-posts-meta-container clearfix">
                                                <div class="pull-left"><a href="index.html#">Read More...</a></div>
                                                <div class="pull-right">10.05.2013</div>
                                            </div>
                                        </li>
                                        <li><a href="single.html">
                                            <figure class="latest-posts-media-container"><img class="img-responsive"
                                                                                              src="<?php echo $root; ?>images/blog/post3-small.jpg"
                                                                                              alt="lats post"></figure>
                                        </a><h4><a href="index.html#">New jeans on sales!</a></h4>

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque fuga
                                                officia in molestiae easint..</p>

                                            <div class="latest-posts-meta-container clearfix">
                                                <div class="pull-left"><a href="index.html#">Read More...</a></div>
                                                <div class="pull-right">8.05.2013</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget banner-slider-container">
                                <div class="banner-slider flexslider">
                                    <ul class="banner-slider-list clearfix">
                                        <li><a href="index.html#"><img src="<?php echo $root; ?>images/banner1.jpg" alt="Banner 1"></a></li>
                                        <li><a href="index.html#"><img src="<?php echo $root; ?>images/banner2.jpg" alt="Banner 2"></a></li>
                                        <li><a href="index.html#"><img src="<?php echo $root; ?>images/banner3.jpg" alt="Banner 3"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="brand-slider-container" class="carousel-wrapper">
                        <header class="content-title">
                            <div class="title-bg"><h2 class="title">Manufacturers</h2></div>
                        </header>
                        <div class="carousel-controls">
                            <div id="brand-slider-prev" class="carousel-btn carousel-btn-prev"></div>
                            <div id="brand-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div>
                        </div>
                        <div class="sm-margin"></div>
                        <div class="row">
                            <div class="brand-slider owl-carousel"><a href="index.html#"><img
                                    src="<?php echo $root; ?>images/brands/brand-logo.png" alt="Brand Logo 1"></a> <a
                                    href="index.html#"><img src="<?php echo $root; ?>images/brands/brand-logo.png" alt="Brand Logo 2"></a>
                                <a href="index.html#"><img src="<?php echo $root; ?>images/brands/brand-logo.png" alt="Brand Logo 3"></a> <a
                                        href="index.html#"><img src="<?php echo $root; ?>images/brands/brand-logo.png"
                                                                alt="Brand Logo 4"></a> <a href="index.html#"><img
                                        src="<?php echo $root; ?>images/brands/brand-logo.png" alt="Brand Logo 5"></a> <a
                                        href="index.html#"><img src="<?php echo $root; ?>images/brands/brand-logo.png"
                                                                alt="Brand Logo 6"></a> <a href="index.html#"><img
                                        src="<?php echo $root; ?>images/brands/brand-logo.png" alt="Brand Logo 7"></a> <a
                                        href="index.html#"><img src="<?php echo $root; ?>images/brands/brand-logo.png"
                                                                alt="Brand Logo 8"></a> <a href="index.html#"><img
                                        src="<?php echo $root; ?>images/brands/brand-logo.png" alt="Brand Logo 9"></a> <a
                                        href="index.html#"><img src="<?php echo $root; ?>images/brands/brand-logo.png" alt="Brand Logo 10"></a>
                                <a href="index.html#"><img src="<?php echo $root; ?>images/brands/brand-logo.png" alt="Brand Logo 11"></a>
                                <a href="index.html#"><img src="<?php echo $root; ?>images/brands/brand-logo.png" alt="Brand Logo 12"></a>
                                <a href="index.html#"><img src="<?php echo $root; ?>images/brands/brand-logo.png" alt="Brand Logo 13"></a>
                                <a href="index.html#"><img src="<?php echo $root; ?>images/brands/brand-logo.png" alt="Brand Logo 14"></a>
                                <a href="index.html#"><img src="<?php echo $root; ?>images/brands/brand-logo.png" alt="Brand Logo 15"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

</body>


<?php
    include 'inc/footer.inc.php';
    include 'inc/footerfiles.inc.php';
?>
</html>

