<!DOCTYPE html><!--[if IE 8]>
<html class="ie8"><![endif]--><!--[if IE 9]>
<html class="ie9"><![endif]--><!--[if !IE]><!-->
<html><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Venedor - Responsive eCommerce Template</title>
    <meta name="description" content="Responsive modern ecommerce Html5 Template">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php $root = base_url(); $asset = 'assets/'; ?>
    <link href="http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic%7CPT+Gudea:400,700,400italic%7CPT+Oswald:400,700,300"
          rel="stylesheet" id="googlefont">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/prettyPhoto.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/colpick.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/revslider.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/responsive.css">
    <link rel="icon" type="image/png" href="http://newsmartwave.net/html/venedor/green/images/icons/icon.png">
    <link rel="apple-touch-icon" sizes="57x57"
          href="http://newsmartwave.net/html/venedor/green/images/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72"
          href="http://newsmartwave.net/html/venedor/green/images/icons/apple-icon-72x72.png">
    <script src="<?php echo $root; ?>assets/js/jquery-3.1.0.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD3RzzpCYVvydltOx2hRPRB9XS6FSOM-NI"></script>
    <script src="<?php echo $root;?>assets/js/ajax.js"">></script>

    <script>
        function initialize() {
            var mapProp = {
                center:new google.maps.LatLng(40.71278,-74.00594),
                zoom:5,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            var map=new google.maps.Map(document.getElementById("map"),mapProp);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <script>window.jQuery || document.write(\'<script src="<?php echo $root; ?>assets/js/jquery-1.11.1.min.js"><\/script>\');</script>
    <!--[if lt IE 9]>
    <script src="<?php echo $root; ?>assets/js/html5shiv.js"></script>
    <script src="<?php echo $root; ?>assets/js/respond.min.js"></script><![endif]-->
    <style id="custom-style"></style>
</head>
