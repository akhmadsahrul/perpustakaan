

<div class="card">
    <div class="card-header">
        <h3 class="card-title name-file">
            Detail Pengembalian
        </h3>
    </div><!-- /.card-header -->
    <div class="card-body">
        <div class="box-body">
            <div class="row">
                <div class="col-sm-5">
                    <table class="table table-striped">
                        <tr style="background:yellow">
                            <td colspan="3">Data Transaksi</td>
                        </tr>
                        <tr>
                            <td>Tgl Peminjaman</td>
                            <td>:</td>
                            <td><?= $detail->tanggal_pinjam ?></td>
                        </tr>
                        <tr>
                            <td>Tgl pengembalian</td>
                            <td>:</td>
                            <td> <?= $detail->tanggal_kembali ?></td>
                        </tr>
                        <tr>
                            <td>NISN</td>
                            <td>:</td>
                            <td><?= $detail->NISN ?></td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>:</td>
                            <td><?= $detail->kelas ?></td>
                        </tr>
                        <tr>
                            <td>Nama Anggota</td>
                            <td>:</td>
                            <td><?= $detail->anggota ?></td>
                        </tr>
                        <tr>
                            <td>Telepon</td>
                            <td>:</td>
                            <td><?= $detail->no_hp ?></td>
                        </tr>
                        <tr>
                            <td>E-mail</td>
                            <td>:</td>
                            <td><?= $detail->email?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?= $detail->alamat ?></td>
                        </tr>
                        <tr>  
                    </table>
                </div>
                <!-- detail-buku -->
                <div class="col-sm-7">
                    <table class="table table-striped">
                        <tr style="background:yellow">
                            <td colspan="3">Pinjam Buku</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td>di kembaliakan</td>
                        </tr>
                        <tr>
                            <td>Tgl Kembali</td>
                            <td>:</td>
                            <td> <?= $detail->tanggal_balik ?></td>
                        </tr>
                        <tr>
                            <td>Denda</td>
                            <td>:</td>
                            <td>
                            <?php  
                                    $jatuh = strtotime($detail->tanggal_kembali);
                                    $kembali = strtotime($detail->tanggal_balik);
                                    $status = $detail->status;
                                    if($status == "dikembalikan"){
                                        if ($kembali > $jatuh) {
                                         
                                            $jarak = $kembali - $jatuh;
                                            
                                            $hari = $jarak / 60 / 60 / 24;
                                            echo $hari * $denda->harga; 

                                        }else{
                                            echo "tidak";
                                        }
                                    }else{
                                        echo "belum dikembalikan";
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Data Buku</td>
                            <td>:</td>
                            <td>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Buku</th>
                                            <th>Title</th>
                                            <th>Penerbit</th>
                                            <th>Tahun</th>
                                            <th>Qty</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php foreach($data_buku AS $Key => $item): ?>
                                            <tr>
                                            <td><?= $Key+1 ?></td>
                                            <td><?= $item->kode_buku?> </td>
                                            <td><?= $item->judul?></td>
                                            <td><?= $item->penerbit?></td>
                                            <td><?= $item->tahun_terbit?></td>
                                            <td><?= $item->qty?></td>
                                            
                                        </tr>

                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="mt-3">
                <a href="data" class="btn btn-danger btn-md">Kembali</a>
            </div>
        </div>
    </div>
</div><!-- /.card-body -->
</div>