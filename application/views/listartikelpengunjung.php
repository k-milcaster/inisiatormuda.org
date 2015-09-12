<div class="content"><div class="ic"></div>
    <div class="container_12">
    

        <?php
        $setuser = '';
        $count = 0;
        $flag = 1;
        $index=1;
        foreach ($article->result() as $row) {
            $setuser = $row->user_id_user;
            $articleid = $row->id_article;
            $queryusername = $this->articleModel->getusername($setuser);
               $querygambar = $this->articleModel->ambilgambar($articleid);
            foreach ($queryusername->result_array() as $rows) {
                $setuser = $rows['username'];
            }
            
            
                 foreach ($querygambar->result_array() as $ro) {
                     if($index==1){
                         $setimage1=$ro['img'];
        
                     }
                     else if($index==2){
                         $setimage2=$ro['img'];
        
                         
                     }
                     else{
                         $setimage3=$ro['img'];
                     }
                     $index++;
                 }
            
            
            
            
            
            
            
            
            
            
            $count++;
            if ($flag == $page) {
                echo '<div class="grid_12">
            <h3 class="pb1"><span>' . $row->title . '</span></h3>
            <img src="' . base_url() . 'public/images/articles/onesmall/'.$setimage1.'.jpg" alt="" class="img_inner fleft">
            <div class="extra_wrapper">
                <p>By : ' . $setuser . '<br>' . '<span>  Date : ' . substr($row->postdate, 0, 10) . '</span>' . substr($row->content, 0, 250) . '...<a href="' . base_url() . 'Blog/isiartikel/' . $row->id_article . '/'.$setimage1.'/'.$setimage2.'/'.$setimage3.'" class="btn" style="margin-left: 110px">MORE</a></p>
            </div>      
            
        </div>';
            }

            if ($count == 4) {
                
                $flag++;
                $count = 0;
            }
        }
        ?>

    </div>

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

