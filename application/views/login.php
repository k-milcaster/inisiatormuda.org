<html>
    <head>
        <title>Login | Inisiatormuda.org</title>
        <meta charset="utf-8">
        <link rel="icon" href="<?php echo base_url(); ?>public/images/favicon.ico">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>public/images/favicon.ico" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/camera.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/form.css">
        <script src="<?php echo base_url(); ?>public/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>public/js/jquery-migrate-1.1.1.js"></script>
        <script src="<?php echo base_url(); ?>public/js/superfish.js"></script>
        <script src="<?php echo base_url(); ?>public/js/jquery.equalheights.js"></script>
        <script src="<?php echo base_url(); ?>public/js/jquery.easing.1.3.js"></script>
        <script src="<?php echo base_url(); ?>public/js/camera.js"></script>
        <script src="<?php echo base_url(); ?>public/js/forms.js"></script>

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
    <title>Inisiatormuda.org</title>
    <link href="hover.css" rel="stylesheet" media="all">
    <meta charset="utf-8">
    <body style="background-color:#d7d7d7">
        <p style="text-align: center;
           padding-top: 60px"><img src="<?php echo base_url(); ?>public/images/logo.png" alt="logo"></p>
        <div class="content"><div class="ic"></div>
            <div class="container_12">
                <div class="grid_12">
                    <h3><span>Log In</span></h3></div>
                <div class="grid_6 prefix_1">
                    <form id="form" method="post" action="<?php echo base_url(); ?>admin/doLogin">               
                        <fieldset>
                            <label class="name">
                                <input type="text" name="username" placeholder="Username:" class="field">
                                <br class="error">
                                <span class="empty error-empty">*This field is required.</span> </label>
                            <label class="password">
                                <input type="password" name="password" placeholder="Password:" class="field">
                                <br class="clear">
                                <span class="empty error-empty">*This field is required.</span> </label>
                            <div class="clear"></div>
                            <div class="btns">
                                <input type="submit" name="login" value="log In" class="btn-red-gundek">
                                <div class="clear"></div>
                            </div></fieldset></form>
<!--                    Marketing Department: <br>
                    E-mail: <span class="col1"><a href="#">marketing@inisiatormuda.org</a></span> <br>
                    Phone: 1-518-312-4162-->
                </div>
            </div>
        </div>

