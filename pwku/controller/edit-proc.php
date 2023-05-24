<?php

include "conn.php";
session_start();

if (isset($_POST["submit"])) {
	$result = $conn->query("UPDATE barang SET idMerk='$_POST[idMerk]', namaBarang='$_POST[namaBarang]', hargaBarang='$_POST[hargaBarang]', stokBarang='$_POST[stokBarang]' WHERE idBarang='$_POST[idBarang]'");
	if ($result) {
		echo "<script>alert('Data berhasil dirubah');window.location='../index.php';</script>";
	}
}

?>