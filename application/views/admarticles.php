<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta charset="utf-8">
        <title>Luca Romano / Bootstrap wysihtml5 with image upload</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/lib/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/bootstrap-wysihtml5.css" />
        <script src="<?php echo base_url(); ?>public/lib/js/wysihtml5-0.3.0.js"></script>
        <script src="<?php echo base_url(); ?>public/lib/js/jquery-1.7.2.min.js"></script>
        <script src="<?php echo base_url(); ?>public/lib/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>public/css/bootstrap3-wysihtml5.js"></script>
    </head>
    <body>
        <div class="container">


            

            
            <div class="col-lg-12">
            
            <h1> Write Article</h1>

            </div>


            
           
            
            <div class="hero-unit" style="margin-top:5%">
 <div class="hero-unit">
     
                <input type="text" class="form-control" id="title" name="judul" placeholder="Judul Artikel" value="">
                <input type="text" class="form-control" id="title" name="category" placeholder="Judul Artikel" value="">
            </div>

                <hr/>
                <textarea class="textarea form-control" placeholder="Enter text ..." style="width: 810px; height: 200px"></textarea>
            </div>
            <button class="btn btn-large btn-danger">POSTING</button>
            
        </div>
        <script>
            $('.textarea').wysihtml5();
        </script> 
    </body>
</html>
