<?php 

include "conn.php";
session_start();

if (isset($_POST["submit"])) {
	$result = $conn->query("INSERT INTO barang VALUES('', '$_POST[idMerk]', '$_POST[namaBarang]', '$_POST[hargaBarang]', '$_POST[stokBarang]')");
	if ($result) {
		echo "<script>alert('Barang baru berhasil ditambahkan');window.location='../index.php';</script>";
	}
}

elseif (isset($_POST["merk"])) {
	$result = $conn->query("INSERT INTO merk VALUES('', '$_POST[namaMerk]')");
	if ($result) {
		echo "<script>alert('Merk baru berhasil ditambahkan');window.location='../index.php';</script>";
	}
	else{
		echo "<script>alert('Merk baru gagal ditambahkan');window.location='../edit.php';</script>";		
	}
}

?> 