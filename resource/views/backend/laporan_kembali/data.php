<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Laporan Pengembalian
        </h3>
        <!-- cdn bootstrap4 -->


    </div><!-- /.card-header -->
    <div class="card-body">
        <div class="tab-content p-0">
            <form action="<?php controller('LaporanController@laporan_pengembalian') ?>" method="POST"
                enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-4">
                        <td>
                            <label for="">Tanggal awal</label>
                            <input type="date" value="<?= date('d-m-Y') ?>" name="tanggal_awal" class="form-control">
                        </td>
                        <td>
                            <label for="">Tanggal akhir</label>
                            <input type="date" value="<?= date('d-m-Y')?>" name="tanggal_akhir" class="form-control">
                        </td>
                    </div>


                </div>

                <br>


                <a href="cetak2" class="btn btn-primary"><i class="fa fa-print"></i></a>

                <button type="submit" class="btn btn-success"><i class="fa fa-search"></i> Cari</button>

                <br><br>


                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Tgl</th>
                            <th>kode buku</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Judul Buku</th>
                            <th>Qty</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($buku_laporan as $key => $value) { ?>
                        <tr>

                            <td><?= $key+1 ?></td>
                            <td><?= $value->tanggal_pinjam ?></td>
                            <td><?= $value->kode_buku ?></td>
                            <td><?= $value->NISN ?></td>
                            <td><?= $value->username ?></td>
                            <td><?= $value->kelas ?></td>
                            <td><?= $value->judul ?></td>
                            <td><?= $value->qty ?></td>
                           
                        </tr>

                        <?php } ?>
                    </tbody>
                </table>

            </form>
        </div>
        <!-- wajib jquery  -->

    </div><!-- /.card-body -->
</div>