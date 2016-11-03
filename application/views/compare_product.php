<?php include 'inc/head.inc.php'; ?>

    <body>
<!-- This is test by RAMISH AHMED BUTT -->

<?php include 'inc/load_menu_file.php'; ?>

<section id="content">
    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="<?php echo $root; ?>home">Home</a></li>
                <li class="active">Compare Products</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="content-title"><h1 class="title">Compare Products</h1>

                    <p class="title-desc">If after products comparing you find it hard to choose, you can write to
                        our live support.</p></header>
                <div class="xs-margin"></div>
                <div class="row">
                    <div class="col-md-12 table-responsive">
                        <table class="table table-striped compare-item-table">
                            <tr>
                                <td class="table-title">PRODUCT NAME</td>
                                <td>
                                    <figure><a href="<?php echo $root; ?>single"><img src="<?php echo $root; ?>assets/images/products/compare1.jpg"
                                                                                  alt="Lowlands Lace Blouse"></a>
                                    </figure>
                                    <p class="item-name"><a href="<?php echo $root; ?>single">Lowlands Lace Blouse</a>
                                    </p></td>
                                <td>
                                    <figure><a href="<?php echo $root; ?>single"><img src="<?php echo $root; ?>assets/images/products/compare2.jpg"
                                                                                  alt="Samsung Galaxy Ace"></a>
                                    </figure>
                                    <p class="item-name"><a href="<?php echo $root; ?>single">Samsung Galaxy Ace</a></p>
                                </td>
                                <td>
                                    <figure><a href="<?php echo $root; ?>single"><img src="<?php echo $root; ?>assets/images/products/compare3.jpg"
                                                                                  alt="Iphone Case Cover"></a>
                                    </figure>
                                    <p class="item-name"><a href="<?php echo $root; ?>single">Iphone Case Cover</a></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-title">PRICE</td>
                                <td><span class="item-price-special">$130</span></td>
                                <td><span class="item-price-special">$599</span></td>
                                <td><span class="item-price-special">$399</span></td>
                            </tr>
                            <tr class="item-brand-col">
                                <td class="table-title">BRAND</td>
                                <td>SONY</td>
                                <td>SAMSUNG</td>
                                <td>APPLE</td>
                            </tr>
                            <tr>
                                <td class="table-title">AVAILABILITY</td>
                                <td>In Stock</td>
                                <td>Out of Stock</td>
                                <td>In Stock</td>
                            </tr>
                            <tr>
                                <td class="table-title">Rating</td>
                                <td>
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-result" data-result="90"></div>
                                        </div>
                                        <span class="ratings-amount">3 Reviews</span></div>
                                </td>
                                <td>
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-result" data-result="75"></div>
                                        </div>
                                        <span class="ratings-amount">3 Reviews</span></div>
                                </td>
                                <td>
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-result" data-result="54"></div>
                                        </div>
                                        <span class="ratings-amount">3 Reviews</span></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-title">Summary</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit mi, lacinia
                                    sed suscipit quis, dapibus nec odio. Pellentesque eu porttitor eros.
                                </td>
                                <td>Sed ac lacus magna. In pulvinar diam diam, et lobortis massa tincidunt id.
                                    Quisque porttitor venenatis dolor sit amet sodales. Aliquam ligula erat.
                                </td>
                                <td>Curabitur convallis et sem at cursus. Fusce fringilla feugiat dictum. Cras non
                                    venenatis metus. Aliquam in tortor in justo dignissim hendrerit.
                                </td>
                            </tr>
                            <tr>
                                <td class="table-title">Weight</td>
                                <td>1.2 Kg</td>
                                <td>2.1 Kg</td>
                                <td>0.8 Kg</td>
                            </tr>
                            <tr>
                                <td class="table-title">Dimensions</td>
                                <td>45 cm x 35 cm x 68 cm</td>
                                <td>21 cm x 32 cm x 61 cm</td>
                                <td>33 cm x 22 cm x 48 cm</td>
                            </tr>
                            <tr>
                                <td class="table-title"></td>
                                <td><a href="<?php echo $root; ?>cart" class="btn btn-custom-2">Add to Cart</a>

                                    <div class="sm-margin"></div>
                                    <a href="<?php echo $root; ?>" class="close-button"></a></td>
                                <td><a href="<?php echo $root; ?>cart" class="btn btn-custom-2">Add to Cart</a>

                                    <div class="sm-margin"></div>
                                    <a href="<?php echo $root; ?>" class="close-button"></a></td>
                                <td><a href="<?php echo $root; ?>cart" class="btn btn-custom-2">Add to Cart</a>

                                    <div class="sm-margin"></div>
                                    <a href="<?php echo $root; ?>" class="close-button"></a></td>
                            </tr>
                        </table>
                        <div class="xlg-margin"></div>
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