<?php include 'inc/head.inc.php'; ?>
<?php include 'inc/topbar.inc.php'; ?>
<?php include 'inc/header.inc.php'; ?>
<?php include 'inc/menu.inc.php'; ?>
<?php include 'inc/panel.inc.php'?>

    <script type="text/javascript">

        $(document).ready(function () {
            $('#bttclose1').click(function () {
                $('#closepro1').hide();
            });

            $('#bttclose2').click(function () {
                $('#closepro2').hide();
            });

            $('#bttclose3').click(function () {
                $('#closepro3').hide();
            });

//            $('#addpro1').click(function () {
////                var addpro1 = ('#addpro1').val();
////                $.ajax({
////                    type:'POST',
////                    data: { addpro1: addpro1},
////                    url:'<?////=  site_url('addproduct');  ?>////';
////
////                });
//            });




        });

    </script>

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
        <div class="col-lg-6">
            <div class="row">
                <div class="col-md-12">
                    <header class="content-title"><h1 class="title">Compare Products</h1>

                        <p class="title-desc">If after products comparing you find it hard to choose, you can write to
                            our live support.</p></header>
                    <div class="xs-margin"></div>

                    <div class="row">
                        <div class="col-md-6 table-responsive">
                            <table class="table table-striped compare-item-table">
                                <tr>
                                    <td class="table-title">PRODUCT NAME</td>
                                    <td >

                                    <p style="margin-top: 10px;"><br><br><br><br><br><br></p>
                                    <p><br><br><br><br></p>




                                </tr>
                                <tr>
                                    <td style="height:88px;" class="table-title">PRICE</td>

                                </tr>
                                <tr class="item-brand-col">
                                    <td class="table-title">BRAND</td>

                                </tr>
                                <tr>
                                    <td class="table-title">AVAILABILITY</td>

                                </tr>
                                <tr>
                                    <td style="height:90px;" class="table-title">Rating</td>
                                    <h1></h1>


                                </tr>
                                <tr>
                                    <td style="height:172px;" class="table-title">Summary</td>

                                </tr>
                                <tr>
                                    <td class="table-title">Weight</td>

                                </tr>
                                <tr>
                                    <td class="table-title">Dimensions</td>

                                </tr>
                                <tr>
                                    <td class="table-title"></td>
                                    <td><a href="<?php echo $root; ?>cart"></a>

                                        <div class="sm-margin"></div>
                                    </td>
                                </tr>
                            </table>
                            <div class="xlg-margin"></div>
                        </div>

                        <div class="col-md-6 table-responsive" id="closepro1">
                            <table class="table table-striped compare-item-table">
                                <tr>
                                    <td >
                                        <figure><a href="<?php echo $root; ?>single"><img src="<?php echo $root; ?>assets/images/products/compare1.jpg"
                                                                                          alt="Lowlands Lace Blouse"></a>
                                        </figure>
                                        <p class="item-name"><a href="<?php echo $root; ?>single">Lowlands Lace Blouse</a>
                                        </p></td>


                                </tr>
                                <tr>
                                    <td><span  class="item-price-special">$130</span></td>
                                </tr>
                                <tr class="item-brand-col">
                                    <td >SONY</td>
                                </tr>
                                <tr>
                                    <td >In Stock</td>
                                </tr>
                                <tr>
                                    <td >
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="90"></div>
                                            </div>
                                            <span class="ratings-amount">3 Reviews</span></div>
                                    </td>


                                </tr>
                                <tr>
                                    <td >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit mi, lacinia
                                        sed suscipit quis, dapibus nec odio. Pellentesque eu porttitor eros.
                                    </td>
                                </tr>
                                <tr>
                                    <td >1.2 Kg</td>
                                </tr>
                                <tr>
                                    <td>45 cm x 35 cm x 68 cm</td>
                                </tr>
                                <tr>
                                    <td><a href="<?php echo $root; ?>addproduct" class="btn btn-custom-2">Add to Cart</a>
                                        <div class="sm-margin"></div>
                                        <span  id="bttclose1" class="close-button"></span></td>
                                </tr>
                            </table>
                            <div class="xlg-margin"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2" id="closepro2">
            <div class="row">
                <div class="col-md-12">
                    <div class="xs-margin"></div>
                    <h1 style="margin-top: 24px;"></h1>
                    <br><br><br><br>

                    <div class="row">
                        <div class="col-md-12 table-responsive">
                            <table class="table table-striped compare-item-table">
                                <tr>
                                    <td >
                                        <figure><a href="<?php echo $root; ?>single"><img src="<?php echo $root; ?>assets/images/products/compare1.jpg"
                                                                                          alt="Lowlands Lace Blouse"></a>
                                        </figure>
                                        <p class="item-name"><a href="<?php echo $root; ?>single">Lowlands Lace Blouse</a>
                                        </p></td>


                                </tr>
                                <tr>
                                    <td><span  class="item-price-special">$130</span></td>
                                </tr>
                                <tr class="item-brand-col">
                                    <td >SONY</td>
                                </tr>
                                <tr>
                                    <td >In Stock</td>
                                </tr>
                                <tr>
                                    <td >
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="90"></div>
                                            </div>
                                            <span class="ratings-amount">3 Reviews</span></div>
                                    </td>


                                </tr>
                                <tr>
                                    <td >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit mi, lacinia
                                        sed suscipit quis, dapibus nec odio.
                                    </td>
                                </tr>
                                <tr>
                                    <td >1.2 Kg</td>
                                </tr>
                                <tr>
                                    <td>45 cm x 35 cm x 68 cm</td>
                                </tr>
                                <tr>
                                    <td><a href="<?php echo $root; ?>addproduct" class="btn btn-custom-2">Add to Cart</a>

                                        <div class="sm-margin"></div>
                                        <span  id="bttclose2" class="close-button"></span></td>
                                </tr>
                            </table>
                            <div class="xlg-margin"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-2" style="margin-left: 60px;" id="closepro3">
            <div class="row">
                <div class="col-md-12">
                    <div class="xs-margin"></div>
                    <h1 style="margin-top: 24px;"></h1>
                    <br><br><br><br>
                     <div class="row" >

                        <div class="col-md-12 table-responsive">
                            <table class="table table-striped compare-item-table">
                                <tr>
                                    <td >
                                        <figure><a href="<?php echo $root; ?>single"><img src="<?php echo $root; ?>assets/images/products/compare1.jpg"
                                                                                          alt="Lowlands Lace Blouse"></a>
                                        </figure>
                                        <p class="item-name"><a href="<?php echo $root; ?>single">Lowlands Lace Blouse</a>
                                        </p></td>


                                </tr>
                                <tr>
                                    <td><span  class="item-price-special">$130</span></td>
                                </tr>
                                <tr class="item-brand-col">
                                    <td >SONY</td>
                                </tr>
                                <tr>
                                    <td id="closepro">In Stock</td>
                                </tr>
                                <tr>
                                    <td >
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="90"></div>
                                            </div>
                                            <span class="ratings-amount">3 Reviews</span></div>
                                    </td>


                                </tr>
                                <tr>
                                    <td >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit mi, lacinia
                                        sed suscipit quis, dapibus nec odio.
                                    </td>
                                </tr>
                                <tr>
                                    <td >1.2 Kg</td>
                                </tr>
                                <tr>
                                    <td >45 cm x 35 cm x 68 cm</td>
                                </tr>
                                <tr>
                                    <td><a href="<?php echo $root; ?>addproduct" class="btn btn-custom-2">Add to Cart</a>

                                        <div class="sm-margin"></div>
                                        <span  id="bttclose3" class="close-button"></span></td>
                                </tr>
                            </table>
                            <div class="xlg-margin"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                <header class="content-title"><h1 class="title">Compare Products</h1>-->
