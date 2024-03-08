<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Anggota
        </h3>
    </div><!-- /.card-header -->
    <div class="card-body">
        <div class="tab-content p-0">
            <form action="<?php controller("AnggotaController@TambahData") ?>" method="POST" enctype="multipart/form-data">
        
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>
				<div class="form-group">
                    <label for="">NISN</label>
                    <input type="number" name="NISN" class="form-control">
                </div>
				<div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control">
                </div>
				<div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
				<div class="form-group">
                    <label for="">No HP</label>
                    <input type="number" name="no_hp" class="form-control">
                </div>
				<div class="form-group">
                    <label for="">Status</label>
                    <input type="text" name="status" class="form-control">
                </div>

                <div class="form-group form-check-inline">
                    <label for="">Jenis Kelamin</label> <br>                   
                </div> <br>
                <div class="form-group form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="laki laki" checked>
                    <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                </div>
                <div class="form-group form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="perempuan">
                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>

                <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" name="foto" class="form-control">
                </div>
				
			

                <?php tombolForm() ?>

            </form>
        </div>
    </div><!-- /.card-body -->
</div>