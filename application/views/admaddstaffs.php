<div class="content"><div class="ic"></div>
    <div class="container_12">
        <div class="grid_12">
            <h3><span>Add New Initiator</span></h3></div>
        <div class="grid_6 prefix_1">            
            <form id="form" method="post" action="<?php echo base_URL(); ?>admin/doAddInitiator" enctype="multipart/form-data">               
                <fieldset>
                    <label class="name">
                        <input type="text" name="name" placeholder="Name :" class="field">
                        <br class="error">
                        <span class="empty error-empty">*This field is required.</span> </label>
                    <br class="clear">
                    <label class="name">
                        <textarea name="bio" placeholder="Bio :"></textarea>
                    </label>
                    <br class="clear">
                    <p>Upload picture :</p>
                    <label class="name">
                        <input type='file' onchange="readURL(this);" name="userfile" accept="image/jpeg, image/png"/>
                    </label>
                    <div class="clear"></div>
                    <?php
                    if (isset($err)) {
                        echo '<h5>' . $err . '</h5>';
                    }
                    ?>
                    <div class="btns">
                        <input type="submit" name="submit" value="Add" class="btn-red-gundek">
                        <div class="clear"></div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="grid_6">
            <br>
            <img id="blah" src="<?php echo base_url(); ?>public/images/square.jpg" alt="your image" />
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
    </div>
</div>