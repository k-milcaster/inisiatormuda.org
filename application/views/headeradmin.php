<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">
    <head>
        <title><?php echo $title ?> | Inisiatormuda.org</title>
        <meta charset="utf-8">
        <link rel="icon" href="<?php echo base_url(); ?>public/images/favicon.ico">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>public/images/favicon.ico" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/form.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/lib/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/bootstrap-wysihtml5.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/component.css" />
        <link href="<?php echo base_url() ?>public/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

        <script src="<?php echo base_url(); ?>public/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>public/js/jquery-migrate-1.1.1.js"></script>
        <script src="<?php echo base_url(); ?>public/js/superfish.js"></script>
        <script src="<?php echo base_url(); ?>public/js/jquery.equalheights.js"></script>
        <script src="<?php echo base_url(); ?>public/js/jquery.easing.1.3.js"></script>        
        <script src="<?php echo base_url(); ?>public/js/forms.js"></script>

        <script src="<?php echo base_url(); ?>public/lib/js/wysihtml5-0.3.0.js"></script>
        <script src="<?php echo base_url(); ?>public/lib/js/jquery-1.7.2.min.js"></script>
        <script src="<?php echo base_url(); ?>public/lib/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>public/css/bootstrap3-wysihtml5.js"></script>

        <script type="text/javascript" src="<?php echo base_url() ?>public/date_picker_bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>public/date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js"charset="UTF-8"></script> 



        <!--[if (gt IE 9)|!(IE)]><!-->
        <script src="<?php echo base_url(); ?>public/js/jquery.mobile.customized.min.js"></script>
        <!--<![endif]-->
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
    <body class="">
        <header> 
            <div class="container_12">
                <div class="grid_12"> 
                    <h1><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>public/images/logo.png" alt="public/Boo House"></a> </h1>
                    <div class="menu_block">

                        <nav  class="" >
                            <ul class="sf-menu">
                                <li <?php if ($title == "articles") echo 'class="current"'; ?>><a href="<?php echo base_url(); ?>admin/direktoriarticle">Articles</a></li>
                                <li <?php if ($title == "staffs") echo 'class="current"'; ?>><a href="<?php echo base_url(); ?>admin/staffs">Staffs</a></li>
                                <li <?php if ($title == "programs") echo 'class="current"'; ?>><a href="<?php echo base_url(); ?>admin/programs">Programs</a></li>
                                <li <?php if ($title == "careers") echo 'class="current"'; ?>><a href="<?php echo base_url(); ?>admin/careers">Careers</a></li>                                
                                <li <?php if ($title == "users") echo 'class="current"'; ?>><a href="<?php echo base_url(); ?>admin/users">User</a></li>                                
                                <li <?php if ($title == "system") echo 'class="current"'; ?>><a href="<?php echo base_url(); ?>admin/system">Maintenance</a></li>
                                <li <?php if ($title == "logout") echo 'class="current"'; ?>><a href="<?php echo base_url(); ?>admin/doLogout">Log Out</a></li>                                                                
                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>