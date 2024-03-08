<!-- master -->
<li class="nav-item menu-open">
    <ul class="nav nav-treeview">

       

        <li class="nav-item">

            <!-- Perbanyak bagian ini -->

            <a href='<?php url('data-buku') ?>' class='nav-link <?= activeClass('buku-buku') ?>'>
                <i class="fas fa-book nav-icon"></i>
                <p>Cari Buku</p>
            </a>
            <a href='<?php url('peminjaman') ?>' class='nav-link <?= activeClass('peminjaman') ?>'>
                <i class="fa fa-upload nav-icon"></i>
                <p>Data Peminjaman</p>
            </a>
            <a href='<?php url('pengembalian') ?>' class='nav-link <?= activeClass('pengembalian') ?>'>
                <i class="fa fa-download nav-icon"></i>
                <p>Data Pengembalian</p>
            </a>
            <a href='<?php url('data-profil') ?>' class='nav-link <?= activeClass('data-profil') ?>'>
                <i class="fa fa-user nav-icon"></i>
                <p>Profil</p>
            </a>




        </li>
    </ul>
</li>