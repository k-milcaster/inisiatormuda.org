<div class="content"><div class="ic"></div>
    <div class="container_12">

        <div class="grid_12">
            <h3><span>Career</span></h3>
        </div>

        <div class="grid_12">
            <p class="text1 col1"><a href="<?php base_url()?>isihalamancareer ">EDIT HALAMAN CAREER</a></p>
            
           
                <?php
                    $table = $this->session->flashdata('setcareer');

                    echo $table;
                    ?>
         </div>
    </div>
</div>