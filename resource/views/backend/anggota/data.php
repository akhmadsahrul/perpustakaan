<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Data anggota
        </h3>
        <a href="<?php url('backend/anggota/form') ?>" class="btn btn-sm btn-primary shadow float-right">Tambah</a>
    </div><!-- /.card-header -->
    <div class="card-body">
        <div class="tab-content p-0">
            <table class="table table-striped data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Jenis Kelamin</th>
                        <th>Status</th>
                        <th>Foto</th>   
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach( query()->table("anggota")->get() AS $item ){ ?>
                     <tr>
                        <td> <?= $no++ ?> </td>
                        <td> <?= $item["nama"] ?> </td>
                        <td> <?= $item["NISN"] ?> </td>
                        <td> <?= $item["alamat"] ?> </td>
                        <td> <?= $item["email"] ?> </td>
                        <td> <?= $item["no_hp"] ?> </td>
                        <td> <?= $item["jenis_kelamin"] ?> </td>
                        <td> <?= $item["status"] ?> </td>
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
                            <img src="<?= asset('uploads/FotoAnggota/'.$foto) ?>" style="width: 50px;" class="rounded" alt="">
                        </td>
                        
                        <td> 
                            <a href="<?php controller("AnggotaController@HapusData",$item['id'])?>" class="btn btn-danger btn-sm shadow"> <i class="fa fa-trash"></i></a>
                            <a href="<?php controller("AnggotaController@EditData",$item['id'])?>" class="btn btn-primary btn-sm shadow"><i class="fa fa-edit"></i></a>
                        </td>
                     </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div><!-- /.card-body -->
</div>