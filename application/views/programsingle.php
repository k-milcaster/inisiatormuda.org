<div class="content"><div class="ic"></div>
    <div class="container_12">
        <div class="grid_12">            
            <?php
            foreach ($prog->result() as $row) {
                echo "<h3><span>" . $row->name_programs . "</span></h3></div>";
                echo '<p align="center"><img id="blah" src="' . base_url() . 'public/images/programs/' . $row->img_programs . '" alt="your image"/></p>';
                echo "<p><b>Date : </b>" . $row->date_programs . "</p>";
                echo "<p><b>Location : </b>" . $row->location_programs . "</p>";
                echo "<p><b>Description : </b><br>"
                . "" . $row->description_programs . "</p>";
            }
            ?>
            <div class="clear"></div>                                         
        </div>
    </div>