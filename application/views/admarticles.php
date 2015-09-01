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

            <textarea name = "teks"class="textarea form-control"  placeholder="Enter text ..." style="width: 950px; height: 200px" ></textarea>
        </div>
        <br>
        <button name="save" class="btn btn-large btn-danger">SAVE ARTICLE</button>       
        <script>
            $('.textarea').wysihtml5();
        </script>
        </form>
    </div>
</div>