<div class="content"><div class="ic"></div>
    <div class="container_12">
        <div class="grid_12">
            <h3 class="pb1"><span>Initiators</span></h3>
        </div>
            <?php
            $left = 0;
            foreach ($init->result() as $row) {
                $left++;
                if ($left % 2 == 1) {
                    echo '<div class="grid_6">
                          <img style="max-height:248px;max-width:276px;" src="' . base_url() . 'public/images/aboutus/' . $row->img . '" alt="" class="img_inner fleft hvr-grow">
                          <div class="extra_wrapper">
                                <h4>' . $row->name . '</h4>
                                <br>
                                <p>' . $row->bio . '</p>
                          </div>
                          </div>';
                } else {
                    echo '<div class="grid_6">
                          <img style="max-height:248px;max-width:276px;" src="' . base_url() . 'public/images/aboutus/' . $row->img . '" alt="" class="img_inner fleft hvr-grow">
                          <div class="extra_wrapper">
                                <h4>' . $row->name . '</h4>
                                <br>
                                <p>' . $row->bio . '</p>
                          </div>
                          </div>
                          <div class="clearfix"></div>
                          <br>';
                }
            }
            ?>
            <div class="clearfix"></div>
        </div>
    </div>
</div>