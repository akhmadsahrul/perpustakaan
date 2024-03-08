<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Form Denda
        </h3>
    </div><!-- /.card-header -->
    <div class="card-body">
        <div class="tab-content p-0">
            <form action="<?php controller("DendaController@TambahData") ?>" method="POST" enctype="multipart/form-data">
        
                <div class="form-group">
                    <label for="">Harga</label>
                    <input type="number" name="harga" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="Aktif">Aktif</option>
                        <option value="Tidak aktif">Tidak aktif</option>
                    </select>
                </div>
                    <input type="hidden" name="tanggal_tetap" class="form-control" value="<?= date('y-m-d') ?>">
               

                <?php tombolForm() ?>
                <!-- Agar fungsi tombol kembali berfungsi dengan baik, pastikan anda punya file dengan nama data.php -->

            </form>
        </div>
    </div><!-- /.card-body -->
</div>