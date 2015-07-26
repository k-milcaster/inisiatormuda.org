<div class="content"><div class="ic"></div>
    <div class="component">
        <h2>Users Organizer</h2>


        <div class="clearfix"></div>
        <div class="clearfix"></div>

        <table>
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>Registered</th>
                    <th>Last Login</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($users->result() as $row) {

                    echo '<tr><td class="user-name">' . $row->id_user . '</td><td class="user-name">' . $row->username . '</td><td class="user-name"> ' . $row->registered . '</td><td class="user-name">' . $row->lastlogin . '</td><td class="user-name">' . $row->role . '</td></tr>';
                }
                ?>             
            </tbody>
        </table>
        <div class="grid_6 prefix_1">
            <div class="btn-red">Add new User...</div>
        </div>
    </div>
</div>