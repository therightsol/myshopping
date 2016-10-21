<?php include 'inc/head.inc.php'; ?>
<?php include 'inc/topbar.inc.php'; ?>
<?php include 'inc/header.inc.php'; ?>
<?php include 'inc/menu.inc.php'; ?>
<?php include 'inc/panel.inc.php'?>

<section id="content">
    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="<?php echo $root; ?>home">Home</a></li>
                <li class="active">Portfolio 4 Column</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="content-title"><h1 class="title">Products</h1>

                    <p class="title-desc">Look at all works of out authors.</p></header>
                <ul id="portfolio-filter" class="clearfix">
                    <li><a href="<?php echo $root; ?>products" class="active" data-filter="*">All</a></li>
                    <li><a href="<?php echo $root; ?>products" data-filter=".photography">Photography</a></li>
                    <li><a href="<?php echo $root; ?>products" data-filter=".fashion">Fashion</a></li>
                    <li><a href="<?php echo $root; ?>products" data-filter=".video">Video</a></li>
                    <li><a href="<?php echo $root; ?>products" data-filter=".design">Design</a></li>
                    <li><a href="<?php echo $root; ?>products" data-filter=".wordpress">Wordpress</a></li>
                </ul>
                <div class="row portfolio-item-container" data-maxcolumn="4" data-layoutmode="fitRows">
                    <div class="col-md-3 col-sm-4 col-xs-6 portfolio-item photography">
                        <figure><img src="<?php echo $root; ?>assets/images/portfolio/classic/portfolio4.jpg" alt="Portfolio item 4">
                            <figcaption><a href="<?php echo $root; ?>assets/images/portfolio/classic/portfolio4.jpg" title="Portfolio item 4"
                                           data-rel="prettyPhoto[portfolio]" class="zoom-button"></a> <a
                                    href="<?php echo $root; ?>single" class="link-button"></a> <a
                                    href="<?php echo $root; ?>single" class="like-button"><i
                                        class="fa fa-heart"></i><span>16</span></a></figcaption>
                        </figure>
                        <h2><a href="<?php echo $root; ?>single">Lorem ipsum dolor</a></h2>

                        <p><a href="<?php echo $root; ?>category_list">Photography</a></p></div>
                    <div class="col-md-3 col-sm-4 col-xs-6 portfolio-item wordpress">
                        <figure><img src="<?php echo $root; ?>assets/images/portfolio/classic/portfolio11.jpg" alt="Portfolio item 11">
                            <figcaption><a href="<?php echo $root; ?>assets/images/portfolio/classic/portfolio11.jpg" title="Portfolio item 11"
                                           data-rel="prettyPhoto[portfolio]" class="zoom-button"></a> <a
                                    href="<?php echo $root; ?>single" class="link-button"></a> <a
                                    href="<?php echo $root; ?>single" class="like-button"><i
                                        class="fa fa-heart"></i><span>9</span></a></figcaption>
                        </figure>
                        <h2><a href="<?php echo $root; ?>single">Lorem ipsum dolor</a></h2>

                        <p><a href="<?php echo $root; ?>category_list">Design</a>, <a href="<?php echo $root; ?>category_list">Wordpress</a></p>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 portfolio-item video">
                        <figure><img src="<?php echo $root; ?>assets/images/portfolio/classic/portfolio1.jpg" alt="Portfolio item 1">
                            <figcaption><a href="http://www.youtube.com/watch?v=vEkwlqsdbyk"
                                           title="Portfolio Video Example" data-rel="prettyPhoto[portfolio]"
                                           class="zoom-button"></a> <a href="<?php echo $root; ?>single"
                                                                       class="link-button"></a> <a
                                    href="<?php echo $root; ?>single" class="like-button"><i
                                        class="fa fa-heart"></i><span>14</span></a></figcaption>
                        </figure>
                        <h2><a href="<?php echo $root; ?>single">Lorem ipsum dolor</a></h2>

                        <p><a href="<?php echo $root; ?>category_list">Video</a></p></div>
                    <div class="col-md-3 col-sm-4 col-xs-6 portfolio-item photography">
                        <figure><img src="<?php echo $root; ?>assets/images/portfolio/classic/portfolio8.jpg" alt="Portfolio item 8">
                            <figcaption><a href="<?php echo $root; ?>assets/images/portfolio/classic/portfolio8.jpg" title="Portfolio item 8"
                                           data-rel="prettyPhoto[portfolio]" class="zoom-button"></a> <a
                                    href="<?php echo $root; ?>single" class="link-button"></a> <a
                                    href="<?php echo $root; ?>single" class="like-button"><i
                                        class="fa fa-heart"></i><span>8</span></a></figcaption>
                        </figure>
                        <h2><a href="<?php echo $root; ?>single">Lorem ipsum dolor</a></h2>

                        <p><a href="<?php echo $root; ?>category_list">Photography</a></p></div>
                    <div class="col-md-3 col-sm-4 col-xs-6 portfolio-item fashion photography">
                        <figure><img src="<?php echo $root; ?>assets/images/portfolio/classic/portfolio13.jpg" alt="Portfolio item 13">
                            <figcaption><a href="<?php echo $root; ?>assets/images/portfolio/classic/portfolio13.jpg" title="Portfolio item 13"
                                           data-rel="prettyPhoto[portfolio]" class="zoom-button"></a> <a
                                    href="<?php echo $root; ?>single" class="link-button"></a> <a
                                    href="<?php echo $root; ?>single" class="like-button"><i
                                        class="fa fa-heart"></i><span>5</span></a></figcaption>
                        </figure>
                        <h2><a href="<?php echo $root; ?>single">Lorem ipsum dolor</a></h2>

                        <p><a href="<?php echo $root; ?>category_list">Fashion</a>, <a href="<?php echo $root; ?>category_list">Photography</a></p>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 portfolio-item fashion video">
                        <figure><img src="<?php echo $root; ?>assets/images/portfolio/classic/portfolio14.jpg" alt="Portfolio item 14">
                            <figcaption><a href="<?php echo $root; ?>assets/images/portfolio/classic/portfolio14.jpg" title="Portfolio item 14"
                                           data-rel="prettyPhoto[portfolio]" class="zoom-button"></a> <a
                                    href="<?php echo $root; ?>single" class="link-button"></a> <a
                                    href="<?php echo $root; ?>single" class="like-button"><i
                                        class="fa fa-heart"></i><span>12</span></a></figcaption>
                        </figure>
                        <h2><a href="<?php echo $root; ?>single">Lorem ipsum dolor</a></h2>

                        <p><a href="<?php echo $root; ?>category_list">Fashion</a>, <a href="<?php echo $root; ?>category_list_list">Video</a></p></div>
                    <div class="col-md-3 col-sm-4 col-xs-6 portfolio-item fashion photography">
                        <figure><img src="<?php echo $root; ?>assets/images/portfolio/classic/portfolio10.jpg" alt="Portfolio item 10">
                            <figcaption><a href="<?php echo $root; ?>assets/images/portfolio/classic/portfolio10.jpg" title="Portfolio item 10"
                                           data-rel="prettyPhoto[portfolio]" class="zoom-button"></a> <a
                                    href="<?php echo $root; ?>single" class="link-button"></a> <a
                                    href="<?php echo $root; ?>single" class="like-button"><i
                                        class="fa fa-heart"></i><span>22</span></a></figcaption>
                        </figure>
                        <h2><a href="<?php echo $root; ?>single">Lorem ipsum dolor</a></h2>

                        <p><a href="<?php echo $root; ?>category_list">Fashion</a>, <a href="<?php echo $root; ?>category_list_list">Photography</a></p>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 portfolio-item design video">
                        <figure><img src="<?php echo $root; ?>assets/images/portfolio/classic/portfolio3.jpg" alt="Portfolio item 3">
                            <figcaption><a href="<?php echo $root; ?>assets/images/portfolio/classic/portfolio3.jpg" title="Portfolio item 3"
                                           data-rel="prettyPhoto[portfolio]" class="zoom-button"></a> <a
                                    href="<?php echo $root; ?>single" class="link-button"></a> <a
                                    href="<?php echo $root; ?>single" class="like-button"><i
                                        class="fa fa-heart"></i><span>18</span></a></figcaption>
                        </figure>
                        <h2><a href="<?php echo $root; ?>single">Lorem ipsum dolor</a></h2>

                        <p><a href="<?php echo $root; ?>category_list">Design</a>, <a href="<?php echo $root; ?>category_list_list">Video</a></p></div>
                    <div class="col-md-3 col-sm-4 col-xs-6 portfolio-item design wordpress fashion">
                        <figure><img src="<?php echo $root; ?>assets/images/portfolio/classic/portfolio2.jpg" alt="Portfolio item 2">
                            <figcaption><a href="<?php echo $root; ?>assets/images/portfolio/classic/portfolio2.jpg" title="Portfolio item 2"
                                           data-rel="prettyPhoto[portfolio]" class="zoom-button"></a> <a
                                    href="<?php echo $root; ?>single" class="link-button"></a> <a
                                    href="<?php echo $root; ?>single" class="like-button"><i
                                        class="fa fa-heart"></i><span>12</span></a></figcaption>
                        </figure>
                        <h2><a href="<?php echo $root; ?>single">Lorem ipsum dolor</a></h2>

                        <p><a href="<?php echo $root; ?>category_list">Design</a>, <a href="<?php echo $root; ?>category_list_list">Wordpress</a>, <a
                                href="<?php echo $root; ?>category_list">Fashion</a></p></div>
                    <div class="col-md-3 col-sm-4 col-xs-6 portfolio-item design">
                        <figure><img src="<?php echo $root; ?>assets/images/portfolio/classic/portfolio15.jpg" alt="Portfolio item 15">
                            <figcaption><a href="<?php echo $root; ?>assets/images/portfolio/classic/portfolio15.jpg" title="Portfolio item 15"
                                           data-rel="prettyPhoto[portfolio]" class="zoom-button"></a> <a
                                    href="<?php echo $root; ?>single" class="link-button"></a> <a
                                    href="<?php echo $root; ?>single" class="like-button"><i
                                        class="fa fa-heart"></i><span>7</span></a></figcaption>
                        </figure>
                        <h2><a href="<?php echo $root; ?>single">Lorem ipsum dolor</a></h2>

                        <p><a href="<?php echo $root; ?>category_list">Design</a></p></div>
                    <div class="col-md-3 col-sm-4 col-xs-6 portfolio-item design video">
                        <figure><img src="<?php echo $root; ?>assets/images/portfolio/classic/portfolio16.jpg" alt="Portfolio item 16">
                            <figcaption><a href="<?php echo $root; ?>assets/images/portfolio/classic/portfolio16.jpg" title="Portfolio item 16"
                                           data-rel="prettyPhoto[portfolio]" class="zoom-button"></a> <a
                                    href="<?php echo $root; ?>single" class="link-button"></a> <a
                                    href="<?php echo $root; ?>single" class="like-button"><i
                                        class="fa fa-heart"></i><span>41</span></a></figcaption>
                        </figure>
                        <h2><a href="<?php echo $root; ?>single">Lorem ipsum dolor</a></h2>

                        <p><a href="<?php echo $root; ?>category_list">Design</a>, <a href="<?php echo $root; ?>category_list">Video</a></p></div>
                    <div class="col-md-3 col-sm-4 col-xs-6 portfolio-item fashion photography">
                        <figure><img src="<?php echo $root; ?>assets/images/portfolio/classic/portfolio17.jpg" alt="Portfolio item 17">
                            <figcaption><a href="<?php echo $root; ?>assets/images/portfolio/classic/portfolio17.jpg" title="Portfolio item 17"
                                           data-rel="prettyPhoto[portfolio]" class="zoom-button"></a> <a
                                    href="<?php echo $root; ?>single" class="link-button"></a> <a
                                    href="<?php echo $root; ?>single" class="like-button"><i
                                        class="fa fa-heart"></i><span>33</span></a></figcaption>
                        </figure>
                        <h2><a href="<?php echo $root; ?>single">Lorem ipsum dolor</a></h2>

                        <p><a href="<?php echo $root; ?>category_list">Fashion</a>, <a href="<?php echo $root; ?>category_list">Photography</a></p>
                    </div>
                </div>
                <div class="pagination-container clear-border clearfix">
                    <div class="pull-right">
                        <ul class="pagination">
                            <li class="active"><a href="<?php echo $root; ?>products">1</a></li>
                            <li><a href="<?php echo $root; ?>products">2</a></li>
                            <li><a href="<?php echo $root; ?>products">3</a></li>
                            <li><a href="<?php echo $root; ?>products">4</a></li>
                            <li><a href="<?php echo $root; ?>products">5</a></li>
                            <li><a href="<?php echo $root; ?>products"><i class="fa fa-angle-right"></i></a></li>
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