<div class="card">
    <div class="card-header">
        <h3 class="card-title name-file">
            Data Peminjam
        </h3>
        <a href="<?php url("backend/peminjaman/form") ?>" class="btn btn-sm btn-primary shadow float-right">
            <i class="fa fa-plus"></i>
        </a>
    </div><!-- /.card-header -->
    <div class="card-body">
        <div class="tab-content p-0">
            <form action="<?php controller("PeminjamanController@HapusData") ?>" method="POST">
                <table class="table table-striped data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>Anggota</th>
                            <th>Tanggal pinjam</th>
                            <th>Tanggal kembali</th>
                            <th>Status</th>
                            <th>Aksi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php foreach( query()->table("peminjaman")->where('status','Pinjam')->get() AS $item ){ 
                            
                            $detail = query()->table('peminjaman_detail')
                                             ->join('buku', 'peminjaman_detail.buku_id = buku.id')
                                             ->where('peminjaman_id', $item['id'])->single();

                        ?>

                        <tr>
                            <td> <?= $no++ ?> </td>
                            <td> <?= $item["NISN"] ?> </td>
                            <td> <?= $item["anggota"] ?> </td>
                            <td> <?= $item["tanggal_pinjam"] ?> </td>
                            <td> <?= $item["tanggal_kembali"] ?> </td>
                            <td> <?= $item["status"] ?> </td>


                            <td>
                                <div class="d-flex justify-content-center px-2">

                                    <!-- Tombol Hapus -->
                                    <a href="<?php controller("PeminjamanController@HapusData",$item['id'])?>"
                                        class="btn btn-danger btn-sm shadow"><i class="fa fa-trash"></i>
                                    </a>

                                    <!-- Tombol Detail -->
                                    <a href="<?php controller("PeminjamanController@detailpeminjaman", $item["id"]) ?>"
                                        class="btn btn-primary btn-sm shadow"><i class="fa fa-eye"></i>
                                    </a>
                                    <!-- Tombol kembalikan -->
                                    <a href="<?php controller("peminjamanController@pengembalian", $item["id"]) ?>"
                                        class="btn btn-success btn-sm shadow"><i class="fa fa-check"></i>Kembalikan
                                    </a>
                                </div>

                            </td>
                            <td>

                                <input type="checkbox" class="mr-3 mt-1 check-item"  style="width: 25px;height: 25px;">
                            </td>
                        </tr>

                        <?php } ?>

                    </tbody>
                </table>
            </form>
        </div>
    </div><!-- /.card-body -->
</div>