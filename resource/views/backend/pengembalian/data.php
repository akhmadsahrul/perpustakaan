<div class="card">
    <div class="card-header">
        <h3 class="card-title name-file">
            Data Pengembalian
        </h3>
    </div><!-- /.card-header -->
    <div class="card-body">
        <div class="tab-content p-0">
            <form action="<?php controller("PemianjamanController@HapusData") ?>" method="POST">
                <table class="table table-striped data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>Anggota</th>
                            <th>Tanggal pinjam</th>
                            <th>Tanggal kembali</th>
                            <th>Tanggal Balik</th>
                            <th>Status</th>
                      
                            <th>Aksi</th>
                    </thead>
                    <tbody>

                        

                        <?php foreach( query()->table("peminjaman")->where('status','dikembalikan')->get() AS $item ){ ?>

                        <tr>
                            <td> <?= $no++ ?> </td>
                            <td> <?= $item["NISN"] ?> </td>
                            <td> <?= $item["anggota"] ?> </td>
                            <td> <?= $item["tanggal_pinjam"] ?> </td>
                            <td> <?= $item["tanggal_kembali"] ?> </td>
                            <td> <?= $item["tanggal_balik"] ?> </td>
                            <td> <?= $item["status"] ?> </td>
                        

                            <td>

                                <a href="<?php controller("PeminjamanController@HapusDataKembali",$item['id'])?>"
                                    class="btn btn-danger btn-sm shadow"><i class="fa fa-trash"></i>
                                </a>
                                <a href="<?php controller('PeminjamanController@detail_pengembalian',$item['id']) ?>"
                                    class="btn btn-primary btn-sm shadow">
                                    <i class="fa fa-eye"></i>
                                </a>


                            </td>
                        </tr>

                        <?php } ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="8"></th>
                            <th>
                                <?= buttonDelete("pengembalian"); ?>
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </form>
        </div>
    </div><!-- /.card-body -->
</div>