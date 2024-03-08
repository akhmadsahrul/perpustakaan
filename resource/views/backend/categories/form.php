<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Judul
        </h3>
    </div><!-- /.card-header -->
    <div class="card-body">
        <div class="tab-content p-0">
            <form action="<?php controller("CategoriesController@TambahData") ?>" method="POST">
        
                <div class="form-group">
                    <label for="">nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control">
                </div>

				 <?php tombolForm() ?>

            </form>
        </div>
    </div><!-- /.card-body -->
</div>