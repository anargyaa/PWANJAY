<?php
include 'conn.php';

if ($_POST["keluar"]) {
	$idBarang      =['idBarang'];
    $namaBarang    =$_POST['namaBarang'];
    $namaPeminta   =$_POST['namaPeminta'];
    $namaPetugas   =$_POST['namaPetugas'];
    $jumlah        =$_POST['jumlah'];
    $result  =mysqli_query($conn, "SELECT * FROM barang WHERE namaBarang='$namaBarang'");
    $sto     =mysqli_fetch_array($result);
    $stok    =$sto['stokBarang'];

    $sisa    =$stok-$jumlah;
    
    if ($stok < $jumlah) {
        ?>
        <script language="JavaScript">
            alert('Oops! Jumlah pengeluaran lebih besar dari stok ...');
            document.location='../index-karyawan.php';
        </script>
        <?php
    }
    else{
        $insert =mysqli_query($conn, "INSERT INTO keluar VALUES ('', '$idBarang', '$namaPeminta', '$namaPetugas', '$jumlah')");
            if($insert){
                //update stok
                $upstok= mysqli_query($conn, "UPDATE barang SET stok='$sisa' WHERE namaBarang='$namaBarang'");
                ?>
                <script language="JavaScript">
                    alert('Good! Input transaksi pengeluaran barang berhasil ...');
                    document.location='./';
                </script>
                <?php
            }
            else {
                echo "<div><b>Oops!</b> 404 Error Server.</div>";
            }
    }
    }
?>