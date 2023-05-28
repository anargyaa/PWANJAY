<?php

include "controller/conn.php";
session_start();

$jabatan = $_SESSION['jabatan'];

if ($jabatan=='MANAGER') {
    header("location: index.php");    
}
if (!isset($jabatan)) {
	header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <title>Gudang</title>
</head>
<body>
<!-- /.  NAV TOP  -->
    <div class="container-nav">
        <ul class="nav">
			<li>
				<a href="index-karyawan.php">Keluar</a>
			</li>      
			<li>
				<a href="index.php?halaman=profile">Profile</a>
			</li>      
			<li>
				<a href="index.php?halaman=logout">Logout</a>
			</li>      
		</ul>
    </div>
<!-- /. NAV SIDE  -->

    <!-- konten -->
    <div class="container-isi">
			<div id="page-inner">
				<?php
					if(isset($_GET["halaman"])){
						if($_GET["halaman"] == "profile"){
							include 'profile.php';
						}
						elseif($_GET["halaman"] == "logout"){
							include 'logout.php';
						}
					}
					else{
						include 'keluar.php';
					}
				?>                        
			</div>
    </div>
    <!-- akhir konten -->
</body>
</html>