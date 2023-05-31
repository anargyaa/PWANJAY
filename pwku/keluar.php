<?php
$datamerk = [];
$query = $conn->query("SELECT * FROM merk");
while($tiap = $query->fetch_assoc()){
    $datamerk[] = $tiap;
}
?>

<h3 class="h3">CATAT</h3>
<div class="container-catat">
	<form action="controller/keluar-proc.php" method="POST" class="form-catat">
            <h2>Masukan Barang</h2>
            <span>Nama Barang: *</span>
            <br>
            <input type="text" name="namaBarang" class="input-text"/>
            <br>
            <span>Stok: *</span>
            <br>
            <input type="text" name="jumlah" class="input-text"/>
            <br>
            <span>Nama Peminta: *</span>
            <br>
            <input type="text" name="namaPeminta" class="input-text"/>
            <br>
            <span>Nama Petugas: *</span>
            <br>
            <input type="text" name="namaPetugas" class="input-text"/>
            <br>
            <button class="submit-uni" style="background-color: var(--kuning);" value="keluar" name="keluar">Catat</button>
        </form>
</div>