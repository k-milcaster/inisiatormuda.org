<div class="content"><div class="ic"></div>
    <h2>Web Maintenance</h2>
    <div class="container_12">



        <h3 class="head1">Whole Web</h3>
        <ul class="list">
            <li>
                <?php
                if ($whole === '0') {
                    echo '<div class="count"><a href="' . base_url() . 'admin/hideWhole">On</a></div>';
                } else {
                    echo '<div class="count"><a href="' . base_url() . 'admin/showWhole">Off</a></div>';
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
                <div class="count"><a href="#">On</a></div>
                <div class="extra_wrapper">
                    <div class="col3"><a href="#">Menutup halaman blog </a></div>Sehingga meneruskan alamat halaman blog ke halaman 'under maintenance'.
                </div>
            </li>
        </ul>

        <h3 class="head1">Program Page</h3>
        <ul class="list">
            <li>
                <div class="count"><a href="#">On</a></div>
                <div class="extra_wrapper">
                    <div class="col3"><a href="#">Menutup halaman program </a></div>Sehingga meneruskan alamat halaman program ke halaman 'under maintenance'.
                </div>
            </li>
        </ul>

        <h3 class="head1">Career Page</h3>
        <ul class="list">
            <li>
                <div class="count"><a href="#">On</a></div>
                <div class="extra_wrapper">
                    <div class="col3"><a href="#">Menutup halaman career </a></div>Sehingga meneruskan alamat halaman career ke halaman 'under maintenance'.
                </div>
            </li>
        </ul>

        <h3 class="head1">About Page</h3>
        <ul class="list">
            <li>
                <div class="count"><a href="#">On</a></div>
                <div class="extra_wrapper">
                    <div class="col3"><a href="#">Menutup halaman about us </a></div>Sehingga meneruskan alamat halaman about us ke halaman 'under maintenance'.
                </div>
            </li>
        </ul>       
    </div>
</div>