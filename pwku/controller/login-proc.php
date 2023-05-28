<?php

include "conn.php";
session_start();

$username   = $_POST['username'];
$password   = md5($_POST['password']);
$query  = mysqli_query($conn, "select * from user where username = '$username' and password = '$password'");
$data   = mysqli_fetch_array($query);
$cek    = mysqli_num_rows($query);

if ($cek > 0) {
    if ($data['jabatan']=="MANAGER") {
    $_SESSION['id']         = $data['id'];
    $_SESSION['username']   = $data['username'];
    $_SESSION['password']   = $data['password'];
    $_SESSION['jabatan']    = $data['jabatan'];    
    header("location: ../index.php");    
    }

    elseif ($data['jabatan']=="KARYAWAN"){
    $_SESSION['id']         = $data['id'];
    $_SESSION['username']   = $data['username'];
    $_SESSION['password']   = $data['password'];
    $_SESSION['jabatan']    = $data['jabatan'];
    header("location: ../index-karyawan.php");
    }
}

else{
    header("location: ../login.php");
}