<div class="content"><div class="ic"></div>
    <div class="container_12">  
        <div class="grid_12">
            <h2>Initiators</h2>                

            <div class="clearfix"></div>
            <div class="clearfix"></div>
            <form action ="<?php echo base_url(); ?>">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Bio</th>
                            <th>Action</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($init->result() as $row) {

                            echo '<tr><td class="user-name">' . $row->id_staff . '</td><td class="user-name">' . $row->name . '</td><td class="user-name"> ' . $row->bio . '</td><td class="user-name"><a href="' . base_url() . 'admin/updateInitiator/' . $row->id_staff . '"><div class="btn-red">Update </td><td class="user-name"><a href="' . base_url() . 'admin/doDeleteInitiator/' . $row->id_staff . '"><div class="btn-red">Delete</div></a></td></tr>';
                        }
                        ?>             
                    </tbody>
                </table>
            </form>        
            <div class="grid_2">
                <a href="<?php echo base_url() ?>admin/addInitiator"><div class="btn-red">Add new Staff...</div></a>
            </div>
        </div>        
    </div>
</div>