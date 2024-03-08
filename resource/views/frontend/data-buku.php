<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Data Buku
        </h3>
    </div><!-- /.card-header -->
    <div class="card-body">
        <div class="tab-content p-0">
            <table class="table table-striped data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Kode Buku</th>
                        <th>Judul</th>
                        <th>Stok</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                <?php 
                
                    $join = query()->table('buku')
                                   ->select('buku.*,categories.*, buku.id AS buku_id')
                                   ->join('categories','buku.kategori_id = categories.id')
                                   ->get();

                ?>

                    <?php foreach( $join AS $item ){ ?>

                        <tr>
                            <td> <?= $no++ ?> </td>
                            <td> <?= $item["nama"] ?> </td>
                            <td> <?= $item["kode_buku"] ?> </td>
                            <td> <?= $item["judul"] ?> </td>

                            <td> <?= $item["stok"] ?> </td>
                            <td> <img src="<?= asset('uploads/'.$item["foto"]) ?>" style="width: 100px;" alt=""> </td>
                            <td>
                                <!-- Tombol Hapus -->
                                <a href="<?php controller("BukuController@bukudetail", $item["buku_id"]) ?>"
                                        class="btn btn-primary btn-sm shadow"><i class="fa fa-eye"></i>
                                    </a>
                                <a href="peminjaman-buku"
                                        class="btn btn-success btn-sm shadow"><i class="fa fa-plus"></i>
                                    </a>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div><!-- /.card-body -->
</div>