
	<table class="table table-striped table-bordered">
		<tr>
			<td>Sampul Buku</td>
			<td> 
				<img src="<?= asset('uploads/'.$bukudetail->foto)?>" style="width: 100px;" alt=""> 
			</td>
		</tr>
		<tr>
			<td>Judul Buku</td>
			<td><?= $bukudetail->judul ?></td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td><?= $bukudetail->nama ?></td>
		</tr>
		<tr>
			<td>Penerbit</td>
			<td><?= $bukudetail->penerbit ?></td>
		</tr>
		<tr>
			<td>Pengarang</td>
			<td><?= $bukudetail->pengarang ?></td>
		</tr>
		<tr>
			<td>Tahun Terbit</td>
			<td><?= $bukudetail->tahun_terbit ?></td>
		</tr>
		<tr>
			<td>Jumlah Buku</td>
			<td><?= $bukudetail->stok ?></td>
		</tr>
	</table>
