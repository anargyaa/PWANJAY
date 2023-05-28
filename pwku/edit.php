<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM barang WHERE idBarang='$id'");
$data = mysqli_fetch_array($query);

$datamerk = [];
$ambil = $conn->query("SELECT * FROM merk");
while($tiap = $ambil->fetch_assoc()){
    $datamerk[] = $tiap;
}

?>
<h3 class="h3-produk">UBAH</h3>
<div class="container-catat">
	<form action="controller/edit-proc.php" method="POST" class="form-catat">
            <h2>Masukan Barang</h2>
            <input type="hidden" name="idBarang" class="input-text" value="<?= $data['idBarang']; ?>"/>
            <span>Nama Barang: *</span>
            <br>
            <input type="text" name="namaBarang" class="input-text" value="<?= $data['namaBarang']; ?>"/>
            <br>
            <span>Merk: *</span>
            <br>
            <select name="idMerk" class="input-text">
            	<option value="">Pilih Merk *</option>
            	<?php foreach($datamerk as $key => $value): ?>
                <option value="<?= $value['idMerk'] ?>" <?php if($data['idMerk']==$value['idMerk']){echo "selected";} ?>>
            <?= $value['namaMerk']; ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <span>Harga: *</span>
            <br>
            <input type="text" name="hargaBarang" class="input-text" value="<?= $data['hargaBarang']; ?>"/>
            <br>
            <span>Stok: *</span>
            <br>
            <input type="text" name="stokBarang" class="input-text" value="<?= $data['stokBarang']; ?>"/>
            <br>
            <button class="submit-uni" style="background-color: var(--kuning);" value="submit" name="submit">UBAH</button>
        </form>
</div>