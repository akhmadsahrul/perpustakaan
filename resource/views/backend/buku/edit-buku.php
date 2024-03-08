<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Edit Buku
        </h3>
    </div><!-- /.card-header -->
    <div class="card-body">
        <div class="tab-content p-0">
            <form action="<?php controller("BukuController@UpdateData",$buku->id) ?>" method="POST" enctype="multipart/form-data">
        
            <div class="form-group">
                    <label for="">Kategori</label>
                    
                    <select name="kategori_id" id="input" class="form-control" required="required">
                        <?php $p = query()->table('categories')->where('id',$buku->kategori_id)->single(); ?>
                        <option value="<?= $buku->kategori_id ?>" selected ><?= $p->nama ?></option>
                        
                        <?php foreach (query()->table('categories')->get() as $kategori) { ?>
                            <option value="<?= $kategori['id'] ?>"><?= $kategori['nama'] ?></option>
                        <?php } ?>

                    </select>
                    
                </div>
                       <input type="hidden" name="kode_buku" class="form-control" value="<?=  $buku->kode_buku ?>">
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" name="judul" class="form-control" value="<?=  $buku->judul ?>">
                </div>
                <div class="form-group ">
                    <label for="">Pnenerbit</label>
                    
                    <select name="penerbit" id="input" class="form-control" required="required">
                        <option value="<?= $buku->penerbit ?>" selected ><?= $buku->penerbit ?></option>
                        
                        <?php foreach (query()->table('penerbit')->get() as $penerbit) { ?>
                            <option value="<?= $penerbit['penerbit'] ?>"><?= $penerbit['penerbit'] ?></option>
                        <?php } ?>

                    </select>    
                </div>
                <div class="form-group">
                    <label for="">Tahun Terbit</label>
                    <input type="number" name="tahun_terbit" class="form-control" value="<?=  $buku->tahun_terbit ?>">
                </div>
                <div class="form-group">
                    <label for="">Pengarang</label>
                    <input type="text" name="pengarang" class="form-control" value="<?=  $buku->pengarang ?>">
                </div>
                <div class="form-group">
                    <label for="">Stok</label>
                    <input type="text" name="stok" class="form-control" value="<?=  $buku->stok ?>">
                </div>
                <div class="form-group">
                    <label for="">Foto</label> <br>
                    <img src="<?= asset('uploads/'.$buku->foto) ?>" style="max-width: 200px;" alt=""> 
                    <input type="file" name="foto" class="form-control" value="<?=  $buku->foto ?>">
                </div>

                <?php tombolForm() ?>
                <!-- Agar fungsi tombol kembali berfungsi dengan baik, pastikan anda punya file dengan nama data.php -->

            </form>
        </div>
    </div><!-- /.card-body -->
</div>