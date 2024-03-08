<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Form Peminjaman
        </h3>
        <!-- cdn bootstrap4 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
            integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    </div><!-- /.card-header -->
    <div class="card-body">
        <div class="tab-content p-0">
            <form action="<?php controller("PeminjamanController@TambahData") ?>" method="POST"
                enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-4">
                        <td>
                            <label for="">Tanggal Pinjam</label>
                            <input type="text" value="<?= date('d-m-Y') ?>" readonly name="tanggal" class="form-control">
                        </td>
                        <td>
                            <label for="">Tanggal Kembali</label>
                            <input type="date" value="<?= date('d-m-Y')?>" name="tanggal_kembali[]" class="form-control">
                        </td>
                    </div>
                </div>

                <button type="button" class="mt-2 btn btn-success btn-sm shadow tambah_buku">
                    <i class="fa fa-plus"></i>
                </button>
                <br><br>


                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>kode buku</th>
                            <th>pilih buku</th>
                            <th>Qty</th>
                            <th>stock</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" readonly name="kode_buku[]" class="form-control kode_buku">
                            </td>
                            <td>
                                <select name="buku_id[]" id="buku" class="form-control pilih-buku" required="required">
                                    <option value="" selected disabled></option>

                                    <?php foreach (query()->table('buku')->get() as $pilihbuku) { ?>
                                    <option data-stock="<?= $pilihbuku['stok'] ?>" data-kode="<?= $pilihbuku['kode_buku'] ?>" value="<?= $pilihbuku['id'] ?>">
                                        <?= $pilihbuku['judul'] ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                            <td>
                                <input type="number" name="qty[]" class="form-control qty_buku">
                            </td>
                            <td>
                                <input type="text" readonly name="stok[]" class="form-control stock_buku">
                            </td>
                            <td>
                               <button type="button" class="btn btn-danger hapus-data"><i class="fa fa-trash"></i></button>
                            </td>

                        </tr>

                    </tbody>
                </table>

                <?php tombolForm() ?>
                <!-- Agar fungsi tombol kembali berfungsi dengan baik, pastikan anda punya file dengan nama data.php -->

            </form>
        </div>
        <!-- wajib jquery  -->
        
    </div><!-- /.card-body -->
</div>