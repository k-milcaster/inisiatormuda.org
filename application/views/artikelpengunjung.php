<div class="content"><div class="ic"></div>
    <div class="container_12">
        
        <div class="clear"></div>
        
        <div class="grid_12">
            <h3><span><?php
                    $b = $this->session->flashdata('titlepengunjung');

                    echo $b;
                    ?></span></h3>
        </div>
        <div class="clear"></div>
        <div class="logos">
            <div class="grid_12"><a href="#"><img src="<?php echo base_url(); ?>public/images/page4_img3.jpg" alt=""></a></div>
            </div>
        <div class="grid_12" >
            <span><?php
                    $c = $this->session->flashdata('datepengunjung');

                    echo $c;
                    ?></span>
            <p class="col3"><div>
                
                <?php
                    $a = $this->session->flashdata('contentpengunjung');

                    echo $a;
                    ?>
                
                
            </div></p>
           
        </div>
         <br>
            <br>
            
            <a href="<?php echo base_url(); ?>Blog" class="btn">BACK</a>
    </div>
</div>