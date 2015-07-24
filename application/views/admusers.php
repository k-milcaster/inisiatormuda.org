<div class="content"><div class="ic"></div>
    <div class="component">
        <h2>Users Organizer</h2>
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
    </div>
</div>