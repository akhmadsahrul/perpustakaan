<div class="card">
    <div class="card-header">
        <h3 class="card-title name-file">
            Data pengadaanbuku
        </h3>
        <a href="<?php url("backend/pengadaanbuku/form") ?>" class="btn btn-sm btn-primary shadow float-right">
            <i class="fa fa-plus"></i>
        </a>
    </div><!-- /.card-header -->
    <div class="card-body">
        <div class="tab-content p-0">
            <form action="<?php controller("PengadaanbukuController@HapusData") ?>" method="POST">
                <table class="table table-striped data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Judul</th>
                            <th>Jumlah</th>
                            <th>Keterangan</th>
                            <th><input type="checkbox" class="ml-2" id="check-all" style="width: 18px;height: 18px;">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach (query()->table("pengadaanbuku")->select('*, pengadaanbuku.id AS pengadaanbuku_id,pengadaanbuku.id AS pengadaanbuku_id')->join('buku', 'pengadaanbuku.judul = buku.id')->get() as $item) { ?>

                        <tr>
                            <td> <?= $no++ ?> </td>
                            <td> <?= date("d-m-Y", strtotime($item["tanggal"])) ?> </td>
                            <td> <?= $item["judul"] ?> </td>
                            <td> <?= $item["jumlah"] ?> </td>
                            <td>
                                <?php 
                                    if ($item['keterangan'] == "") {
                                        echo "(Tidak di Isi)";
                                    }else{
                                        echo $item['keterangan'];
                                    }
                                    ?>
                            </td>

                            <td>
                                <div class="d-flex justify-content-center px-2">

                                    <!-- Tombol Hapus -->
                                    <input type="checkbox" class="mr-3 mt-1 check-item"
                                        value="<?php echo $item["pengadaanbuku_id"] ?>" name="id_delete[]"
                                        style="width: 23px;height: 23px;">

                                    <!-- Tombol Edit -->
                                    <a href="<?php controller("PengadaanbukuController@EditData", $item["pengadaanbuku_id"]) ?>"
                                        class="btn btn-primary btn-sm shadow">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <?php } ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="5"></th>
                            <th>
                                <?= buttonDelete("pengadaanbuku"); ?>
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </form>
        </div>
    </div><!-- /.card-body -->
</div>