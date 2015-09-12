<div class="content"><div class="ic"></div>
    <div class="component">
        <h2>Partners Organizer</h2>


        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <form action ="<?php echo base_url(); ?>">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($partners->result() as $row) {
                        echo '<tr><td class="user-name">' . $row->id_partner . '</td><td class="user-name">' . $row->name . '</td><td class="user-name">' . $row->desc . '</td><td class="user-name"><a href="' . base_url() . 'admin/updatePartner/' . $row->id_partner . '"><div class="btn-red">Update </td><td class="user-name"><a href="' . base_url() . 'admin/deletePartner/' . $row->id_partner . '"><div class="btn-red">Delete</div></a></td></tr>';
                    }
                    ?>             
                </tbody>
            </table>
        </form>        
        <div class="grid_6 prefix_1">
            <a href="<?php echo base_url() ?>admin/addpartner"><div class="btn-red">Add new Partner...</div></a>
        </div>
    </div>
</div>