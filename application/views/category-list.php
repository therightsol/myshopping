<?php include 'inc/head.inc.php'; ?>
<?php include 'inc/topbar.inc.php'; ?>
<?php include 'inc/header.inc.php'; ?>
<?php include 'inc/menu.inc.php'; ?>

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
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern1.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern1.png" alt="pattern 1"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern2.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern2.png" alt="pattern 2"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern3.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern3.png" alt="pattern 3"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern4.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern4.png" alt="pattern 4"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern5.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern5.png" alt="pattern 5"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern6.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern6.png" alt="pattern 6"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern7.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern7.png" alt="pattern 7"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern8.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern8.png" alt="pattern 8"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern9.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern9.png" alt="pattern 9"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern10.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern10.png" alt="pattern 10"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern11.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern11.png" alt="pattern 11"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern12.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern12.png" alt="pattern 12"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern13.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern13.png" alt="pattern 13"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern14.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern14.png" alt="pattern 14"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern15.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern15.png" alt="pattern 15"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern16.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern16.png" alt="pattern 16"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern17.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern17.png" alt="pattern 17"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern18.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern18.png" alt="pattern 18"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern19.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern19.png" alt="pattern 19"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern20.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern20.png" alt="pattern 20"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern21.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern21.png" alt="pattern 21"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern22.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern22.png" alt="pattern 22"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern23.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern23.png" alt="pattern 23"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern24.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern24.png" alt="pattern 24"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern25.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern25.png" alt="pattern 25"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern26.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern26.png" alt="pattern 26"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern27.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern27.png" alt="pattern 27"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern28.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern28.png" alt="pattern 28"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern29.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern29.png" alt="pattern 29"></li>
                                        <li><img data-src="<?php echo $root ; ?>assets/images/patterns/pattern30.png"
                                                 src="<?php echo $root ; ?>assets/images/patterns/pattern30.png" alt="pattern 30"></li>
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
                            porta libero sit amet lorem pellentesque posuere...</p><a href="category-list.html#"
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
                <li><a href="category-list.html#">Electronics</a></li>
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
                                            <li><a href="category-list.html#">Date</a></li>
                                            <li><a href="category-list.html#">Name</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="view-box"><a href="category.html" class="icon-button icon-grid"><i
                                            class="fa fa-th-large"></i></a> <a href="category-list.html"
                                                                               class="active icon-button icon-list"><i
                                            class="fa fa-th-list"></i></a></div>
                            </div>
                            <div class="toolbox-pagination clearfix">
                                <ul class="pagination">
                                    <li class="active"><a href="category-list.html#">1</a></li>
                                    <li><a href="category-list.html#">2</a></li>
                                    <li><a href="category-list.html#">3</a></li>
                                    <li><a href="category-list.html#">4</a></li>
                                    <li><a href="category-list.html#">5</a></li>
                                    <li><a href="category-list.html#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                                <div class="view-count-box"><span class="separator">view:</span>

                                    <div class="btn-group select-dropdown">
                                        <button type="button" class="btn select-btn">10</button>
                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i
                                                class="fa fa-angle-down"></i></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="category-list.html#">15</a></li>
                                            <li><a href="category-list.html#">30</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-margin"></div>
                        <div class="category-item-container category-list-container">
                            <div class="item item-list clearfix">
                                <div class="item-image-container">
                                    <figure><a href="product.html"><img src="<?php echo $root; ?>assets/images/products/item1.jpg" alt="item1"
                                                                        class="item-image"> <img
                                                src="<?php echo $root; ?>assets/images/products/item1-hover.jpg" alt="item1  Hover"
                                                class="item-image-hover"></a></figure>
                                    <div class="item-price-container"><span class="old-price">$210<span
                                                class="sub-price">.99</span></span> <span class="item-price">$160<span
                                                class="sub-price">.99</span></span></div>
                                    <span class="new-rect">New</span> <span class="discount-rect">-15%</span></div>
                                <div class="item-meta-container"><h3 class="item-name"><a href="product.html">Phasellus
                                            consequat</a></h3>

                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-result" data-result="70"></div>
                                        </div>
                                        <span class="ratings-amount">3 Reviews</span></div>
                                    <p>Nulla nunc turpis, semper a est ut, commodo rutrum nunc. Nullam pellentesque
                                        sed lacus a condimentum. Vivamus pretium tempus fermentum. Suspendisse quis
                                        urna posuere, vestibulum enim sit amet, mollis augue. Fusce eu fermentum
                                        nunc. Pellentesque a volutpat ipsum...</p>

                                    <div class="item-action"><a href="category-list.html#"
                                                                class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>

                                        <div class="item-action-inner"><a href="category-list.html#"
                                                                          class="icon-button icon-like">Favourite</a>
                                            <a href="category-list.html#"
                                               class="icon-button icon-compare">Checkout</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item item-list clearfix">
                                <div class="item-image-container">
                                    <figure><a href="product.html"><img src="<?php echo $root; ?>assets/images/products/item5.jpg"
                                                                        alt="Phone 2" class="item-image"> <img
                                                src="<?php echo $root; ?>assets/images/products/item5-hover.jpg" alt="Phone 2 Hover"
                                                class="item-image-hover"></a></figure>
                                    <div class="item-price-container"><span class="item-price">$199</span></div>
                                    <span class="discount-rect">-30%</span></div>
                                <div class="item-meta-container"><h3 class="item-name"><a href="product.html">Phasellus
                                            consequat</a></h3>

                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-result" data-result="80"></div>
                                        </div>
                                        <span class="ratings-amount">3 Reviews</span></div>
                                    <p>Nulla nunc turpis, semper a est ut, commodo rutrum nunc. Nullam pellentesque
                                        sed lacus a condimentum. Vivamus pretium tempus fermentum. Suspendisse quis
                                        urna posuere, vestibulum enim sit amet, mollis augue. Fusce eu fermentum
                                        nunc. Pellentesque a volutpat ipsum...</p>

                                    <div class="item-action"><a href="category-list.html#"
                                                                class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>

                                        <div class="item-action-inner"><a href="category-list.html#"
                                                                          class="icon-button icon-like">Favourite</a>
                                            <a href="category-list.html#"
                                               class="icon-button icon-compare">Checkout</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item item-list clearfix">
                                <div class="item-image-container">
                                    <figure><a href="product.html"><img src="<?php echo $root; ?>assets/images/products/item4.jpg" alt="Item 4"
                                                                        class="item-image"> <img
                                                src="<?php echo $root; ?>assets/images/products/item4-hover.jpg" alt="Item 4 Hover"
                                                class="item-image-hover"></a></figure>
                                    <div class="item-price-container"><span class="item-price">$99<span
                                                class="sub-price">.75</span></span></div>
                                    <span class="new-rect">New</span></div>
                                <div class="item-meta-container"><h3 class="item-name"><a href="product.html">Phasellus
                                            consequat</a></h3>

                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-result" data-result="80"></div>
                                        </div>
                                        <span class="ratings-amount">3 Reviews</span></div>
                                    <p>Nulla nunc turpis, semper a est ut, commodo rutrum nunc. Nullam pellentesque
                                        sed lacus a condimentum. Vivamus pretium tempus fermentum. Suspendisse quis
                                        urna posuere, vestibulum enim sit amet, mollis augue. Fusce eu fermentum
                                        nunc. Pellentesque a volutpat ipsum...</p>

                                    <div class="item-action"><a href="category-list.html#"
                                                                class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>

                                        <div class="item-action-inner"><a href="category-list.html#"
                                                                          class="icon-button icon-like">Favourite</a>
                                            <a href="category-list.html#"
                                               class="icon-button icon-compare">Checkout</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item item-list clearfix">
                                <div class="item-image-container">
                                    <figure><a href="product.html"><img src="<?php echo $root; ?>assets/images/products/item3.jpg" alt="Item 3"
                                                                        class="item-image"> <img
                                                src="<?php echo $root; ?>assets/images/products/item3-hover.jpg" alt="Item 3 Hover"
                                                class="item-image-hover"></a></figure>
                                    <div class="item-price-container"><span class="item-price">$99<span
                                                class="sub-price">.75</span></span></div>
                                </div>
                                <div class="item-meta-container"><h3 class="item-name"><a href="product.html">Phasellus
                                            consequat</a></h3>

                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-result" data-result="80"></div>
                                        </div>
                                        <span class="ratings-amount">3 Reviews</span></div>
                                    <p>Nulla nunc turpis, semper a est ut, commodo rutrum nunc. Nullam pellentesque
                                        sed lacus a condimentum. Vivamus pretium tempus fermentum. Suspendisse quis
                                        urna posuere, vestibulum enim sit amet, mollis augue. Fusce eu fermentum
                                        nunc. Pellentesque a volutpat ipsum...</p>

                                    <div class="item-action"><a href="category-list.html#"
                                                                class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>

                                        <div class="item-action-inner"><a href="category-list.html#"
                                                                          class="icon-button icon-like">Favourite</a>
                                            <a href="category-list.html#"
                                               class="icon-button icon-compare">Checkout</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item item-list clearfix">
                                <div class="item-image-container">
                                    <figure><a href="product.html"><img src="<?php echo $root; ?>assets/images/products/item8.jpg" alt="item1"
                                                                        class="item-image"> <img
                                                src="<?php echo $root; ?>assets/images/products/item8-hover.jpg" alt="item1  Hover"
                                                class="item-image-hover"></a></figure>
                                    <div class="item-price-container"><span class="old-price">$210<span
                                                class="sub-price">.99</span></span> <span class="item-price">$160<span
                                                class="sub-price">.99</span></span></div>
                                    <span class="new-rect">New</span> <span class="discount-rect">-15%</span></div>
                                <div class="item-meta-container"><h3 class="item-name"><a href="product.html">Phasellus
                                            consequat</a></h3>

                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-result" data-result="70"></div>
                                        </div>
                                        <span class="ratings-amount">3 Reviews</span></div>
                                    <p>Nulla nunc turpis, semper a est ut, commodo rutrum nunc. Nullam pellentesque
                                        sed lacus a condimentum. Vivamus pretium tempus fermentum. Suspendisse quis
                                        urna posuere, vestibulum enim sit amet, mollis augue. Fusce eu fermentum
                                        nunc. Pellentesque a volutpat ipsum...</p>

                                    <div class="item-action"><a href="category-list.html#"
                                                                class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>

                                        <div class="item-action-inner"><a href="category-list.html#"
                                                                          class="icon-button icon-like">Favourite</a>
                                            <a href="category-list.html#"
                                               class="icon-button icon-compare">Checkout</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item item-list clearfix">
                                <div class="item-image-container">
                                    <figure><a href="product.html"><img src="<?php echo $root; ?>assets/images/products/item9.jpg" alt="item1"
                                                                        class="item-image"> <img
                                                src="<?php echo $root; ?>assets/images/products/item9-hover.jpg" alt="item1  Hover"
                                                class="item-image-hover"></a></figure>
                                    <div class="item-price-container"><span class="item-price">$160<span
                                                class="sub-price">.99</span></span></div>
                                </div>
                                <div class="item-meta-container"><h3 class="item-name"><a href="product.html">Phasellus
                                            consequat</a></h3>

                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-result" data-result="70"></div>
                                        </div>
                                        <span class="ratings-amount">3 Reviews</span></div>
                                    <p>Nulla nunc turpis, semper a est ut, commodo rutrum nunc. Nullam pellentesque
                                        sed lacus a condimentum. Vivamus pretium tempus fermentum. Suspendisse quis
                                        urna posuere, vestibulum enim sit amet, mollis augue. Fusce eu fermentum
                                        nunc. Pellentesque a volutpat ipsum...</p>

                                    <div class="item-action"><a href="category-list.html#"
                                                                class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>

                                        <div class="item-action-inner"><a href="category-list.html#"
                                                                          class="icon-button icon-like">Favourite</a>
                                            <a href="category-list.html#"
                                               class="icon-button icon-compare">Checkout</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-container clearfix">
                            <div class="pull-right">
                                <ul class="pagination">
                                    <li class="active"><a href="category-list.html#">1</a></li>
                                    <li><a href="category-list.html#">2</a></li>
                                    <li><a href="category-list.html#">3</a></li>
                                    <li><a href="category-list.html#">4</a></li>
                                    <li><a href="category-list.html#">5</a></li>
                                    <li><a href="category-list.html#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                            <div class="pull-right view-count-box hidden-xs"><span class="separator">view:</span>

                                <div class="btn-group select-dropdown">
                                    <button type="button" class="btn select-btn">10</button>
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i
                                            class="fa fa-angle-down"></i></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="category-list.html#">15</a></li>
                                        <li><a href="category-list.html#">30</a></li>
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
                                                <li><a href="category-list.html#">Mobile Phones (341)</a></li>
                                                <li><a href="category-list.html#">Smartphones (55)</a></li>
                                                <li><a href="category-list.html#">Communicators (24)</a></li>
                                                <li><a href="category-list.html#">CDMA Phones (14)</a></li>
                                                <li><a href="category-list.html#">Accessories (83)</a></li>
                                                <li><a href="category-list.html#">Chargers (8)</a></li>
                                                <li><a href="category-list.html#">Memory Cards (6)</a></li>
                                                <li><a href="category-list.html#">Protectors (12)</a></li>
                                                <li><a href="category-list.html#">ravelsim (5)</a></li>
                                                <li><a href="category-list.html#">CDMA Phones (14)</a></li>
                                                <li><a href="category-list.html#">Accessories (83)</a></li>
                                                <li><a href="category-list.html#">Chargers (8)</a></li>
                                                <li><a href="category-list.html#">Memory Cards (6)</a></li>
                                                <li><a href="category-list.html#">Protectors (12)</a></li>
                                                <li><a href="category-list.html#">ravelsim (5)</a></li>
                                                <li><a href="category-list.html#">CDMA Phones (14)</a></li>
                                                <li><a href="category-list.html#">Accessories (83)</a></li>
                                                <li><a href="category-list.html#">Chargers (8)</a></li>
                                                <li><a href="category-list.html#">Memory Cards (6)</a></li>
                                                <li><a href="category-list.html#">Protectors (12)</a></li>
                                                <li><a href="category-list.html#">ravelsim (5)</a></li>
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
                                                <li><a href="category-list.html#">Samsung (50)</a></li>
                                                <li><a href="category-list.html#">Apple (80)</a></li>
                                                <li><a href="category-list.html#">HTC (20)</a></li>
                                                <li><a href="category-list.html#">Motoroloa (20)</a></li>
                                                <li><a href="category-list.html#">Nokia (11)</a></li>
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
                                            <div id="price-range-btns"><a href="category-list.html#"
                                                                          class="btn btn-custom-2 btn-sm">Ok</a> <a
                                                    href="category-list.html#"
                                                    class="btn btn-custom-2 btn-sm">Clear</a></div>
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
                                                <li><a href="category-list.html#" data-bgcolor="#fff"
                                                       class="filter-color-box"></a></li>
                                                <li><a href="category-list.html#" data-bgcolor="#ffff33"
                                                       class="filter-color-box"></a></li>
                                                <li><a href="category-list.html#" data-bgcolor="#ff9900"
                                                       class="filter-color-box"></a></li>
                                                <li class="last-md"><a href="category-list.html#"
                                                                       data-bgcolor="#ff9999"
                                                                       class="filter-color-box"></a></li>
                                                <li class="last-lg"><a href="category-list.html#"
                                                                       data-bgcolor="#99cc33"
                                                                       class="filter-color-box"></a></li>
                                                <li><a href="category-list.html#" data-bgcolor="#339933"
                                                       class="filter-color-box"></a></li>
                                                <li><a href="category-list.html#" data-bgcolor="#ff0000"
                                                       class="filter-color-box"></a></li>
                                                <li class="last-md"><a href="category-list.html#"
                                                                       data-bgcolor="#ff3366"
                                                                       class="filter-color-box"></a></li>
                                                <li><a href="category-list.html#" data-bgcolor="#cc33ff"
                                                       class="filter-color-box"></a></li>
                                                <li class="last-lg"><a href="category-list.html#"
                                                                       data-bgcolor="#9966cc"
                                                                       class="filter-color-box"></a></li>
                                                <li><a href="category-list.html#" data-bgcolor="#99ccff"
                                                       class="filter-color-box"></a></li>
                                                <li class="last-md"><a href="category-list.html#"
                                                                       data-bgcolor="#3333cc"
                                                                       class="filter-color-box"></a></li>
                                                <li><a href="category-list.html#" data-bgcolor="#999999"
                                                       class="filter-color-box"></a></li>
                                                <li><a href="category-list.html#" data-bgcolor="#663300"
                                                       class="filter-color-box"></a></li>
                                                <li class="last-lg"><a href="category-list.html#"
                                                                       data-bgcolor="#000"
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
                                            <h5><a href="category-list.html#">Jacket Suiting Blazer</a></h5>

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
                                            <h5><a href="category-list.html#">Gap Graphic Cuffed</a></h5>

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
                                            <h5><a href="category-list.html#">Women's Lauren Dress</a></h5>

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
                                            <h5><a href="category-list.html#">Swiss Mobile Phone</a></h5>

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
                                            <h5><a href="category-list.html#">Zwinzed HeadPhones</a></h5>

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
                                            <h5><a href="category-list.html#">Kless Man Suit</a></h5>

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
                                            <h5><a href="category-list.html#">Gap Graphic Cuffed</a></h5>

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
                                            <h5><a href="category-list.html#">Women's Lauren Dress</a></h5>

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
                                    <li><a href="category-list.html#"><img src="<?php echo $root; ?>assets/images/banner1.jpg" alt="Banner 1"></a>
                                    </li>
                                    <li><a href="category-list.html#"><img src="<?php echo $root; ?>assets/images/banner2.jpg" alt="Banner 2"></a>
                                    </li>
                                    <li><a href="category-list.html#"><img src="<?php echo $root; ?>assets/images/banner3.jpg" alt="Banner 3"></a>
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

<?php
include 'inc/footer.inc.php';
include 'inc/footerfiles.inc.php';
?>