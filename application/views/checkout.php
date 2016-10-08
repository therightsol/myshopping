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
                <li class="active"><a href="checkout.html#panel-layout" data-toggle="tab" data-panel-title="Layout"></a>
                </li>
                <li><a href="checkout.html#panel-home" data-toggle="tab" data-panel-title="Background Settings"></a>
                </li>
                <li><a href="checkout.html#panel-color" data-toggle="tab" data-panel-title="Color Settings"></a></li>
                <li><a href="checkout.html#panel-font" data-toggle="tab" data-panel-title="Font Settings"></a></li>
                <li><a id="option-close" href="<?php echo $root; ?>checkout"></a></li>
            </ul>
            <div id="option-panel-title" class="clearfix"><span>Layout</span> <a href="<?php echo $root; ?>checkout"
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
                                        <li data-layout="fullwidth"><img src="<?php echo $root; ?>assets/mages/panel/fullwidth.png"
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
                <li class="active">Checkout</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="content-title"><h1 class="title">Checkout</h1>

                    <p class="title-desc">Quisque elementum nibh at dolor pellentesque, a eleifend libero
                        pharetra.</p></header>
                <div class="xs-margin"></div>
                <form action="<?php echo $root; ?>checkout" id="checkout-form">
                    <div class="panel-group custom-accordion" id="checkout">
                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title">1 Step: <span>Checkout Option</span></div>
                                <a class="accordion-btn opened" data-toggle="collapse"
                                   data-target="#checkout-option"></a></div>
                            <div id="checkout-option" class="collapse in">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12"><h2 class="checkout-title">New
                                                Customer</h2>

                                            <p>Register with us for future convenience:</p>

                                            <div class="xs-margin"></div>
                                            <div class="input-group custom-checkbox sm-margin"><input
                                                    type="checkbox"> <span class="checbox-container"><i
                                                        class="fa fa-check"></i></span> Checkout as Guest
                                            </div>
                                            <div class="input-group custom-checkbox sm-margin"><input
                                                    type="checkbox"> <span class="checbox-container"><i
                                                        class="fa fa-check"></i></span> Register
                                            </div>
                                            <p>By creating an account with our store, you will be able to move
                                                through the checkout process faster, store multiple shipping
                                                addresses, view and track your orders in your account and more.</p>

                                            <div class="md-margin"></div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12"><h2 class="checkout-title">
                                                Registered Customers</h2>

                                            <p>If you have an account with us, please log in.</p>

                                            <div class="xs-margin"></div>
                                            <div class="input-group"><span class="input-group-addon"><span
                                                        class="input-icon input-icon-email"></span><span
                                                        class="input-text">Email&#42;</span></span> <input type="text"
                                                                                                           required
                                                                                                           class="form-control input-lg"
                                                                                                           placeholder="Your Email">
                                            </div>
                                            <div class="input-group xs-margin"><span class="input-group-addon"><span
                                                        class="input-icon input-icon-password"></span><span
                                                        class="input-text">Password&#42;</span></span> <input
                                                    type="text" required class="form-control input-lg"
                                                    placeholder="Your Password"></div>
                                                <span class="help-block text-right"><a href="<?php echo $root; ?>checkout">Forgot your
                                                        password?</a></span>

                                            <div class="input-group custom-checkbox sm-margin top-10px"><input
                                                    type="checkbox"> <span class="checbox-container"><i
                                                        class="fa fa-check"></i></span> Remember my password
                                            </div>
                                        </div>
                                    </div>
                                    <a href="<?php echo $root; ?>checkout" class="btn btn-custom-2">CONTINUE</a></div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title">2 Step: <span>Billing Information</span></div>
                                <a class="accordion-btn" data-toggle="collapse" data-target="#billing"></a></div>
                            <div id="billing" class="collapse">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12"><h2 class="checkout-title">Your
                                                personal details</h2>

                                            <div class="input-group"><span class="input-group-addon"><span
                                                        class="input-icon input-icon-user"></span><span
                                                        class="input-text">First Name&#42;</span></span> <input
                                                    type="text" required class="form-control input-lg"
                                                    placeholder="Your First Name"></div>
                                            <div class="input-group"><span class="input-group-addon"><span
                                                        class="input-icon input-icon-user"></span><span
                                                        class="input-text">Last Name&#42;</span></span> <input
                                                    type="text" required class="form-control input-lg"
                                                    placeholder="Your Last Lame"></div>
                                            <div class="input-group"><span class="input-group-addon"><span
                                                        class="input-icon input-icon-email"></span><span
                                                        class="input-text">Email&#42;</span></span> <input type="text"
                                                                                                           required
                                                                                                           class="form-control input-lg"
                                                                                                           placeholder="Your Email">
                                            </div>
                                            <div class="input-group"><span class="input-group-addon"><span
                                                        class="input-icon input-icon-phone"></span><span
                                                        class="input-text">Telephone&#42;</span></span> <input
                                                    type="text" required class="form-control input-lg"
                                                    placeholder="Your Telephone"></div>
                                            <div class="input-group"><span class="input-group-addon"><span
                                                        class="input-icon input-icon-fax"></span><span
                                                        class="input-text">Fax</span></span> <input type="text"
                                                                                                    class="form-control input-lg"
                                                                                                    placeholder="Your Fax">
                                            </div>
                                            <div class="input-group xlg-margin"><span
                                                    class="input-group-addon"><span
                                                        class="input-icon input-icon-company"></span><span
                                                        class="input-text">Company&#42;</span></span> <input type="text"
                                                                                                             required
                                                                                                             class="form-control input-lg"
                                                                                                             placeholder="Your Company">
                                            </div>
                                            <div class="input-group"><span class="input-group-addon"><span
                                                        class="input-icon input-icon-password"></span><span
                                                        class="input-text">Password&#42;</span></span> <input
                                                    type="password" required class="form-control input-lg"
                                                    placeholder="Your Password"></div>
                                            <div class="input-group xlg-margin"><span
                                                    class="input-group-addon"><span
                                                        class="input-icon input-icon-password"></span><span
                                                        class="input-text">Password&#42;</span></span> <input
                                                    type="password" required class="form-control input-lg"
                                                    placeholder="Your Password"></div>
                                            <div class="input-group custom-checkbox sm-margin"><input
                                                    type="checkbox"> <span class="checbox-container"><i
                                                        class="fa fa-check"></i></span> I wish to subscribe to the
                                                Venedor newsletter.
                                            </div>
                                            <div class="input-group custom-checkbox sm-margin"><input
                                                    type="checkbox"> <span class="checbox-container"><i
                                                        class="fa fa-check"></i></span> My delivery and billing
                                                addresses are the same.
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12"><h2 class="checkout-title">Your
                                                Address</h2>

                                            <div class="input-group"><span class="input-group-addon"><span
                                                        class="input-icon input-icon-address"></span><span
                                                        class="input-text">Address 1&#42;</span></span> <input
                                                    type="text" class="form-control input-lg"
                                                    placeholder="Your Address"></div>
                                            <div class="input-group"><span class="input-group-addon"><span
                                                        class="input-icon input-icon-address"></span><span
                                                        class="input-text">Address 2&#42;</span></span> <input
                                                    type="text" required class="form-control input-lg"
                                                    placeholder="Your Address"></div>
                                            <div class="input-group"><span class="input-group-addon"><span
                                                        class="input-icon input-icon-city"></span><span
                                                        class="input-text">City&#42;</span></span> <input type="text"
                                                                                                          required
                                                                                                          class="form-control input-lg"
                                                                                                          placeholder="Your City">
                                            </div>
                                            <div class="input-group"><span class="input-group-addon"><span
                                                        class="input-icon input-icon-postcode"></span><span
                                                        class="input-text">Post Code&#42;</span></span> <input
                                                    type="text" required class="form-control input-lg"
                                                    placeholder="Your Post Code"></div>
                                            <div class="input-group"><span class="input-group-addon"><span
                                                        class="input-icon input-icon-country"></span><span
                                                        class="input-text">Country*</span></span>

                                                <div class="large-selectbox clearfix"><select id="country"
                                                                                              name="country"
                                                                                              class="selectbox">
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="France">France</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Spain">Spain</option>
                                                    </select></div>
                                            </div>
                                            <div class="input-group"><span class="input-group-addon"><span
                                                        class="input-icon input-icon-region"></span><span
                                                        class="input-text">Region / State&#42;</span></span>

                                                <div class="large-selectbox clearfix"><select id="state"
                                                                                              name="state"
                                                                                              class="selectbox">
                                                        <option value="California">California</option>
                                                        <option value="Texas">Texas</option>
                                                        <option value="NewYork">NewYork</option>
                                                        <option value="Narnia">Narnia</option>
                                                        <option value="Jumanji">Jumanji</option>
                                                    </select></div>
                                            </div>
                                            <div class="input-group custom-checkbox md-margin"><input
                                                    type="checkbox"> <span class="checbox-container"><i
                                                        class="fa fa-check"></i></span> I have reed and agree to the <a
                                                    href="<?php echo $root; ?>checkout">Privacy Policy</a>.
                                            </div>
                                            <a href="<?php echo $root; ?>checkout" class="btn btn-custom-2">CONTINUE</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title">3 Step: <span>Delivery Details</span></div>
                                <a class="accordion-btn" data-toggle="collapse" data-target="#delivery-details"></a>
                            </div>
                            <div id="delivery-details" class="collapse">
                                <div class="panel-body"><p>Details about delivery</p></div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title">4 Step: <span>Delivery Method</span></div>
                                <a class="accordion-btn" data-toggle="collapse" data-target="#delivery-method"></a>
                            </div>
                            <div id="delivery-method" class="collapse">
                                <div class="panel-body"><p>Choose your delivery method.</p></div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title">5 Step: <span>Payment Method</span></div>
                                <a class="accordion-btn" data-toggle="collapse" data-target="#payment-method"></a>
                            </div>
                            <div id="payment-method" class="collapse">
                                <div class="panel-body"><p>Choose your payment method.</p></div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title">6 Step: <span>Confirm Order</span></div>
                                <a class="accordion-btn opened" data-toggle="collapse" data-target="#confirm"></a>
                            </div>
                            <div id="confirm" class="collapse in">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table checkout-table">
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
                                                    <figure><a href="<?php echo $root; ?>checkout"><img
                                                                src="<?php echo $root; ?>assets/images/products/compare1.jpg"
                                                                alt="Lowlands Lace Blouse"></a></figure>
                                                    <header class="item-name"><a href="<?php echo $root; ?>checkout">Lowlands Lace
                                                            Blouse</a></header>
                                                    <ul>
                                                        <li>Color: White</li>
                                                        <li>Size: SM</li>
                                                    </ul>
                                                </td>
                                                <td class="item-code">MP125984154</td>
                                                <td class="item-price-col"><span
                                                        class="item-price-special">$1175</span></td>
                                                <td>
                                                    <div class="custom-quantity-input"><input type="text"
                                                                                              name="quantity"
                                                                                              value="1"> <a
                                                            href="<?php echo $root; ?>checkout" onclick="return!1"
                                                            class="quantity-btn quantity-input-up"><i
                                                                class="fa fa-angle-up"></i></a> <a href="<?php echo $root; ?>checkout"
                                                                                                   onclick="return!1"
                                                                                                   class="quantity-btn quantity-input-down"><i
                                                                class="fa fa-angle-down"></i></a></div>
                                                </td>
                                                <td class="item-total-col"><span
                                                        class="item-price-special">$1175</span> <a
                                                        href="<?php echo $root; ?>checkout" class="close-button"></a></td>
                                            </tr>
                                            <tr>
                                                <td class="item-name-col">
                                                    <figure><a href="<?php echo $root; ?>checkout"><img
                                                                src="<?php echo $root; ?>assets/images/products/compare2.jpg"
                                                                alt="Samsung Galaxy Ace"></a></figure>
                                                    <header class="item-name"><a href="<?php echo $root; ?>checkout">Samsung
                                                            Galaxy Ace</a></header>
                                                    <ul>
                                                        <li>Color: Black</li>
                                                        <li>Size: XL</li>
                                                    </ul>
                                                </td>
                                                <td class="item-code">MP125984154</td>
                                                <td class="item-price-col"><span
                                                        class="item-price-special">$1475</span></td>
                                                <td>
                                                    <div class="custom-quantity-input"><input type="text"
                                                                                              name="quantity"
                                                                                              value="1"> <a
                                                            href="<?php echo $root; ?>checkout" onclick="return!1"
                                                            class="quantity-btn quantity-input-up"><i
                                                                class="fa fa-angle-up"></i></a> <a href="<?php echo $root; ?>checkout"
                                                                                                   onclick="return!1"
                                                                                                   class="quantity-btn quantity-input-down"><i
                                                                class="fa fa-angle-down"></i></a></div>
                                                </td>
                                                <td class="item-total-col"><span
                                                        class="item-price-special">$1475</span> <a
                                                        href="<?php echo $root; ?>checkout" class="close-button"></a></td>
                                            </tr>
                                            <tr>
                                                <td class="checkout-table-title" colspan="4">Subtotal:</td>
                                                <td class="checkout-table-price">$399.44</td>
                                            </tr>
                                            <tr>
                                                <td class="checkout-table-title" colspan="4">Shipping:</td>
                                                <td class="checkout-table-price">$6.00</td>
                                            </tr>
                                            <tr>
                                                <td class="checkout-table-title" colspan="4">Tax(0%):</td>
                                                <td class="checkout-table-price">$0.00</td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td class="checkout-total-title" colspan="4"><strong>TOTAL:</strong>
                                                </td>
                                                <td class="checkout-total-price cart-total"><strong>$434.50</strong>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="lg-margin"></div>
                                    <div class="text-right"><input type="submit" class="btn btn-custom-2"
                                                                   value="CONFIRM ORDER"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="xlg-margin"></div>
            </div>
        </div>
    </div>
</section>


<?php
include 'inc/footer.inc.php';
include 'inc/footerfiles.inc.php';
?>
