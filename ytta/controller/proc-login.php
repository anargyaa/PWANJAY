<?php

include "conn.php";
session_start();

$username   = $_POST['username'];
$password   = md5($_POST['password']);
$query  = mysqli_query($conn, "select * from user where username = '$username' and password = '$password'");
$data   = mysqli_fetch_array($query);
$cek    = mysqli_num_rows($query);

if ($cek > 0) {
    if ($data['role']=="1") {
	    $_SESSION['id']         = $data['id'];
	    $_SESSION['username']   = $data['username'];
	    $_SESSION['password']   = $data['password'];
	    $_SESSION['role']    	= $data['role'];    
	    header("location: ../index.php");    
    }

    elseif ($data['role']=="0"){
	    $_SESSION['id']         = $data['id'];
	    $_SESSION['username']   = $data['username'];
	    $_SESSION['password']   = $data['password'];
	    $_SESSION['role']    	= $data['role'];
	    header("location: ../index-karyawan.php");
    }
}

else{
    header("location: ../login.php");
}

?>