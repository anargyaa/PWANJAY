<?php

include 'conn.php';
session_start();

if (isset($_POST["keluar"])) {
	$result=$conn->query("SELECT * FROM barang WHERE idBarang='$_POST[idBarang]'");
	$cek     =mysqli_fetch_array($result);
    $stok    =$cek['stokBarang'];
	$jumlah = $_POST['jumlah'];
	$sisa = $stok-$jumlah;

	if($stok < $jumlah){
		echo "<script>alert('Barang gagal dikeluarkan');window.location='../';</script>";		
	}
	else{
		$result = $conn->query("INSERT INTO keluar VALUES ('', '$_POST[idBarang]', '$_POST[idMerk]', '$_POST[namaPeminta]', '$_POST[namaPetugas]', '$jumlah', current_timestamp())");
			if ($result) {
                $upstok= mysqli_query($conn, "UPDATE barang SET stokBarang='$sisa' WHERE idBarang='$_POST[idBarang]'");
				echo "<script>alert('Barang berhasil dikeluarkan');window.location='../index-karyawan.php';</script>";
			}
	}
}

elseif (isset($_POST["edit"])) {
	$result = $conn->query("UPDATE barang SET idMerk='$_POST[idMerk]', namaBarang='$_POST[namaBarang]', hargaBarang='$_POST[hargaBarang]', stokBarang='$_POST[stokBarang]' WHERE idBarang='$_POST[idBarang]'");
	if ($result) {
		echo "<script>alert('Data barang berhasil dirubah');window.location='../index.php';</script>";
	}
	else{
		echo "<script>alert('Data barang gagal dirubah');window.location='../index.php';</script>";		
	}

}

?>