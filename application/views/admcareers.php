<div class="content"><div class="ic"></div>
    <div class="container_12">

        <div class="clear"></div>

        <div class="grid_12">
            <h3><span><?php
                    $b = $this->session->flashdata('setcareer');

                    echo $b;
                    ?></span></h3>
        </div>
        <div class="clear"></div>
        <div class="grid_12" >
            <span><?php
                    $c = $this->session->flashdata('settanggalcareer');

                    echo $c;
                    ?></span>
            <p class="col3"><div>

                <br><?php
                    $c = $this->session->flashdata('setcontent');

                    echo $c;
                    ?><br><br>

            </div></p>

        </div>
        <a href="<?php echo base_url(); ?>Admin/isihalamancareer" class="btn">EDIT CAREER</a>
        

        </div>
       
            
        
    </div>
