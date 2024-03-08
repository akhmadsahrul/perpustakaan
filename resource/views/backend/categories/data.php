<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            kategori
        </h3>
        <a href="<?php url('backend/categories/form') ?>" class="btn btn-sm btn-primary shadow float-right">Tambah</a>
    </div><!-- /.card-header -->
    <div class="card-body">
        <div class="tab-content p-0">
            <table class="table table-striped data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>nama</th>
                        <th>keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach( query()->table("categories")->get() AS $item ){ ?>
                     <tr>
                        <td> <?= $no++ ?> </td>
                        <td> <?= $item["nama"] ?> </td>
                        <td> 
                            <?php 
                            if ($item['keterangan'] == "") {
                                echo "(Tidak di Isi)";
                            }else{
                                echo $item['keterangan'];
                            }
                            ?>    
                        </td>
                        <td> 
                            <a href="<?php controller("CategoriesController@HapusData",$item['id'])?>" class="btn btn-danger btn-sm shadow"><i class="fa fa-trash"></i></i></a>
                            <a href="<?php controller("CategoriesController@EditData",$item['id'])?>" class="btn btn-primary btn-sm shadow"><i class="fa fa-edit"></i></i></a>
                        </td>
                     </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div><!-- /.card-body -->
</div>