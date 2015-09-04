<div class="content"><div class="ic"></div>
    <h2>Edit Article</h2>
    <div class="container_12">                  
        <form id="form" method="post" action="<?php echo base_url(); ?>admin/edit/<?php
                    $c = $this->session->flashdata('idart');

                    echo $c;
                    ?>">
            <div class="hero-unit" style="margin-top:5%">

                <div class="hero-unit">

                    <?php
                    $a = $this->session->flashdata('categoryedit');

                    echo $a;
                    ?>
                </div>
                <br>
                <input type="text" name="categorys" class="form-control" id="exampleInputEmail1" placeholder="Input New Category">

                <textarea name = "teks"class="textarea form-control"  placeholder="Enter text ..." style="width: 950px; height: 200px" ><?php
                    $b = $this->session->flashdata('contentedit');

                    echo $b;
                    ?></textarea>
            </div>
            <br>
            <button name="save" class="btn btn-large btn-danger">FINISH EDITING</button>       
            <script>
                $('.textarea').wysihtml5();
            </script>
        </form>
    </div>
</div>