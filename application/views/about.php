<div class="content"><div class="ic"></div>
    <div class="container_12">
        <div class="grid_6">
            <h3><span>Greetings From Executive Director</span></h3>
            <p class="col3">Inisiator Muda terdiri atas anak muda seperti kamu yang peduli pada Indonesia untuk menjadi lebih baik. Kami mendorong adanya perubahan hukum di Indonesia ke arah yang mana hukum tidak hanya menjamin melainkan juga melindungi hak konstitusional yang tertuang di UUD NRI 1945.
            </p>
            Kegiatan Inisiator Muda mencakup penelitian terhadap kondisi hukum, ekonomi, politik, budaya, dan sosial di Indonesia; pendidikan dan penyuluhan hukum kepada masyarakat; dan yang menjadi ujung tombak kami adalah memanfaatkan jalur hukum yang ada untuk melakukan dekonstruksi terhadap hukum di Indonesia, misalnya melalui pengujian konstitusionalitas suatu undang-undang di Mahkamah Konstitusi. <br>
            <a href="<?php echo base_url(); ?>about/greetings" class="btn">READ MORE</a>         
            <h3 class="head2"><span><a href="<?php echo base_url(); ?>about/initiator">Initiators</a></span></h3>

            <div class="team">
                <?php
                $isthree = 0;
                $max = 6;
                foreach ($init->result() as $row) {
                    $isthree++;
                    echo '<div class="grid_2">
                    <img src="' . base_url() . 'public/images/aboutus/' . $row->img . '" alt="">
                    <div class="col3">' . $row->name . '</div>
                    </div>';
                    
                    if ($isthree % 3 == 0) {
                        echo '<div class="clear"></div>';
                    }
                    if ($isthree == $max) {
                        break;
                    }
                }
                ?>
                <div class="clearfix"></div>
                <a href="<?php echo base_url(); ?>about/initiator" class="btn">SHOW MORE</a>        
            </div>
        </div>
        <div class="grid_5 prefix_1">
            <h3 class="head1 h1">Board of Advisors</h3>
            <div class="team">
                <div class="grid_2">
                    <img src="<?php echo base_url(); ?>public/images/aboutus/advisordamian.jpg" alt="">
                    <div class="col3"><a href="<?php echo base_url(); ?>about/advisor">Damian</a></div>          
                </div>
                <div class="grid_2">
                    <img src="<?php echo base_url(); ?>public/images/aboutus/advisorrangga.jpg" alt="">
                    <div class="col3"><a href="<?php echo base_url(); ?>about/advisor">Rangga</a></div>
                </div>
            </div>
            <!--            <ul class="list1 col3">
                            <li><a href="#">Bertoce quis fermentuempus coetum reto</a></li>
                            <li><a href="#">Lorem ipsum dolor sit amet, consectetur</a></li>
                            <li><a href="#">In mollis erat mattis neque facilisis sit ame </a></li>
                            <li><a href="#">Cras facilisis, nulla vel viverra auctorle </a></li>
                            <li><a href="#">Proin pharetra luctus diam, a scelerisqu </a></li>
                            <li><a href="#">Aliquam nibh anterno mertilo neiner</a></li>
                            <li><a href="#">Etiam dui eros, laoreet sit amet aniloto me</a></li>
                        </ul>-->
            <h3 class="head1">Board of Directors</h3>
            <div class="team">
                <div class="grid_2">
                    <img src="<?php echo base_url(); ?>public/images/aboutus/direxcecutiveanbar.jpg" alt="">
                    <div class="col3">Anbar</div>Executive Director
                </div>
                <div class="grid_2">
                    <img src="<?php echo base_url(); ?>public/images/aboutus/dirresearchliza.jpg" alt="">
                    <div class="col3">Liza</div>Research
                </div>
                <div class="grid_2">
                    <img src="<?php echo base_url(); ?>public/images/aboutus/dirlegalhuda.jpg" alt="">
                    <div class="col3">Huda</div>Legal Director
                </div>
                <div class="grid_2">
                    <img src="<?php echo base_url(); ?>public/images/aboutus/dircomogi.jpg" alt="">
                    <div class="col3">Ogi</div>Communication Director
                </div>
                <div class="grid_2">
                    <img src="<?php echo base_url(); ?>public/images/aboutus/dirtreluthfi.jpg" alt="">
                    <div class="col3">Luthfi</div>Treasurer
                </div>
            </div>

        </div>
    </div>
</div>
