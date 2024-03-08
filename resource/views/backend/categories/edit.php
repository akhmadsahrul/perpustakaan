<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Kategori
        </h3>
    </div><!-- /.card-header -->
    <div class="card-body">
        <div class="tab-content p-0">
            <form action="<?php controller("CategoriesController@UpdateData", $categories->id)?>" method="POST">
        
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $categories->nama ?>">
                </div>
				<div class="form-group">
                    <label for="">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" value="<?php echo $categories->keterangan ?>">
                </div>

                <?php tombolForm() ?>

            </form>
        </div>
    </div><!-- /.card-body -->
</div>