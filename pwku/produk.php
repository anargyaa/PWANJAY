<h3 class="h3">PRODUK</h3>
<div class="container-produk">
	<div class="table-produk">
		<table bgcolor="whitesmoke">
				<tr>
					<th>Id</th>
					<th>Produk</th>
					<th>Merk</th>
					<th>Harga</th>
					<th>Stok</th>
					<th>Menu</th>
				</tr>

				<?php 
					include 'controller/conn.php';

					$query = mysqli_query($conn, "SELECT * FROM merk JOIN barang ON merk.idMerk = barang.idMerk");
					$no=1;
					while($data = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?= $data['idBarang']; ?></td>
					<td><?= $data['namaBarang']; ?></td>
					<td><?= $data['namaMerk']; ?></td>
					<td><?= $data['hargaBarang']; ?></td>
					<td><?= $data['stokBarang']; ?></td>
					<td><a href="index.php?halaman=edit&id=<?= $data['idBarang']; ?>"><button class="submit-e" style="background-color: var(--kuning);">Ubah</button></a><a href="index.php?halaman=hapus&id=<?= $data['idBarang']; ?>"><button class="submit-e" style="background-color: var(--merah);">Hapus</button></a></td>
				</tr>
				<?php
				} 
				?>
		</table>
	</div>
</div>