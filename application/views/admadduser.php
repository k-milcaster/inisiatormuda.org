<div class="content"><div class="ic"></div>
    <div class="container_12">
        <div class="grid_12">
            <h3><span>Add New User</span></h3></div>
        <div class="grid_6 prefix_1">
            <form id="form" method="post" action="<?php echo base_url(); ?>admin/doAddUser">               
                <fieldset>
                    <label class="name">
                        <input type="text" name="username" placeholder="Username:" class="field">
                        <br class="error">
                        <span class="empty error-empty">*This field is required.</span> </label>
                    <label class="password">
                        <input type="password" name="password" placeholder="Password:" class="field">
                        <br class="clear">
                        <span class="empty error-empty">*This field is required.</span> </label>
                    <label class="password">
                        <input type="password" name="repassword" placeholder="Retype Password:" class="field">
                        <br class="clear">
                        <span class="empty error-empty">*This field is required.</span> </label>
                    <br class="clear">
                    <select name="role" style="width: 220px; 
                            height: 29px;
                            font: 14px/20px  Arial, Helvetica, sans-serif;
                            border: 1px solid #d4d4d4;
                            padding: 4px 12px 5px;
                            background-color: #fff;
                            color: #8C8C8C;">
                        <option selected value="select">--select--</option>
                        <option value="administrator">Administrator</option>
                        <option value="writer">Writer</option>
                    </select>
                    <div class="clear"></div>
                    <?php
                    if (isset($err)) {
                        echo '<h5>' . $err . '</h5>';
                    }
                    ?>
                    <div class="btns">
                        <input type="submit" name="submit" value="Add" class="btn-red-gundek">
                        <div class="clear"></div>
                    </div></fieldset></form>
            <!--                    Marketing Department: <br>
                                E-mail: <span class="col1"><a href="#">marketing@inisiatormuda.org</a></span> <br>
                                Phone: 1-518-312-4162-->
        </div>
        <div class="grid_6">
            <ul class="list1 l2">
                <li>Username minimal 5 karakter, maksimal 12 karakter.</li>
                <li>Password minimal 8 karakter dan harus sama dengan retype password</li>                
                <li>Role Administrator artinya mempunyai kewenangan penuh terhadap web ini, writer artinya hanya bisa mengelola konten</li>
                <li></li>
            </ul>
        </div>
    </div>
</div>