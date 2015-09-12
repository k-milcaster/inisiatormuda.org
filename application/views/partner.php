<div class="content"><div class="ic"></div>
    <div class="container_12">
        <div class="grid_12">
            <h3><span>Partners</span></h3>
        </div>
        <div class="clear"></div>
        <div class="port">
            <?php
            $count = 0;
            foreach ($partners->result() as $row) {
                $count++;

                echo '<div class="grid_4">
                        <a href="' . base_url() . 'partner/id/' . $row->id_partner . '" class="gal">'
                . '<img src="' . base_url() . 'public/images/partners/' . $row->img . '" alt=""></a>
                        <div class="text1 col1">' . $row->name . '</div>                                             
                   </div>';
                if ($count % 3 == 0) {
                    echo '<div class="clear"></div>';
                }
            }
            if ($count == 0) {
                echo '<h2>Konten belum tersedia</h2>';
            }
            ?>
            <div class="clear"></div>
        </div>
    </div>
</div>