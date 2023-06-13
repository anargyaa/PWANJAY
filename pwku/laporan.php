<h3 class="h3">LAPORAN</h3>
<div class="container-produk">
	<div class="table-produk">
		<table bgcolor="whitesmoke">
				<tr>
					<th>Id</th>
					<th>Nama Barang</th>
					<th>Merk Barang</th>
					<th>Nama Peminta</th>
					<th>Nama Petugas</th>
					<th>Stok</th>
					<th>Tanggal & Waktu</th>
					<th>Menu</th>
				</tr>

				<?php 
					include 'controller/conn.php';

					$query = mysqli_query($conn, "SELECT * FROM keluar JOIN barang ON barang.idBarang = keluar.idBarang JOIN merk ON merk.idMerk = keluar.idMerk");
					$no=1;
					while($data = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?= $data['idKeluar']; ?></td>
					<td><?= $data['namaBarang']; ?></td>
					<td><?= $data['namaMerk']; ?></td>
					<td><?= $data['peminta']; ?></td>
					<td><?= $data['petugas']; ?></td>
					<td><?= $data['stokKeluar']; ?></td>
					<td><?= $data['dates']; ?></td>
					<td><a href="index.php?halaman=edit&id=<?= $data['idBarang']; ?>"><button class="submit-e" style="background-color: var(--kuning);">Ubah</button></a><a href="index.php?halaman=hapus-l&id=<?= $data['idKeluar']; ?>"><button class="submit-e" style="background-color: var(--merah);">Hapus</button></a></td>
				</tr>
				<?php
				} 
				?>
		</table>
	</div>
</div>