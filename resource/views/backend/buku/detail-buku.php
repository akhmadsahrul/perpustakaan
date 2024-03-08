
	<table class="table table-striped table-bordered">
		<tr>
			<td>Sampul Buku</td>
			<td> 
				<img src="<?= asset('uploads/'.$detailbuku->foto)?>" style="width: 100px;" alt=""> 
			</td>
		</tr>
		<tr>
			<td>Judul Buku</td>
			<td><?= $detailbuku->judul ?></td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td><?= $detailbuku->nama ?></td>
		</tr>
		<tr>
			<td>Penerbit</td>
			<td><?= $detailbuku->penerbit ?></td>
		</tr>
		<tr>
			<td>Pengarang</td>
			<td><?= $detailbuku->pengarang ?></td>
		</tr>
		<tr>
			<td>Tahun Terbit</td>
			<td><?= $detailbuku->tahun_terbit ?></td>
		</tr>
		<tr>
			<td>Jumlah Buku</td>
			<td><?= $detailbuku->stok ?></td>
		</tr>
	</table>
	<div class="mt-3">
                <a href="data" class="btn btn-primary btn-md">Kembali</a>
            </div>
			<br>
