<h3 class="h3">LAPORAN</h3>
<div class="container-produk">
	<div class="table-produk">
		<table bgcolor="whitesmoke">
				<tr>
					<th>Id</th>
					<th>Produk</th>
					<th>Merk</th>
					<th>Stok</th>
					<th>Peminta</th>
					<th>Petugas</th>
					<th>Tanggal & Waktu</th>
				</tr>

				<?php 
					include 'controller/conn.php';
					$query = mysqli_query($conn, "SELECT * FROM keluar INNER JOIN barang ON keluar.idBarang = barang.idBarang INNER JOIN merk ON keluar.idMerk = merk.idMerk");
					$no=1;
					while($data = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?= $data['idBarang']; ?></td>
					<td><?= $data['namaBarang']; ?></td>
					<td><?= $data['namaMerk']; ?></td>
					<td><?= $data['jumlah']; ?></td>
					<td><?= $data['namaPeminta']; ?></td>
					<td><?= $data['namaPetugas']; ?></td>
					<td><?= $data['tglKeluar']; ?></td>
				</tr>
				<?php
				} 
				?>
		</table>
	</div>
</div>