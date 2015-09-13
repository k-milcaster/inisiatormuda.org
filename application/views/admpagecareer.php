<div class="content"><div class="ic"></div>
    <h2>Write Career</h2>
    <div class="container_12">                  
        <form id="form" method="post" action="<?php echo base_url(); ?>admin/postingcareer">
            <div class="hero-unit" style="margin-top:5%">

                
                <br>
                <br>
                
                
                <textarea name = "teks"class="textarea form-control " id="comment"  placeholder="Enter text ..." style="width: 950px; height: 200px" ><?php
             
                $b = $this->session->flashdata('contentcar');

                    echo $b;
                    ?></textarea>
            </div>
             <div class="grid_6">
            
        </div>
            
   
            <button name="save" class="btn btn-large btn-danger">SAVE CAREER</button>
            <!--<button name="reset" class="btn btn-large btn-danger">RESET ALL</button>-->
            <button name="reset" class="btn btn-large btn-danger">RESET</button>
            
            <script>
                $('.textarea').wysihtml5();
            </script>
        </form>
    </div>
</div>