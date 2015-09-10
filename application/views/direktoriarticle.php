<body  class="">
    <div class="content"><div class="ic"></div>
        <div class="container_12">





            <h2>ARTICLE ORGANIZER</h2>
            <br>
            <div class="grid_2">
                <a href="<?php base_url() ?>articles "><div class="btn-red">Write New...</div></a>
            </div>                
            <h5><p align="right">Recomended Di batasi untuk 4 artikel saja</p></h5>
            <br>
            <div class="clear"></div>
            <?php
            if (isset($errs)) {
                echo '<h5>' . $err . '</h5>';
            }
            ?>
            <table>
                <thead>
                    <tr><th>NO</th>
                        <th>DATE</th>
                        <th>TITLE</th>
                        <th>ARTICLE</th>
                        <th>UPDATE ART</th>
                        <th>DELETE ART</th>
                        <th>PUBLISH</th>
                        <th>RECOMMEND</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    $table = $this->session->flashdata('tableart');

                    echo $table;
                    ?>







                </tbody>

            </table>






















        </div>
    </div>
