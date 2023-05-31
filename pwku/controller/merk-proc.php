<?php 

include "conn.php";
session_start();

if (isset($_POST["submit"])) {
	$result = $conn->query("INSERT INTO merk VALUES('', '$_POST[namaMerk]')");
	if ($result) {
		echo "<script>alert('Data berhasil ditambahkan');window.location='../index.php';</script>";
	}
	else{
		echo "<script>alert('Data gagal ditambahkan');window.location='../edit.php';</script>";		
	}
}

?>