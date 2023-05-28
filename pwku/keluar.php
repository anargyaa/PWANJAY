<?php
$datamerk = [];
$query = $conn->query("SELECT * FROM merk");
while($tiap = $query->fetch_assoc()){
    $datamerk[] = $tiap;
}

$ket="";
if (isset($_GET['idMerk'])) {
    $idMerk=$_GET['idMerk'];
    $databarang = [];
    $query = $conn->query("SELECT * FROM barang WHERE idMerk='$idMerk'");
    while($tiap = $query->fetch_assoc()){
        $databarang[] = $tiap;   
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
                <?php foreach($databarang as $key => $value): ?>
                <option value="<?= $value['idBarang'] ?>"><?= $value['namaBarang']; ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <span>Merk: *</span>
            <br>
            <select name="idMerk" class="input-text">
            	<option value="">Pilih Merk *</option>
            	<?php foreach($datamerk as $key => $value): ?>
                <option <?=$ket;?> value="<?= $value['idMerk'] ?>"><?= $value['namaMerk']; ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <button class="submit-uni" style="background-color: var(--kuning);" value="cari" name="cari">Cari</button>
    </form>
        <form action="controller/sold.php" method="GET" class="form-catat">
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
            <button class="submit-uni" style="background-color: var(--kuning);" value="cari" name="submit">Catat</button>
        </form>
</div>