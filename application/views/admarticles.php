<div class="content"><div class="ic"></div>
    <h2>Write Article</h2>
    <div class="container_12">                  
        <form id="form" method="post" action="<?php echo base_url(); ?>admin/posting">
            <div class="hero-unit" style="margin-top:5%">

                <div class="hero-unit">

                    <?php
                    $a = $this->session->flashdata('setcat');

                    echo $a;
                    ?>
                </div>
                <br>
                <input type="text" name="categorys" class="form-control" id="exampleInputEmail1" placeholder="Input New Category">

                
                
                <textarea name = "teks"class="textarea form-control"  placeholder="Enter text ..." style="width: 950px; height: 200px" ></textarea>
            </div>
             <div class="grid_6">
            <p>Upload picture :</p>
                    <label class="name">
                        <input type='file' onchange="readURL(this);" name="userfile" accept="image/jpeg, image/png"/>
                    </label>
                    <div class="clear"></div>
                    <?php
                    if (isset($err)) {
                        echo '<h5>' . $err . '</h5>';
                    }
                    ?></div>
                    <div class="grid_6">
            <br>
            <img id="blah" src="<?php echo base_url(); ?>public/images/400.jpg" alt="your image" />
        </div>
        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah')
                                .attr('src', e.target.result)
                                ;
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
        <script type="text/javascript">
            $('.datepicker').datetimepicker({
                language: 'en',
                weekStart: 1,
                todayBtn: 1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                minView: 2,
                forceParse: 0
            });
        </script>
            <br>
            
   
            <button name="save" class="btn btn-large btn-danger">SAVE ARTICLE</button>       
            <script>
                $('.textarea').wysihtml5();
            </script>
        </form>
    </div>
</div>