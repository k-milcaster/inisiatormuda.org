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
            <div class="grid_12"><a href="#"><img src="<?php echo base_url(); ?>public/images/articles/onesmall/<?php
                $z = $this->session->flashdata('param2');

                echo $z;
                ?>.jpg" alt=""></a></div>
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
        <div class="grid_6"><a href="#"><img src="<?php echo base_url(); ?>public/images/articles/two/<?php
                $y = $this->session->flashdata('param3');

                echo $y;
                ?>.jpg" alt=""></a></div>
            <div class="grid_6"><a href="#"><img src="<?php echo base_url(); ?>public/images/articles/three/<?php
                $w = $this->session->flashdata('param4');

                echo $w;
                ?>.jpg" alt=""></a></div>
        <a href="<?php echo base_url(); ?>Blog" class="btn">BACK</a>
        

        </div>
       
            
        
    </div>
