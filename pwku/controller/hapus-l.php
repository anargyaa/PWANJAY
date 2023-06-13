<?php

$ambil = $conn->query("SELECT * FROM keluar WHERE idKeluar = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$conn->query("DELETE FROM keluar WHERE idKeluar = '$_GET[id]'");

echo "<script>alert('Data berhasil dihapus');</script>";
echo "<script>location='./index.php';</script>";