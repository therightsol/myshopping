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
                <li class="active"><a href="<?php echo $root; ?>aboutpanel-layout" data-toggle="tab" data-panel-title="Layout"></a>
                </li>
                <li><a href="<?php echo $root; ?>aboutpanel-home" data-toggle="tab" data-panel-title="Background Settings"></a></li>
                <li><a href="<?php echo $root; ?>aboutpanel-color" data-toggle="tab" data-panel-title="Color Settings"></a></li>
                <li><a href="<?php echo $root; ?>aboutpanel-font" data-toggle="tab" data-panel-title="Font Settings"></a></li>
                <li><a id="option-close" href="<?php echo $root; ?>about"></a></li>
            </ul>
            <div id="option-panel-title" class="clearfix"><span>Layout</span> <a href="<?php echo $root; ?>about"
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
    <div id="page-header"><h1>About Us <span class="small-bottom-border big"></span></h1>

        <div class="md-margin"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2"><p class="page-header-desc">Duis sed diam eget dolor mollis
                        convallis. Maecenas elementum tortor a ipsum dapibus tincidunt.</p></div>
            </div>
        </div>
    </div>
    <div class="md-margin2x"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hero-unit"><h2>Welcome to Venedor!</h2>

                    <p>Venedor a modern and laconic theme based on Bootstrap’s 12 column 1200px responsive grid
                        system.</p><span class="small-bottom-border big"></span></div>
                <div class="md-margin2x"></div>
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6 service-box-container">
                        <div class="services-box">
                            <div class="service-icon service-icon-responsive"></div>
                            <h3><a href="<?php echo $root; ?>about">Responcive Design</a> <span
                                    class="small-bottom-border"></span></h3>

                            <p>Cras pellentesque, nisi ac tempus pellentesque, orci sem commodo urna,amet egestas
                                ipsum orci sit amet tellus. Mauris eu ante felis.</p></div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 service-box-container">
                        <div class="services-box">
                            <div class="service-icon service-icon-panel"></div>
                            <h3><a href="<?php echo $root; ?>about">Powerful Amin Panel</a> <span
                                    class="small-bottom-border"></span></h3>

                            <p>Etiam dapibus mattis sapien, blandit molestie nunc venenatis ut. Phasellus imperdiet
                                lacinia est, nec convallis dolor aliquet ac.</p></div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 service-box-container">
                        <div class="services-box">
                            <div class="service-icon service-icon-sliders"></div>
                            <h3><a href="<?php echo $root; ?>about">Awesome Sliders</a> <span
                                    class="small-bottom-border"></span></h3>

                            <p>Duis a dignissim nulla. Phasellus lacinia aliquam lorem, a consequat erat interdum
                                nec. Aenean ut leo sem, id gravida tortor.</p></div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 service-box-container">
                        <div class="services-box">
                            <div class="service-icon service-icon-support"></div>
                            <h3><a href="<?php echo $root; ?>about">Premium Support</a> <span
                                    class="small-bottom-border"></span></h3>

                            <p>Pellentesque ut libero in nibh aliquet pretium eget elementum felis. Integer dapibus
                                auctor tincidunt. Suspendisse potenti.</p></div>
                    </div>
                </div>
                <div class="lg-margin2x"></div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <header class="content-title"><h2 class="title">Who are we?</h2>

                            <div class="xss-margin"></div>
                        </header>
                        <p>Venedor is a fully responsive PSD theme designed for all types of platforms: WooCommerce,
                            Magento, OpenCart, PrestaShop and other. Based on Bootstrap’s 12 column 1200px
                            responsive grid Template. Great looks on desktops, tablets and mobiles. Sed interdum
                            magna sit amet orci tristique blandit. Etiam id justo consequ quam viverra
                            elementum.</p>

                        <div class="xs-margin"></div>
                        <p>Sed ac magna sed massa rhoncus elementum et ac augue. Morbi non tellus nisi. Pellentesque
                            habitant morbi tristique senectus. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Vivamus tempor dictum ornare.Ut tincidunt velit nec ligula ornare bibendum.
                            Aliquam ac sagittis metus. Suspendise eu nunc pulvinar,varius libero, eleifend nunc
                            pellentesque mauris. <a href="<?php echo $root; ?>about">Buy Venedor Template!</a></p>

                        <div class="visible-xs md-margin"></div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <header class="content-title"><h2 class="title">Our Skills</h2>

                            <div class="xss-margin"></div>
                        </header>
                        <div class="progress-container"><h4>Wordpress</h4>

                            <div class="progress">
                                <div class="progress-bar progress-bar-custom progress-animate" role="progressbar"
                                     aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" data-width="85"><span
                                        class="progress-text">85%</span></div>
                            </div>
                        </div>
                        <div class="progress-container"><h4>photoshop</h4>

                            <div class="progress">
                                <div class="progress-bar progress-bar-custom progress-animate" role="progressbar"
                                     aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" data-width="73"><span
                                        class="progress-text">73%</span></div>
                            </div>
                        </div>
                        <div class="progress-container"><h4>Html/css</h4>

                            <div class="progress">
                                <div class="progress-bar progress-bar-custom progress-animate" role="progressbar"
                                     aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" data-width="92"><span
                                        class="progress-text">92%</span></div>
                            </div>
                        </div>
                        <div class="progress-container"><h4>Illustrator</h4>

                            <div class="progress">
                                <div class="progress-bar progress-bar-custom progress-animate" role="progressbar"
                                     aria-valuenow="69" aria-valuemin="0" aria-valuemax="100" data-width="69"><span
                                        class="progress-text">69%</span></div>
                            </div>
                        </div>
                        <div class="progress-container"><h4>logo design</h4>

                            <div class="progress">
                                <div class="progress-bar progress-bar-custom progress-animate" role="progressbar"
                                     aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" data-width="87"><span
                                        class="progress-text">87%</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xlg-margin2x"></div>
            </div>
        </div>
    </div>
    <div id="testimonials-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2"><h3>Testimonials <span class="small-bottom-border big"></span>
                    </h3>

                    <div class="about-us-testimonials flexslider">
                        <ul class="slides">
                            <li><span class="testimonial-title">Best Service!</span>

                                <p>Maecenas semper aliquam massa. Praesent pharetra sem vitae nisi eleifend
                                    molestie. Aliquam molestie scelerisque ultricies. Suspendisse potenti. Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempor dictum ornare.
                                    Maecenas pellentesque nibh ac suscipit sodales. Integer quis mattis nibh.
                                    Maecenas et eleifend mauris.</p><span
                                    class="testimonial-owner">Anna Retallick,</span><span
                                    class="testimonial-date">12.02.2014</span></li>
                            <li><span class="testimonial-title">Fast Support!</span>

                                <p>Maecenas semper aliquam massa. Praesent pharetra sem vitae nisi eleifend
                                    molestie. Aliquam molestie scelerisque ultricies. Suspendisse potenti. Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempor dictum
                                    ornare.</p><span class="testimonial-owner">Jake Retallick,</span><span
                                    class="testimonial-date">21.02.2014</span></li>
                            <li><span class="testimonial-title">Quality Design!</span>

                                <p>Maecenas semper aliquam massa. Praesent pharetra sem vitae nisi eleifend
                                    molestie. Aliquam molestie scelerisque ultricies. Suspendisse potenti. Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempor dictum ornare.
                                    Maecenas pellentesque nibh ac suscipit sodales. Integer quis mattis nibh.
                                    Maecenas et eleifend mauris.</p><span
                                    class="testimonial-owner">Jake Retallick,</span><span
                                    class="testimonial-date">26.02.2014</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="xlg-margin2x"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="team-members-slider-container" class="carousel-wrapper">
                    <header class="content-title">
                        <div class="title-bg"><h2 class="title">Meet Our Team</h2></div>
                        <div class="xs-margin"></div>
                    </header>
                    <div class="carousel-controls">
                        <div id="team-members-slider-prev" class="carousel-btn carousel-btn-prev"></div>
                        <div id="team-members-slider-next"
                             class="carousel-btn carousel-btn-next carousel-space"></div>
                    </div>
                    <div class="team-member-header clearfix">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <figure><img src="<?php echo $root; ?>assets/images/team/bryant.jpg" alt="Dawe Bryant" class="img-responsive">
                                </figure>
                                <div class="md-margin visible-xs visible-sm"></div>
                            </div>
                            <div class="col-md-8 col-sm-12 col-xs-12">
                                <div class="team-member-header-meta">
                                    <div class="team-member-name">Courtney Bryant</div>
                                    <div class="team-member-title">SEO</div>
                                    <p>Suspendisse potenti. In non tincidunt mauris. Sed accumsan augue a gravida
                                        posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                                        tempor dictum ornare. Maecenas pellentesque nibh ac suscipit sodales.
                                        Integer quis mattis nibh. Aliquam arcu velit, blandit sit amet neque vitae,
                                        eleifend feugiat lorem. Suspendisse potenti.</p>
                                    <blockquote><p>Maecenas semper aliquam massa. Praesent pharetra sem vitae nisi
                                            eleifend molestie. Aliquam molestie scelerisque ultricies. Suspendisse
                                            potenti. Phasellus interdum risus at mi ullamcorper lobortis. In et metus
                                            aliquet, suscipit leo.</p></blockquote>
                                    <p>Suspendisse potenti. In non tincidunt mauris. Sed accumsan augue a gravida
                                        posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                                        tempor dictum ornare. Maecenas pellentesque nibh ac suscipit sodales.
                                        Integer quis mattis nibh. Aliquam arcu velit, blandit sit amet. Nam pretium
                                        augue eget sem malesuada, ut gravida enim iaculis. Praesent sed nulla sed
                                        lectus blandit sodales sit amet nec lectus.</p>

                                    <div class="team-member-extra clearfix">
                                        <ul class="social-links clearfix pull-left">
                                            <li class="smaller-social-icons"><a href="<?php echo $root; ?>about"
                                                                                class="social-icon icon-facebook-sm"></a>
                                            </li>
                                            <li class="smaller-social-icons"><a href="<?php echo $root; ?>about"
                                                                                class="social-icon icon-twitter-sm"></a>
                                            </li>
                                            <li class="smaller-social-icons"><a href="<?php echo $root; ?>about"
                                                                                class="social-icon icon-dribbble-sm"></a>
                                            </li>
                                            <li class="smaller-social-icons"><a href="<?php echo $root; ?>about"
                                                                                class="social-icon icon-email-sm"></a>
                                            </li>
                                        </ul>
                                        <ul class="team-member-contact pull-right">
                                            <li>courtney_bryant@gmail.com</li>
                                            <li>+(404) 548-26-78-56</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-member-content">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6 team-member">
                                <figure><img src="<?php echo $root; ?>assets/images/team/courtney.jpg" alt="Courtney Bryant"></figure>
                                <div class="team-member-name">Courtney Bryant</div>
                                <div class="team-member-title">SysAdmin</div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 team-member">
                                <figure><img src="<?php echo $root; ?>assets/images/team/walter.jpg" alt="Walter Allter"></figure>
                                <div class="team-member-name">Walter Allter</div>
                                <div class="team-member-title">Chief Executive Officer</div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 team-member">
                                <figure><img src="<?php echo $root; ?>assets/images/team/arron.jpg" alt="Arron Rivera"></figure>
                                <div class="team-member-name">Arron Rivera</div>
                                <div class="team-member-title">Sales Manager</div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 team-member">
                                <figure><img src="<?php echo $root; ?>assets/images/team/evan.jpg" alt="Evan Brooks"></figure>
                                <div class="team-member-name">Evan Brooks</div>
                                <div class="team-member-title">Project Manager</div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 team-member">
                                <figure><img src="<?php echo $root; ?>assets/images/team/susan.jpg" alt="Susan Brooks"></figure>
                                <div class="team-member-name">Susan Brooks</div>
                                <div class="team-member-title">Accounts Manager</div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 team-member">
                                <figure><img src="<?php echo $root; ?>assets/images/team/jake.jpg" alt="Jake Bryant"></figure>
                                <div class="team-member-name">Jake Bryant</div>
                                <div class="team-member-title">Office Manager</div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 team-member">
                                <figure><img src="<?php echo $root; ?>assets/images/team/jane.jpg" alt="Jane Bryant"></figure>
                                <div class="team-member-name">Jane Bryant</div>
                                <div class="team-member-title">PHP Developer</div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 team-member">
                                <figure><img src="<?php echo $root; ?>assets/images/team/diana.jpg" alt="Diana Rivera"></figure>
                                <div class="team-member-name">Diana Rivera</div>
                                <div class="team-member-title">JavaScript Developer</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md-margin2x"></div>
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
                        <div class="brand-slider owl-carousel"><a href="<?php echo $root; ?>about"><img
                                    src="<?php echo $root; ?>assets/images/brands/brand-logo.png" alt="Brand Logo 1"></a> <a
                                href="<?php echo $root; ?>about"><img src="<?php echo $root; ?>assets/images/brands/brand-logo.png" alt="Brand Logo 2"></a>
                            <a href="<?php echo $root; ?>about"><img src="<?php echo $root; ?>assets/images/brands/brand-logo.png" alt="Brand Logo 3"></a>
                            <a href="<?php echo $root; ?>about"><img src="<?php echo $root; ?>assets/images/brands/brand-logo.png" alt="Brand Logo 4"></a>
                            <a href="<?php echo $root; ?>about"><img src="<?php echo $root; ?>assets/images/brands/brand-logo.png" alt="Brand Logo 5"></a>
                            <a href="<?php echo $root; ?>about"><img src="<?php echo $root; ?>assets/images/brands/brand-logo.png" alt="Brand Logo 6"></a>
                            <a href="<?php echo $root; ?>about"><img src="<?php echo $root; ?>assets/images/brands/brand-logo.png" alt="Brand Logo 7"></a>
                            <a href="<?php echo $root; ?>about"><img src="<?php echo $root; ?>assets/images/brands/brand-logo.png" alt="Brand Logo 8"></a>
                            <a href="<?php echo $root; ?>about"><img src="<?php echo $root; ?>assets/images/brands/brand-logo.png" alt="Brand Logo 9"></a>
                            <a href="v"><img src="<?php echo $root; ?>assets/images/brands/brand-logo.png" alt="Brand Logo 10"></a>
                            <a href="<?php echo $root; ?>about"><img src="<?php echo $root; ?>assets/images/brands/brand-logo.png" alt="Brand Logo 11"></a>
                            <a href="<?php echo $root; ?>about"><img src="<?php echo $root; ?>assets/images/brands/brand-logo.png" alt="Brand Logo 12"></a>
                            <a href="<?php echo $root; ?>about"><img src="<?php echo $root; ?>assets/images/brands/brand-logo.png" alt="Brand Logo 13"></a>
                            <a href="<?php echo $root; ?>about"><img src="<?php echo $root; ?>assets/images/brands/brand-logo.png" alt="Brand Logo 14"></a>
                            <a href="<?php echo $root; ?>about"><img src="<?php echo $root; ?>assets/images/brands/brand-logo.png" alt="Brand Logo 15"></a>
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
