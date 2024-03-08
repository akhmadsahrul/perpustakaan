<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Judul
        </h3>
    </div><!-- /.card-header -->
    <div class="card-body">
        <div class="tab-content p-0">
            <form action="<?php controller("DendaController@UpdateData", $data->id) ?>" method="POST" enctype="multipart/form-data">
        
                <div class="form-group">
                    <label for="">Harga</label>
                    <input type="text" name="harga" class="form-control" value="<?= $data->harga ?>">
                </div>
                <div class="form-group">
                    <label for="">status</label>
                    <select name="status" id="" class="form-control">
                        <option value="Aktif">Aktif</option>
                        <option value="Tidak aktif">Tidak aktif</option>
                    </select>
                </div>
                    <input type="hidden" name="tanggal_tetap" class="form-control" value="<?= $data->tanggal_tetap ?>">
              

                <?php tombolForm() ?>
                <!-- Agar fungsi tombol kembali berfungsi dengan baik, pastikan anda punya file dengan nama data.php -->

            </form>
        </div>
    </div><!-- /.card-body -->
</div>