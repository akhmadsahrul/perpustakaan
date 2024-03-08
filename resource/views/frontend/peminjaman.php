<div class="card">
    <div class="card-header">
        <h3 class="card-title name-file">
            Data Peminjam
        </h3>
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
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                            $dataUser = query()->table('users')->where('id', auth()->id())->single();   
                            
                                
                        ?>

                        <?php foreach( query()->table("peminjaman")->where('status', 'Pinjam')->andWhere('NISN', $dataUser->NISN)->get() AS $item ){ 
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

                                    <!-- Tombol Detail -->
                                    <a href="<?php controller("PeminjamanController@detailpeminjaman_user", $item["id"]) ?>"
                                        class="btn btn-primary btn-sm shadow"><i class="fa fa-eye"></i>
                                    </a>


                                </div>
                            </td>
                        </tr>

                        <?php } ?>
                        

                    </tbody>
                </table>
            </form>
        </div>
    </div><!-- /.card-body -->
</div>