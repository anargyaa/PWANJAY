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
<h3 class="h3">UBAH</h3>
<div class="container-catat">
	<form action="controller/update-proc.php" method="POST" class="form-catat">
            <h2>Masukan Barang</h2>
            <input type="hidden" name="idBarang" class="input-text" value="<?= $data['idBarang']; ?>"/>
            <input type="hidden" name="idMerk" class="input-text" value="<?= $data['idMerk']; ?>"/>
            <span>Nama Barang: *</span>
            <br>
            <input type="text" name="namaBarang" class="input-text" readonly value="<?= $data['namaBarang'];?> "/>
            <br>
            <span>Stok: *</span>
            <br>
            <input type="number" name="jumlah" class="input-text" value="<?= $data['stokBarang']; ?>"/>
            <br><br>
            <span>Nama Peminta: *</span>
            <br>
            <input type="text" name="namaPeminta" class="input-text" value=""/>
            <br><br>
            <span>Nama Petugas: *</span>
            <br>
            <input type="text" name="namaPetugas" class="input-text" value=""/>
            <br>
            <button class="submit-uni" style="background-color: var(--kuning);" value="keluar" name="keluar">CATAT</button>
        </form>
</div>