<!---->
<!--                    <p class="title-desc">If after products comparing you find it hard to choose, you can write to-->
<!--                        our live support.</p></header>-->
<!--                <div class="xs-margin"></div>-->
<!---->
<!--                <div class="row">-->
<!--                    <div class="col-md-12 table-responsive">-->
<!--                        <table class="table table-striped compare-item-table">-->
<!--                            <tr>-->
<!--                                <td class="table-title">PRODUCT NAME</td>-->
<!--                                <td id="closepro">-->
<!--                                    <figure><a href="--><?php //echo $root; ?><!--single"><img src="--><?php //echo $root; ?><!--assets/images/products/compare1.jpg"-->
<!--                                                                                  alt="Lowlands Lace Blouse"></a>-->
<!--                                    </figure>-->
<!--                                    <p class="item-name"><a href="--><?php //echo $root; ?><!--single">Lowlands Lace Blouse</a>-->
<!--                                    </p></td>-->
<!--                                <td id="closepro1">-->
<!--                                    <figure><a href="--><?php //echo $root; ?><!--single"><img src="--><?php //echo $root; ?><!--assets/images/products/compare2.jpg"-->
<!--                                                                                  alt="Samsung Galaxy Ace"></a>-->
<!--                                    </figure>-->
<!--                                    <p class="item-name"><a href="--><?php //echo $root; ?><!--single">Samsung Galaxy Ace</a></p>-->
<!--                                </td id="closepro2">-->
<!--                                <td id="closepro3">-->
<!--                                    <figure><a href="--><?php //echo $root; ?><!--single"><img src="--><?php //echo $root; ?><!--assets/images/products/compare3.jpg"-->
<!--                                                                                  alt="Iphone Case Cover"></a>-->
<!--                                    </figure>-->
<!--                                    <p class="item-name"><a href="--><?php //echo $root; ?><!--single">Iphone Case Cover</a></p>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td class="table-title">PRICE</td>-->
<!--                                <td><span id="closepro" class="item-price-special">$130</span></td>-->
<!--                                <td><span id="closepro1" class="item-price-special">$599</span></td>-->
<!--                                <td><span id="closepro2" class="item-price-special">$399</span></td>-->
<!--                            </tr>-->
<!--                            <tr class="item-brand-col">-->
<!--                                <td class="table-title">BRAND</td>-->
<!--                                <td id="closepro">SONY</td>-->
<!--                                <td id="closepro1">SAMSUNG</td>-->
<!--                                <td id="closepro2">APPLE</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td class="table-title">AVAILABILITY</td>-->
<!--                                <td id="closepro">In Stock</td>-->
<!--                                <td id="closepro1">Out of Stock</td>-->
<!--                                <td id="closepro2">In Stock</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td class="table-title">Rating</td>-->
<!--                                <td id="closepro">-->
<!--                                    <div class="ratings-container">-->
<!--                                        <div class="ratings">-->
<!--                                            <div class="ratings-result" data-result="90"></div>-->
<!--                                        </div>-->
<!--                                        <span class="ratings-amount">3 Reviews</span></div>-->
<!--                                </td>-->
<!--                                <td id="closepro1">-->
<!--                                    <div class="ratings-container">-->
<!--                                        <div class="ratings">-->
<!--                                            <div class="ratings-result" data-result="75"></div>-->
<!--                                        </div>-->
<!--                                        <span class="ratings-amount">3 Reviews</span></div>-->
<!--                                </td>-->
<!--                                <td id="closepro2">-->
<!--                                    <div class="ratings-container">-->
<!--                                        <div class="ratings">-->
<!--                                            <div class="ratings-result" data-result="54"></div>-->
<!--                                        </div>-->
<!--                                        <span class="ratings-amount">3 Reviews</span></div>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td class="table-title">Summary</td>-->
<!--                                <td id="closepro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit mi, lacinia-->
<!--                                    sed suscipit quis, dapibus nec odio. Pellentesque eu porttitor eros.-->
<!--                                </td>-->
<!--                                <td id="closepro1">Sed ac lacus magna. In pulvinar diam diam, et lobortis massa tincidunt id.-->
<!--                                    Quisque porttitor venenatis dolor sit amet sodales. Aliquam ligula erat.-->
<!--                                </td>-->
<!--                                <td id="closepro2">Curabitur convallis et sem at cursus. Fusce fringilla feugiat dictum. Cras non-->
<!--                                    venenatis metus. Aliquam in tortor in justo dignissim hendrerit.-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td class="table-title">Weight</td>-->
<!--                                <td id="closepro">1.2 Kg</td>-->
<!--                                <td id="closepro1">2.1 Kg</td>-->
<!--                                <td id="closepro2">0.8 Kg</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td class="table-title">Dimensions</td>-->
<!--                                <td id="closepro">45 cm x 35 cm x 68 cm</td>-->
<!--                                <td id="closepro1">21 cm x 32 cm x 61 cm</td>-->
<!--                                <td id="closepro2">33 cm x 22 cm x 48 cm</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td class="table-title"></td>-->
<!--                                <td><a href="--><?php //echo $root; ?><!--cart" class="btn btn-custom-2">Add to Cart</a>-->
<!---->
<!--                                    <div class="sm-margin"></div>-->
<!--                                    <span  id="bttclose" class="close-button"></span></td>-->
<!--                                <td><a href="--><?php //echo $root; ?><!--cart" class="btn btn-custom-2">Add to Cart</a>-->
<!---->
<!--                                    <div class="sm-margin"></div>-->
<!--                                    <span id="bttclose1" class="close-button"></span></td>-->
<!--                                <td><a href="--><?php //echo $root; ?><!--cart" class="btn btn-custom-2">Add to Cart</a>-->
<!---->
<!--                                    <div class="sm-margin"></div>-->
<!--                                    <span id="bttclose2" class="close-button"></span></td>-->
<!--                            </tr>-->
<!--                        </table>-->
<!--                        <div class="xlg-margin"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</section>

<?php
include 'inc/footer.inc.php';
include 'inc/footerfiles.inc.php';
?>