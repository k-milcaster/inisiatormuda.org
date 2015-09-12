<div class="content"><div class="ic"></div>
    <div class="container_12">
        <div class="grid_12">    
            <?php
            foreach ($partners->result() as $row) {
                echo "<h3><span>" . $row->name . "</span></h3></div>";
                echo '<p align="center"><img id="blah" src="' . base_url() . 'public/images/partners/' . $row->img . '" alt="your image"/></p>';
                echo "<p><b>Description : </b><br>"
                . "" . $row->desc . "</p>";
            }
            ?>
            <div class="clear"></div>                                         
        </div>
    </div>