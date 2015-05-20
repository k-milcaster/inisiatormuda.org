<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">
    <head>
        <title>Home | Inisiatormuda.org</title>
        <meta charset="utf-8">
        <link rel="icon" href="<?php echo base_url(); ?>public/images/favicon.ico">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>public/images/favicon.ico" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/camera.css">
        <script src="<?php echo base_url(); ?>public/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>public/js/jquery-migrate-1.1.1.js"></script>
        <script src="<?php echo base_url(); ?>public/js/superfish.js"></script>
        <script src="<?php echo base_url(); ?>public/js/jquery.equalheights.js"></script>
        <script src="<?php echo base_url(); ?>public/js/jquery.easing.1.3.js"></script>
        <script src="<?php echo base_url(); ?>public/js/camera.js"></script>
        <!--[if (gt IE 9)|!(IE)]><!-->
        <script src="<?php echo base_url(); ?>public/js/jquery.mobile.customized.min.js"></script>
        <!--<![endif]-->
        <script>
            $(document).ready(function () {
                jQuery('#camera_wrap').camera({
                    loader: false,
                    pagination: false,
                    thumbnails: false,
                    height: '32.92857142857143%',
                    minHeight: '300',
                    caption: false,
                    navigation: true,
                    fx: 'mosaic'
                });
            });
        </script>
        <script>
            $(function () {
                // Initialize the gallery
                $('.port a.gal').touchTouch();
            });
        </script>
        <!--[if lt IE 8]>
          <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
              <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
            </a>
         </div>
       <![endif]-->
        <!--[if lt IE 9]>
          <script src="public/js/html5shiv.js"></script>
          <link rel="stylesheet" media="screen" href="public/css/ie.css">
    
        <![endif]-->
    </head>
    <body  class="page1">
        <header> 
            <div class="container_12">
                <div class="grid_12"> 
                    <h1><a href="<?php echo base_url(); ?>"><img src="public/images/logo.png" alt="public/Boo House"></a> </h1>
                    <div class="menu_block">

                        <nav  class="" >
                            <ul class="sf-menu">
                                <li <?php if ($title == "Home") echo 'class="current"'; ?>><a href="<?php echo base_url(); ?>">Home</a></li>
                                <li <?php if ($title == "About") echo 'class="current"'; ?>>
                                    <a href="#">Goresan Pena</a>
                                    <ul>
                                        <li><a href="#">Submenu 1</a></li>
                                        <li><a href="#">Submenu 2</a></li>
                                        <li><a href="#">Submenu 3</a></li>
                                    </ul>
                                </li>
                                <li <?php if ($title == "Portofolio") echo 'class="current"'; ?>>
                                    <a href="#">Tentang Inisiator</a>
                                    <ul>
                                        <li><a href="#">Submenu 1</a></li>
                                        <li><a href="#">Submenu 2</a></li>
                                    </ul>
                                </li>
                                <li <?php if ($title == "Clients") echo 'class="current"'; ?>><a href="#">Liputan Media</a></li>
                                <li <?php if ($title == "Contacts") echo 'class="current"'; ?>><a href="#">Contacts</a></li>
                            </ul>
                        </nav>

                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>