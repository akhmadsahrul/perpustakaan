<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Buku
        </h3>
    </div><!-- /.card-header -->
    <div class="card-body">
        <div class="tab-content p-0">
            <form action="<?php controller("BukuController@TambahData") ?>" method="POST" enctype="multipart/form-data">
        
                <div class="form-group">
                    <label for="">Kategori</label>
                    
                    <select name="kategori_id" id="input" class="form-control" required="required">
                        <option value="" selected disabled>-Pilih Data-</option>
                        
                        <?php foreach (query()->table('categories')->get() as $kategori) { ?>
                            <option value="<?= $kategori['id'] ?>"><?= $kategori['nama'] ?></option>
                        <?php } ?>

                    </select>
                    
                </div>

                
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" name="judul" class="form-control">
                </div>
                <div class="form-group ">
                    <label for="">Pnenerbit</label>
                    
                    <select name="penerbit" id="input" class="form-control" required="required">
                        <option value="" selected disabled>-Pilih Penerbit-</option>
                        
                        <?php foreach (query()->table('penerbit')->get() as $penerbit) { ?>
                            <option value="<?= $penerbit['penerbit'] ?>"><?= $penerbit['penerbit'] ?></option>
                        <?php } ?>

                    </select>    
                </div>
                <div class="form-group">
                    <label for="">Tahun Terbit</label>
                    <input type="number" name="tahun_terbit" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Pengarang</label>
                    <input type="text" name="pengarang" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Stok</label>
                    <input type="number" name="stok" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" name="foto" class="form-control">
                </div>

                <?php tombolForm() ?>
                <!-- Agar fungsi tombol kembali berfungsi dengan baik, pastikan anda punya file dengan nama data.php -->

            </form>
        </div>
    </div><!-- /.card-body -->
</div>