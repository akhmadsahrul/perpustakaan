<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Profile
        </h3>
    </div><!-- /.card-header -->
    <div class="card-body">
        <form action="<?php controller("UsersController@UpdateData_users", $profil_users->id)?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" readonly value="<?= $profil_users->username?>" name="username"
                            required="required" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label>NISN</label>
                        <input type="number" class="form-control" value="<?= $profil_users->NISN?>" name="NISN"
                            required="required" placeholder="NISN">
                    </div>
                    <div class="form-group">
                        <label>Password (opsional)</label>
                        <input type="password" class="form-control" name="password"
                            placeholder="Isi Password Jika di Perlukan Ganti">
                    </div>

                    <div class="form-group kelas">
                    <label for="">Kelas</label>
                    
                    <select name="kelas" id="input" class="form-control" required="required">
                        <option value="<?= $profil_users->kelas ?>" selected ><?= $profil_users->kelas ?></option>
                        
                        <?php foreach (query()->table('kelas')->get() as $kelas) { ?>
                            <option value="<?= $kelas['jurusan'] ?>"><?= $kelas['jurusan'] ?></option>
                        <?php } ?>

                    </select>    
                </div>

                    <div class="form-group">
                        <label>Level</label>
                        <select name="level" class="form-control"  required="required">
                            <option value="anggota">Anggota</option>
                            

                        </select>
                    </div>
                    <div class="form-group form-check-inline">
                        <label for="">Jenis Kelamin</label>
                    </div><br>
                    <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1"
                            value="laki laki" checked>
                        <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                    </div><br>
                    <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2"
                            value="perempuan">
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="number"  class="form-control" value="<?= $profil_users->no_hp?>" name="no_hp"
                            required="required" placeholder="Contoh : 089618173609">
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" value="<?= $profil_users->email?>" readonly class="form-control" name="email"
                            required="required" placeholder="Contoh : perpus@gmail.com">
                    </div>
                    <div class="form-group">
                        <label>Pas Foto</label>
                        <input type="file" name="foto_update">

                        <br />
                        <img src="<?= asset('uploads/FotoUsers/'.$profil_users->foto) ?>" width="250px" class="img-responsive"
                            alt="">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" name="alamat"
                            required="required"><?= $profil_users->alamat?></textarea>
                        <input type="hidden" class="form-control">
                    </div>
                </div>
            </div>
            <!-- <a href="" class="btn btn-success btn-sm shadow">Edit Data</i></a> -->
            
            <div class="input-group">
                <input type="submit" class="btn btn-primary" value="Edit Data">
            </div>
            
        </form>
    </div>
</div>