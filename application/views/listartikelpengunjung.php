<div class="content"><div class="ic"></div>
    <div class="container_12">
    

        <?php
        $setuser = '';
        $count = 0;
        $flag = 1;
        foreach ($article->result() as $row) {
            $setuser = $row->user_id_user;
            $queryusername = $this->articleModel->getusername($setuser);
            foreach ($queryusername->result_array() as $rows) {
                $setuser = $rows['username'];
            }
            $count++;
            if ($flag == $page) {
                echo '<div class="grid_12">
            <h3 class="pb1"><span>' . $row->title . '</span></h3>
            <img src="' . base_url() . 'public/images/page4_img1.jpg" alt="" class="img_inner fleft">
            <div class="extra_wrapper">
                <p>By : ' . $setuser . '<br>' . '<span>  Date : ' . substr($row->postdate, 0, 10) . '</span>' . substr($row->content, 0, 250) . '...<a href="' . base_url() . 'Blog/isiartikel/' . $row->id_article . '" class="btn" style="margin-left: 110px">MORE</a></p>
                  
            </div>
            
        </div>';
            }

            if ($count == 5) {
                
                $flag++;
                $count = 0;
            }
        }
        ?>

<section>
            <?php
            if ($pagecount == 1) {
                
            } else if ($pagecount <= 5 && $pagecount > 1) {
                echo '<nav role="navigation"> '
                . '<ul class="cd-pagination no-space">'
                . '<li class="button"><a href="' . base_url() . 'Blog/page/' . ($page - 1) . '">Prev</a></li>';
                for ($k = 1; $k <= $pagecount; $k++) {
                    if ($k == $page) {
                        echo '<li><a class="current" href="' . base_url() . 'Blog/page/' . $k . '">' . $k . '</a></li>';
                    } else {
                        echo '<li><a href="' . base_url() . 'Blog/page/' . $k . '">' . $k . '</a></li>';
                    }
                }
                echo '<li class="button"><a href="' . base_url() . 'Blog/page/' . ($page + 1) . '">Next</a></li>
                </ul>
            </nav>';
            }
            ?>
        </section>    
    </div>
</div>

