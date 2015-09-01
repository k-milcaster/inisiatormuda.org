<body  class="">
        <div class="content"><div class="ic"></div>
    <div class="container_12">
        <div class="grid_6">
            <a href="<?php base_url()?>articles " class="btn">BUAT ARTIKEL</a>
            <?php
                                    $a = $this->session->flashdata('left');

                                    echo $a;
                                    ?>
            
            
        </div>
        <div class="grid_6" style="">
            <br>
            <br>
            <br>
            <br>
            <?php
                                    $b = $this->session->flashdata('right');

                                    echo $b;
                                    ?>
            
            
            
            
        </div>

    </div>
</div>
