<?php
$datamerk = [];
$query = $conn->query("SELECT * FROM merk");
while($tiap = $query->fetch_assoc()){
    $datamerk[] = $tiap;
}

$semuadata = [];
if(isset($_GET['idMerk'])){
    $idMerk=trim($_GET['idMerk']);
    $query = $conn->query("SELECT * FROM barang JOIN merk ON barang.idMerk=merk.idBarang WHERE idBarang='$idBarang'");
    while($pecah = $query->fetch_assoc()){
        $semuadata[] = $pecah;
    }
}
?>

<h3 class="h3-produk">CATAT</h3>
<div class="container-catat">
	<form action="" method="GET" class="form-catat">
            <h2>Masukan Barang</h2>
            <span>Nama Barang: *</span>
            <br>
            <select name="idBarang" class="input-text">
                <option value="">Pilih Merk *</option>
                <?php foreach($semuadata as $key => $value): ?>
                <option value="<?= $value['idBarang'] ?>"><?= $value['namaBarang']; ?></option>
                <?php endforeach; ?>
            </select>
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
            <span>Stok: *</span>
            <br>
            <input type="text" name="stokBarang" class="input-text"/>
            <br>
            <span>Nama Peminta: *</span>
            <br>
            <input type="text" name="namaPeminta" class="input-text"/>
            <br>
            <span>Nama Petugas: *</span>
            <br>
            <input type="text" name="namaPetugas" class="input-text"/>
            <br>
            <button class="submit-uni" style="background-color: var(--kuning);" value="submit" name="submit">Keluarkan</button>
        </form>
</div>