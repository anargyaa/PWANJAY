<?php
include 'conn.php';
if(isset($_GET['tanggal'])){
	$tgl = $_GET['tanggal'];
	$sql = mysqli_query($conn,"select * from keluar where tglKeluar='$tgl'");
	$query = mysqli_query($conn, "SELECT * FROM keluar INNER JOIN barang ON keluar.idBarang = barang.idBarang INNER JOIN merk ON keluar.idMerk = merk.idMerk WHERE tglKeluar='$tgl'");
	echo "<script>alert('Data berhasil dirubah');window.location='../index.php?halaman=laporan';</script>";
}
?>