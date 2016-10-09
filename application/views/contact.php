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
                <li class="active"><a href="<?php echo $root; ?>homepanel-layout" data-toggle="tab" data-panel-title="Layout"></a>
                </li>
                <li><a href="<?php echo $root; ?>homepanel-home" data-toggle="tab" data-panel-title="Background Settings"></a></li>
                <li><a href="<?php echo $root; ?>homepanel-color" data-toggle="tab" data-panel-title="Color Settings"></a></li>
                <li><a href="<?php echo $root; ?>homepanel-font" data-toggle="tab" data-panel-title="Font Settings"></a></li>
                <li><a id="option-close" href="<?php echo $root; ?>home"></a></li>
            </ul>
            <div id="option-panel-title" class="clearfix"><span>Layout</span> <a href="<?php echo $root; ?>home"
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
<div id="wrapper">

    <section id="content">
        <div id="breadcrumb-container">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="<?php echo $root; ?>home">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header class="content-title"><h1 class="title">Contact Us</h1>

                        <p class="title-desc">We love to here from you. Lets get in touch.</p></header>
                    <div class="xs-margin"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="map"></div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12"><h2 class="sub-title">LEAVE COMMENT</h2>

                            <div class="row">
                                <form method="post" action="<?php echo $root; ?>contact" id="contact-form">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="input-group"><span class="input-group-addon"><span
                                                class="input-icon input-icon-user"></span><span class="input-text">Name&#42;</span></span>
                                            <input type="text" name="contact-name" id="contact-name" required
                                                   class="form-control input-lg" placeholder="Your Name"></div>
                                        <div class="input-group"><span class="input-group-addon"><span
                                                class="input-icon input-icon-email"></span><span class="input-text">Email&#42;</span></span>
                                            <input type="email" name="contact-email" id="contact-email" required
                                                   class="form-control input-lg" placeholder="Your Email"></div>
                                        <div class="input-group"><span class="input-group-addon"><span
                                                class="input-icon input-icon-subject"></span><span class="input-text">Subject&#42;</span></span>
                                            <input type="text" name="contact-subject" id="contact-subject" required
                                                   class="form-control input-lg" placeholder="Subject"></div>
                                        <p class="item-desc">Your email address will not be published. Required fields
                                            are marked *</p></div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="input-group textarea-container"><span
                                                class="input-group-addon"><span
                                                class="input-icon input-icon-message"></span><span class="input-text">Your Comment</span></span><textarea
                                                name="contact-message" id="contact-message" class="form-control"
                                                cols="30" rows="6" placeholder="Your Message"></textarea></div>
                                        <input type="submit" value="SUBMIT" class="btn btn-custom-2 md-margin"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12"><h2 class="sub-title">CONTACT DETAILS</h2>
                            <ul class="contact-details-list">
                                <li><span class="contact-icon contact-icon-phone"></span>
                                    <ul>
                                        <li>0203 280 3703</li>
                                        <li>0203 281 3704</li>
                                    </ul>
                                </li>
                                <li><span class="contact-icon contact-icon-mobile"></span>
                                    <ul>
                                        <li>445-115-747-38</li>
                                        <li>445-170-029-32</li>
                                    </ul>
                                </li>
                                <li><span class="contact-icon contact-icon-email"></span>
                                    <ul>
                                        <li>Venedor@gmail.com</li>
                                        <li>Venedor@aol.com</li>
                                    </ul>
                                </li>
                                <li><span class="contact-icon contact-icon-skype"></span>
                                    <ul>
                                        <li>Venedor_store</li>
                                        <li>Venedor_support</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</div>

<?php

include "inc/footer.inc.php";

?>

<?php
include "inc/footerfiles.inc.php";

?>

