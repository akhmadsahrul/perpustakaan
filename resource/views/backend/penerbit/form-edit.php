<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Form Edit Penrbit
        </h3>
    </div><!-- /.card-header -->
    <div class="card-body">
        <div class="tab-content p-0">
            <form action="<?php controller("PenerbitController@UpdateData", $data->id) ?>" method="POST" enctype="multipart/form-data">
        
                <div class="form-group">
                    <label for="">Nama penerbit</label>
                    <input type="text" name="penerbit" class="form-control" value="<?= $data->penerbit ?>">
                </div>

                <?php tombolForm() ?>
                <!-- Agar fungsi tombol kembali berfungsi dengan baik, pastikan anda punya file dengan nama data.php -->

            </form>
        </div>
    </div><!-- /.card-body -->
</div>