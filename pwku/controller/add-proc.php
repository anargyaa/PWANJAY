<?php 

include "conn.php";
session_start();

if (isset($_POST["submit"])) {
	$result = $conn->query("INSERT INTO barang VALUES('', '$_POST[idMerk]', '$_POST[namaBarang]', '$_POST[hargaBarang]', '$_POST[stokBarang]')");
	if ($result) {
		echo "<script>alert('Data berhasil ditambahkan');window.location='../index.php';</script>";
	}
}

?>