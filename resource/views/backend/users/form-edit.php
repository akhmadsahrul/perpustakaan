<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Users
        </h3>
    </div><!-- /.card-header -->
    <div class="card-body">
        <div class="tab-content p-0">
            <form action="<?php controller("UsersController@UpdateData", $users->id)?>" method="POST" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control"  value="<?=  $users->username ?> " readonly>
                  
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" value="<?=  $users->email ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Level</label>
                    <select name="level" id="" class="form-control level">
                        <option  selected><?= $users->level ?></option>
                        <option value="admin">admin</option>
                        <option value="anggota">anggota</option>
                    </select>
                </div>

                <div class="form-group kelas">
                    <label for="">Kelas</label>
                    
                    <select name="kelas" id="input" class="form-control" required="required">
                        <option value="<?= $users->kelas?>" selected ><?= $users->kelas?></option>
                        
                        <?php foreach (query()->table('kelas')->get() as $kelas) { ?>
                            <option value="<?= $kelas['jurusan'] ?>"><?= $kelas['jurusan'] ?></option>
                        <?php } ?>

                    </select>    
                </div>

				<div class="form-group">
                    <label for="">NISN</label>
                    <input type="number" name="NISN" class="form-control" value="<?=  $users->NISN ?>">
                </div>
				<div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?=  $users->alamat ?>" >
                </div>
				<div class="form-group">
                    <label for="">No HP</label>
                    <input type="number" name="no_hp" class="form-control" value="<?=  $users->no_hp ?>">
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
                    <input type="file" name="foto_update" class="form-control">
                </div>

                <?php tombolForm() ?>

            </form>
        </div>
    </div><!-- /.card-body -->
</div>