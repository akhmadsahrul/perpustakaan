<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Judul
        </h3>
    </div><!-- /.card-header -->
    <div class="card-body">
        <div class="tab-content p-0">
            <form action="<?php controller("PengadaanbukuController@TambahData") ?>" method="POST"
                enctype="multipart/form-data">

               
                <div class="form-group">
                    <label for="">Tanggal</label>
                    <input type="text" value="<?= date('d-m-Y') ?>" readonly name="tanggal" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Buku</label>
                    <select name="judul" id="" class="form-control">
                        <option disabled selected>- Pilih Buku -</option>
                        <?php 
                
                            $join = query()->table('buku')
                                   ->select('buku.*,categories.*, buku.id AS buku_id')
                                   ->join('categories','buku.kategori_id = categories.id')
                                   ->get();

                       ?>
                        <?php foreach( $join AS $item ){ ?>
                        <option value="<?= $item["buku_id"] ?>"><?= $item["judul"] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Jumlah</label>
                    <input type="number" name="jumlah" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control">
                </div>
                <?php tombolForm() ?>
                <!-- Agar fungsi tombol kembali berfungsi dengan baik, pastikan anda punya file dengan nama data.php -->

            </form>
        </div>
    </div><!-- /.card-body -->
</div>