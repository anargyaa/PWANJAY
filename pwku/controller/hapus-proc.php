<?php

$ambil = $conn->query("SELECT * FROM barang WHERE idBarang = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$conn->query("DELETE FROM barang WHERE idBarang = '$_GET[id]'");

echo "<script>alert('Data berhasil dihapus');</script>";
echo "<script>location='./index.php';</script>";