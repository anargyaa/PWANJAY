<?php
$datamerk = [];
$query = $conn->query("SELECT * FROM merk");
while($tiap = $query->fetch_assoc()){
    $datamerk[] = $tiap;
}

?>

<h3 class="h3">CATAT</h3>
<div class="container-catat">
	<form action="controller/add-proc.php" method="POST" class="form-catat">
            <h2>Masukan Barang</h2>
            <span>Nama Barang: *</span>
            <br>
            <input type="text" name="namaBarang" class="input-text"/>
            <br>
            <span>Merk: *</span>
            <br>
            <select name="idMerk" class="input-text">
            	<option value="">Pilih Merk *</option>
            	<?php foreach($datamerk as $key => $value): ?>
                <option value="<?= $value['idMerk'] ?>"><?= $value['namaMerk']; ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <span>Harga: *</span>
            <br>
            <input type="number" name="hargaBarang" class="input-text"/>
            <br>
            <span>Stok: *</span>
            <br>
            <input type="text" name="stokBarang" class="input-text"/>
            <br>
            <button class="submit-uni" style="background-color: var(--kuning);" value="submit" name="submit">Tambahkan</button>
        </form>
</div>