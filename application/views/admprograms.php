<div class="content"><div class="ic"></div>
    <div class="component">
        <h2>Programs Organizer</h2>


        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <form action ="<?php echo base_url(); ?>">
            <table>
                <thead>
                    <tr>
                        <th>Programs ID</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Location</th>
                        <th>Posted Date</th>
                        <th>Action</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($users->result() as $row) {

                        echo '<tr><td class="user-name">' . $row->id_programs . '</td><td class="user-name">' . $row->name_programs . '</td><td class="user-name"> ' . $row->date_programs . '</td><td class="user-name">' . $row->location_programs . '</td><td class="user-name">' . $row->posteddate_programs . '</td><td class="user-name"><a href="' . base_url() . 'admin/deleteUser/' . $row->id_programs . '"><div class="btn-red">Update </td><td class="user-name"><a href="' . base_url() . 'admin/deleteUser/' . $row->id_programs . '"><div class="btn-red">Delete</div></a></td></tr>';
                    }
                    ?>             
                </tbody>
            </table>
        </form>        
        <div class="grid_6 prefix_1">
            <a href="<?php echo base_url() ?>admin/addprograms"><div class="btn-red">Add new Programs...</div></a>
        </div>
    </div>
</div>