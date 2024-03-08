<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Data users
        </h3>
        <a href="<?php url('backend/users/form') ?>" class="btn btn-sm btn-primary shadow float-right">Tambah</a>
    </div><!-- /.card-header -->
    <div class="card-body">
        <div class="tab-content p-0">
            <table class="table table-striped data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>       
                        <th>level</th>
                        <th>Kelas</th>
                        <th>NISN</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Jenis Kelamin</th>
                        <th>Foto</th>   
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach( query()->table("users")->get() AS $item ){ ?>
                     <tr>
                        <td> <?= $no++ ?> </td>
                        <td> <?= $item["username"] ?> </td>
                        <td> <?= $item["email"] ?> </td>
                        <td> <button class="btn btn-success btn-sm rounded "><?= $item["level"] ?></button> </td>
                        
                        <td> <?= $item["kelas"] ?> </td>
                        <td> <?= $item["NISN"] ?> </td>
                        <td> <?= $item["alamat"] ?> </td>
                        <td> <?= $item["no_hp"] ?> </td>
                        <td> <?= $item["jenis_kelamin"] ?> </td>
                        <td> 
                            <?php
                                if (empty($item['foto'])) {
                                    if ($item["jenis_kelamin"] == "laki laki") {
                                        $foto = "man2.png";
                                    }else{
                                        $foto = "woman.png";
                                    }
                                }else{
                                    $foto = $item['foto'];
                                }
                            ?>
                            <img src="<?= asset('uploads/FotoUsers/'.$foto) ?>" style="width: 50px;" class="rounded" alt="">
                        </td>
                        
                        <td> 
                            <a href="<?php controller("UsersController@HapusData",$item['id'])?>" class="btn btn-danger btn-sm shadow"> <i class="fa fa-trash"></i></a>
                            <a href="<?php controller("UsersController@EditData",$item['id'])?>" class="btn btn-primary btn-sm shadow"><i class="fa fa-edit"></i></a>
                        </td>
                     </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div><!-- /.card-body -->
</div>