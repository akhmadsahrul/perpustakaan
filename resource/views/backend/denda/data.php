<div class="card">
    <div class="card-header">
        <h3 class="card-title name-file">
            Denda
        </h3>
        <a href="<?php url("backend/Denda/form") ?>" class="btn btn-sm btn-primary shadow float-right">
            <i class="fa fa-plus"></i>
        </a>
    </div><!-- /.card-header -->
    <div class="card-body">
        <div class="tab-content p-0">
            <form action="<?php controller("DendaController@HapusData") ?>" method="POST">
                <table class="table table-striped data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Tanggal tetap</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach( query()->table("denda")->get() AS $item ){ ?>

                        <tr>
                            <td> <?= $no++ ?> </td>
                            <td> <?= $item["harga"] ?> </td>
                            <td> <?= $item["status"] ?> </td>
                            <td> <?= $item["tanggal_tetap"] ?> </td>

                            <td>
                                <div class="d-flex px-2">

                                    <!-- Tombol Edit -->
                                    <a href="<?php controller("DendaController@EditData", $item["id"]) ?>"
                                        class="btn btn-primary btn-sm shadow">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <!-- tombol hapus -->
                                    <a href="<?php controller("DendaController@HapusData", $item["id"]) ?>"
                                        class="btn btn-danger btn-sm shadow">
                                        <i class="fa fa-trash"></i>
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