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
    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Portfolio 4 Column</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="content-title"><h1 class="title">Portfolio</h1>

                    <p class="title-desc">Look at all works of out authors.</p></header>
                <ul id="portfolio-filter" class="clearfix">
                    <li><a href="portfolio-4.html#" class="active" data-filter="*">All</a></li>
                    <li><a href="portfolio-4.html#" data-filter=".photography">Photography</a></li>
                    <li><a href="portfolio-4.html#" data-filter=".fashion">Fashion</a></li>
                    <li><a href="portfolio-4.html#" data-filter=".video">Video</a></li>
                    <li><a href="portfolio-4.html#" data-filter=".design">Design</a></li>
                    <li><a href="portfolio-4.html#" data-filter=".wordpress">Wordpress</a></li>
                </ul>
                <div class="row portfolio-item-container" data-maxcolumn="4" data-layoutmode="fitRows">
                    <div class="col-md-3 col-sm-4 col-xs-6 portfolio-item photography">
                        <figure><img src="<?php echo $root; ?>assets/images/portfolio/classic/portfolio4.jpg" alt="Portfolio item 4">
                            <figcaption><a href="<?php echo $root; ?>assets/images/portfolio/classic/portfolio4.jpg" title="Portfolio item 4"
                                           data-rel="prettyPhoto[portfolio]" class="zoom-button"></a> <a
                                    href="single-portfolio.html" class="link-button"></a> <a
                                    href="portfolio-4.html#" class="like-button"><i
                                        class="fa fa-heart"></i><span>16</span></a></figcaption>
                        </figure>
                        <h2><a href="portfolio-4.html#">Lorem ipsum dolor</a></h2>

                        <p><a href="portfolio-4.html#">Photography</a></p></div>
                    <div class="col-md-3 col-sm-4 col-xs-6 portfolio-item wordpress">
                        <figure><img src="<?php echo $root; ?>assets/images/portfolio/classic/portfolio11.jpg" alt="Portfolio item 11">
                            <figcaption><a href="<?php echo $root; ?>assets/images/portfolio/classic/portfolio11.jpg" title="Portfolio item 11"
                                           data-rel="prettyPhoto[portfolio]" class="zoom-button"></a> <a
                                    href="single-portfolio.html" class="link-button"></a> <a
                                    href="portfolio-4.html#" class="like-button"><i
                                        class="fa fa-heart"></i><span>9</span></a></figcaption>
                        </figure>
                        <h2><a href="portfolio-4.html#">Lorem ipsum dolor</a></h2>

                        <p><a href="portfolio-4.html#">Design</a>, <a href="portfolio-4.html#">Wordpress</a></p>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 portfolio-item video">
                        <figure><img src="<?php echo $root; ?>assets/images/portfolio/classic/portfolio1.jpg" alt="Portfolio item 1">
                            <figcaption><a href="http://www.youtube.com/watch?v=vEkwlqsdbyk"
                                           title="Portfolio Video Example" data-rel="prettyPhoto[portfolio]"
                                           class="zoom-button"></a> <a href="single-portfolio.html"
                                                                       class="link-button"></a> <a
                                    href="portfolio-4.html#" class="like-button"><i
                                        class="fa fa-heart"></i><span>14</span></a></figcaption>
                        </figure>
                        <h2><a href="portfolio-4.html#">Lorem ipsum dolor</a></h2>

                        <p><a href="portfolio-4.html#">Video</a></p></div>
                    <div class="col-md-3 col-sm-4 col-xs-6 portfolio-item photography">
                        <figure><img src="<?php echo $root; ?>assets/images/portfolio/classic/portfolio8.jpg" alt="Portfolio item 8">
                            <figcaption><a href="<?php echo $root; ?>assets/images/portfolio/classic/portfolio8.jpg" title="Portfolio item 8"
                                           data-rel="prettyPhoto[portfolio]" class="zoom-button"></a> <a
                                    href="single-portfolio.html" class="link-button"></a> <a
                                    href="portfolio-4.html#" class="like-button"><i
                                        class="fa fa-heart"></i><span>8</span></a></figcaption>
                        </figure>
                        <h2><a href="portfolio-4.html#">Lorem ipsum dolor</a></h2>

                        <p><a href="portfolio-4.html#">Photography</a></p></div>
                    <div class="col-md-3 col-sm-4 col-xs-6 portfolio-item fashion photography">
                        <figure><img src="<?php echo $root; ?>assets/images/portfolio/classic/portfolio13.jpg" alt="Portfolio item 13">
                            <figcaption><a href="<?php echo $root; ?>assets/images/portfolio/classic/portfolio13.jpg" title="Portfolio item 13"
                                           data-rel="prettyPhoto[portfolio]" class="zoom-button"></a> <a
                                    href="single-portfolio.html" class="link-button"></a> <a
                                    href="portfolio-4.html#" class="like-button"><i
                                        class="fa fa-heart"></i><span>5</span></a></figcaption>
                        </figure>
                        <h2><a href="portfolio-4.html#">Lorem ipsum dolor</a></h2>

                        <p><a href="portfolio-4.html#">Fashion</a>, <a href="portfolio-4.html#">Photography</a></p>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 portfolio-item fashion video">
                        <figure><img src="<?php echo $root; ?>assets/images/portfolio/classic/portfolio14.jpg" alt="Portfolio item 14">
                            <figcaption><a href="<?php echo $root; ?>assets/images/portfolio/classic/portfolio14.jpg" title="Portfolio item 14"
                                           data-rel="prettyPhoto[portfolio]" class="zoom-button"></a> <a
                                    href="single-portfolio.html" class="link-button"></a> <a
                                    href="portfolio-4.html#" class="like-button"><i
                                        class="fa fa-heart"></i><span>12</span></a></figcaption>
                        </figure>
                        <h2><a href="portfolio-4.html#">Lorem ipsum dolor</a></h2>

                        <p><a href="portfolio-4.html#">Fashion</a>, <a href="portfolio-4.html#">Video</a></p></div>
                    <div class="col-md-3 col-sm-4 col-xs-6 portfolio-item fashion photography">
                        <figure><img src="<?php echo $root; ?>assets/images/portfolio/classic/portfolio10.jpg" alt="Portfolio item 10">
                            <figcaption><a href="<?php echo $root; ?>assets/images/portfolio/classic/portfolio10.jpg" title="Portfolio item 10"
                                           data-rel="prettyPhoto[portfolio]" class="zoom-button"></a> <a
                                    href="single-portfolio.html" class="link-button"></a> <a
                                    href="portfolio-4.html#" class="like-button"><i
                                        class="fa fa-heart"></i><span>22</span></a></figcaption>
                        </figure>
                        <h2><a href="portfolio-4.html#">Lorem ipsum dolor</a></h2>

                        <p><a href="portfolio-4.html#">Fashion</a>, <a href="portfolio-4.html#">Photography</a></p>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 portfolio-item design video">
                        <figure><img src="<?php echo $root; ?>assets/images/portfolio/classic/portfolio3.jpg" alt="Portfolio item 3">
                            <figcaption><a href="<?php echo $root; ?>assets/images/portfolio/classic/portfolio3.jpg" title="Portfolio item 3"
                                           data-rel="prettyPhoto[portfolio]" class="zoom-button"></a> <a
                                    href="single-portfolio.html" class="link-button"></a> <a
                                    href="portfolio-4.html#" class="like-button"><i
                                        class="fa fa-heart"></i><span>18</span></a></figcaption>
                        </figure>
                        <h2><a href="portfolio-4.html#">Lorem ipsum dolor</a></h2>

                        <p><a href="portfolio-4.html#">Design</a>, <a href="portfolio-4.html#">Video</a></p></div>
                    <div class="col-md-3 col-sm-4 col-xs-6 portfolio-item design wordpress fashion">
                        <figure><img src="<?php echo $root; ?>assets/images/portfolio/classic/portfolio2.jpg" alt="Portfolio item 2">
                            <figcaption><a href="<?php echo $root; ?>assets/images/portfolio/classic/portfolio2.jpg" title="Portfolio item 2"
                                           data-rel="prettyPhoto[portfolio]" class="zoom-button"></a> <a
                                    href="single-portfolio.html" class="link-button"></a> <a
                                    href="portfolio-4.html#" class="like-button"><i
                                        class="fa fa-heart"></i><span>12</span></a></figcaption>
                        </figure>
                        <h2><a href="portfolio-4.html#">Lorem ipsum dolor</a></h2>

                        <p><a href="portfolio-4.html#">Design</a>, <a href="portfolio-4.html#">Wordpress</a>, <a
                                href="portfolio-4.html#">Fashion</a></p></div>
                    <div class="col-md-3 col-sm-4 col-xs-6 portfolio-item design">
                        <figure><img src="<?php echo $root; ?>assets/images/portfolio/classic/portfolio15.jpg" alt="Portfolio item 15">
                            <figcaption><a href="<?php echo $root; ?>assets/images/portfolio/classic/portfolio15.jpg" title="Portfolio item 15"
                                           data-rel="prettyPhoto[portfolio]" class="zoom-button"></a> <a
                                    href="single-portfolio.html" class="link-button"></a> <a
                                    href="portfolio-4.html#" class="like-button"><i
                                        class="fa fa-heart"></i><span>7</span></a></figcaption>
                        </figure>
                        <h2><a href="portfolio-4.html#">Lorem ipsum dolor</a></h2>

                        <p><a href="portfolio-4.html#">Design</a></p></div>
                    <div class="col-md-3 col-sm-4 col-xs-6 portfolio-item design video">
                        <figure><img src="<?php echo $root; ?>assets/images/portfolio/classic/portfolio16.jpg" alt="Portfolio item 16">
                            <figcaption><a href="<?php echo $root; ?>assets/images/portfolio/classic/portfolio16.jpg" title="Portfolio item 16"
                                           data-rel="prettyPhoto[portfolio]" class="zoom-button"></a> <a
                                    href="single-portfolio.html" class="link-button"></a> <a
                                    href="portfolio-4.html#" class="like-button"><i
                                        class="fa fa-heart"></i><span>41</span></a></figcaption>
                        </figure>
                        <h2><a href="portfolio-4.html#">Lorem ipsum dolor</a></h2>

                        <p><a href="portfolio-4.html#">Design</a>, <a href="portfolio-4.html#">Video</a></p></div>
                    <div class="col-md-3 col-sm-4 col-xs-6 portfolio-item fashion photography">
                        <figure><img src="<?php echo $root; ?>assets/images/portfolio/classic/portfolio17.jpg" alt="Portfolio item 17">
                            <figcaption><a href="<?php echo $root; ?>assets/images/portfolio/classic/portfolio17.jpg" title="Portfolio item 17"
                                           data-rel="prettyPhoto[portfolio]" class="zoom-button"></a> <a
                                    href="single-portfolio.html" class="link-button"></a> <a
                                    href="portfolio-4.html#" class="like-button"><i
                                        class="fa fa-heart"></i><span>33</span></a></figcaption>
                        </figure>
                        <h2><a href="portfolio-4.html#">Lorem ipsum dolor</a></h2>

                        <p><a href="portfolio-4.html#">Fashion</a>, <a href="portfolio-4.html#">Photography</a></p>
                    </div>
                </div>
                <div class="pagination-container clear-border clearfix">
                    <div class="pull-right">
                        <ul class="pagination">
                            <li class="active"><a href="portfolio-4.html#">1</a></li>
                            <li><a href="portfolio-4.html#">2</a></li>
                            <li><a href="portfolio-4.html#">3</a></li>
                            <li><a href="portfolio-4.html#">4</a></li>
                            <li><a href="portfolio-4.html#">5</a></li>
                            <li><a href="portfolio-4.html#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
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