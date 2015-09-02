<div class="content"><div class="ic"></div>
    <div class="container_12">
        <div class="grid_12">

        </div>
        <section>
            <?php
            if ($pagecount == 1) {
                
            } else if ($pagecount <= 5 && $pagecount > 1) {
                echo '<nav role="navigation"> '
                . '<ul class="cd-pagination no-space">'
                . '<li class="button"><a href="' . base_url() . 'program/page/' . ($page - 1) . '">Prev</a></li>';
                for ($k = 1; $k <= $pagecount; $k++) {
                    if ($k == $page) {
                        echo '<li><a class="current" href="' . base_url() . 'program/page/' . $k . '">' . $k . '</a></li>';
                    } else {
                        echo '<li><a href="' . base_url() . 'program/page/' . $k . '">' . $k . '</a></li>';
                    }
                }
                echo '<li class="button"><a href="' . base_url() . 'program/page/' . ($page + 1) . '">Next</a></li>
                </ul>
            </nav>';
            }
            ?>
        </section>
        <div class="clear"></div>
        <div class="port">
            <?php
            $count = 0;
            $flag = 1;        
            foreach ($programs->result() as $row) {
                $count++;                                
                if ($flag == $page) {
                    echo '<div class="grid_4">
                        <a href="' . base_url() . 'program/id/' . $row->id_programs . '" class="gal"><img src="' . base_url() . 'public/images/programs/' . $row->img_programs . '" alt=""></a>
                        <div class="text1 col1">' . $row->name_programs . '</div>
                        ' . $row->location_programs . '<br>                        
                   </div>';
                }
                if ($count % 3 == 0) {
                    echo '<div class="clear"></div>';
                }
                if ($count == 6) {
                    echo '<div class="clear"></div>';
                    $flag++;                    
                    $count = 0;
                }                
            }
            ?>
            <div class="clear"></div>
        </div>
    </div>
</div>