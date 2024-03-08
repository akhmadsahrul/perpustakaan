<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Laporan pengembalian
        </h3>
        <!-- cdn bootstrap4 -->


    </div><!-- /.card-header -->
    <div class="card-body">
        <div class="tab-content p-0">
            <form action="<?php controller('LaporanController@laporan') ?>" method="POST"
                enctype="multipart/form-data">
                
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

        <script>
            window.print()
        </script>

    </div><!-- /.card-body -->
</div>