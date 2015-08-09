<div class="content"><div class="ic"></div>
    <h2>Web Maintenance</h2>
    <div class="container_12">
        <h3 class="head1">Whole Web</h3>
        <ul class="list">
            <li>

                <?php
                foreach ($data->result() as $row) {
                    if ($row->name === 'wholeweb' && $row->status === '0') {
                        echo '<div class="count"><a href="' . base_url() . 'admin/hide/wholeweb">On</a></div>';
                    } else if ($row->name === 'wholeweb' && $row->status === '1') {
                        echo '<div class="count"><a href="' . base_url() . 'admin/show/wholeweb">Off</a></div>';
                    }
                }
                ?>                
                <div class="extra_wrapper">
                    <div class="col3"><a href="#">Menutup keseluruhan web </a></div>Sehingga web hanya akan menampilkan halaman 'under maintenance', tidak termasuk halaman administrasi.
                </div>
            </li>
        </ul>

        <h3 class="head1">Blog Page</h3>
        <ul class="list">
            <li>
                <?php
                foreach ($data->result() as $row) {
                    if ($row->name === 'blogs' && $row->status === '0') {
                        echo '<div class="count"><a href="' . base_url() . 'admin/hide/blogs">On</a></div>';
                    } else if ($row->name === 'blogs' && $row->status === '1') {
                        echo '<div class="count"><a href="' . base_url() . 'admin/show/blogs">Off</a></div>';
                    }
                }
                ?>  
                <div class="extra_wrapper">
                    <div class="col3"><a href="#">Menutup halaman blog </a></div>Sehingga meneruskan alamat halaman blog ke halaman 'under maintenance'.
                </div>
            </li>
        </ul>

        <h3 class="head1">Program Page</h3>
        <ul class="list">
            <li>
                <?php
                foreach ($data->result() as $row) {
                    if ($row->name === 'programs' && $row->status === '0') {
                        echo '<div class="count"><a href="' . base_url() . 'admin/hide/programs">On</a></div>';
                    } else if ($row->name === 'programs' && $row->status === '1') {
                        echo '<div class="count"><a href="' . base_url() . 'admin/show/programs">Off</a></div>';
                    }
                }
                ?>  
                <div class="extra_wrapper">
                    <div class="col3"><a href="#">Menutup halaman program </a></div>Sehingga meneruskan alamat halaman program ke halaman 'under maintenance'.
                </div>
            </li>
        </ul>

        <h3 class="head1">Career Page</h3>
        <ul class="list">
            <li>
                <?php
                foreach ($data->result() as $row) {
                    if ($row->name === 'carees' && $row->status === '0') {
                        echo '<div class="count"><a href="' . base_url() . 'admin/hide/carees">On</a></div>';
                    } else if ($row->name === 'carees' && $row->status === '1') {
                        echo '<div class="count"><a href="' . base_url() . 'admin/show/carees">Off</a></div>';
                    }
                }
                ?>  
                <div class="extra_wrapper">
                    <div class="col3"><a href="#">Menutup halaman career </a></div>Sehingga meneruskan alamat halaman career ke halaman 'under maintenance'.
                </div>
            </li>
        </ul>

        <h3 class="head1">About Page</h3>
        <ul class="list">
            <li>
                <?php
                foreach ($data->result() as $row) {
                    if ($row->name === 'aboutus' && $row->status === '0') {
                        echo '<div class="count"><a href="' . base_url() . 'admin/hide/aboutus">On</a></div>';
                    } else if ($row->name === 'aboutus' && $row->status === '1') {
                        echo '<div class="count"><a href="' . base_url() . 'admin/show/aboutus">Off</a></div>';
                    }
                }
                ?>  
                <div class="extra_wrapper">
                    <div class="col3"><a href="#">Menutup halaman about us </a></div>Sehingga meneruskan alamat halaman about us ke halaman 'under maintenance'.
                </div>
            </li>
        </ul>       
    </div>
</div>