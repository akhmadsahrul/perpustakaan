<!-- master -->
<a href='<?php url('backend/dashboard/dashboard') ?>' class='nav-link active'>
    <i class="fa fa-align-justify"></i>
    <p>Dashboard</p>
</a><br>
<li class="nav-item menu-open">
    <a href="" class="nav-link active">
        <i class="nav-icon fas fa-cube"></i>
        <p>
            Master
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">

        <li class="nav-item">

            <!-- Perbanyak bagian ini -->

            <?php if (auth()->level() =="admin") {  ?>

            <a href='<?php url('backend/users/data') ?>' class='nav-link <?= activeClass('users') ?>'>
                <i class='far fa-user nav-icon'></i>
                <p>Data users</p>
            </a>
            <a href='<?php url('backend/buku/data') ?>' class='nav-link <?= activeClass('backend/buku') ?>'>
                <i class="fas fa-book nav-icon"></i>
                <p>Data Buku</p>
            </a>
            <a href='<?php url('backend/categories/data') ?>' class='nav-link <?= activeClass('categories') ?>'>
                <i class='far fa-file nav-icon'></i>
                <p>Kategori</p>
            </a>
            <a href='<?php url('backend/penerbit/data') ?>' class='nav-link <?= activeClass('penerbit') ?>'>
                <i class='far fa-file nav-icon'></i>
                <p>Penerbit</p>
            </a>
            <a href='<?php url('backend/pengadaanbuku/data') ?>'
                class='nav-link <?= activeClass('backend/pengadaanbuku') ?>'>
                <i class='fas fa-plus nav-icon'></i>
                <p>Pengadaan buku</p>
            </a>
            <a href='<?php url('backend/kelas/data') ?>' class='nav-link <?= activeClass('backend/kelas') ?>'>
                <i class='fas fa-plus nav-icon'></i>
                <p>kelas</p>
            </a>

            <?php }?>

        </li>
    </ul>
</li>
<!-- transaksi -->
<li class="nav-item menu-open">
    <a href="" class="nav-link active">
        <i class="nav-icon fas fa-cube"></i>
        <p>
            Transaksi
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">

        <li class="nav-item">

            <!-- Perbanyak bagian ini -->




            <a href='<?php url('backend/peminjaman/data') ?>' class='nav-link <?= activeClass('peminjaman') ?>'>
                <i class='fa fa-upload nav-icon'></i>
                <p>Data Peminjam</p>
            </a>
            <a href='<?php url('backend/pengembalian/data') ?>' class='nav-link <?= activeClass('pengembalian') ?>'>
                <i class='fa fa-download nav-icon'></i>
                <p>Data pengembalian</p>
            </a>



        </li>
    </ul>
</li>
<li class="nav-item menu-open">
    <a href="" class="nav-link active">
        <i class="nav-icon fas fa-cube"></i>
        <p>
                Laporan
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">

        <li class="nav-item">

        <a href='<?php url('backend/laporan_pinjam/data') ?>' class='nav-link <?= activeClass('backend/laporan_pinjam/data') ?>'>
            <i class='fa fa-file nav-icon'></i>
            <p>Laporan Peminjaman</p>
        </a>
        <a href='<?php url('backend/laporan_kembali/data') ?>' class='nav-link <?= activeClass('backend/laporan_kembali/data') ?>'>
                <i class='fa fa-file nav-icon'></i>
                <p>Data pengembalian</p>
            </a>

        </li>
    </ul>
</li>
<a href='<?php url('backend/denda/data') ?>' class='nav-link <?= activeClass('denda') ?>'>
    <i class='fa fa-money-bill-wave nav-icon'></i>
    <p>Denda</p>
</a>

