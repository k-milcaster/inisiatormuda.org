<div class="content"><div class="ic"></div>
    <h2>Edit Article</h2><br>
    <?php
                    if (isset($err)) {
                        echo '<h5>' . $err . '</h5>';
                    }
                    ?>
    <div class="container_12">                  
        <form id="form" method="post" action="<?php echo base_url(); ?>admin/edit/<?php $c = $this->session->flashdata('idart');echo $c;?>"enctype="multipart/form-data">
            
            
            
            <div class="hero-unit" style="margin-top:5%">

                <div class="hero-unit">

                    <?php
                    $a = $this->session->flashdata('categoryedit');

                    echo $a;
                    ?>
                </div>
                <br>
                <input type="text" name="categorys" class="form-control" id="exampleInputEmail1" placeholder="Input New Category">

                <textarea name = "teks"class="textarea form-control"  placeholder="Enter text ..." style="width: 950px; height: 200px" ><?php
                    $b = $this->session->flashdata('contentedit');

                    echo $b;
                    ?></textarea>
                
                <div class="clear"></div>
             <h2>Upload Image</h2>
             <div class="grid_8">
                
                 <div class="clear"></div>
                <label class="name">
                    <p>gambar utama(Slider Web , Image awal artikel )</p>
                    <input type='file' onchange="readURL(this);" name="userfile1" accept="image/jpeg, image/png"/>
                    <p>harus diatas 500 x 206 pixel </p>
                </label>
                <label class="name">
                    <p>gambar kedua </p>
                    <input type='file' onchange="readURL(this);" name="userfile2" accept="image/jpeg, image/png"/>
                </label>
                <label class="name">
                    <p>gambar ketiga</p>
                    <input type='file' onchange="readURL(this);" name="userfile3" accept="image/jpeg, image/png"/>
                </label>
                
                
                <div class="clear"></div>
                <?php
                if (isset($err)) {
                    echo '<h5>' . $err . '</h5>';
                }
                ?></div>
            <div class="grid_4">
                <br>
                <img id="blah" src="<?php echo base_url(); ?>public/images/400.jpg" alt="your image" />
            </div>
            <script>
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
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
            <button name="save" class="btn btn-large btn-danger">FINISH EDITING</button>       
</form>            
            <script>
                $('.textarea').wysihtml5();
            </script>
        
    </div>
</div>
                
    </div>