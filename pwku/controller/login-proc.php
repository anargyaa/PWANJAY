<?php

include "conn.php";
session_start();

$username   = $_POST['username'];
$password   = md5($_POST['password']);
$query = mysqli_query($conn, "select * from user where username = '$username' and password = '$password'");

if(mysqli_num_rows($query)>0){
    $baris=mysqli_fetch_array($query);
    $_SESSION['id']         = $baris['id'];
    $_SESSION['username']   = $baris['username'];
    $_SESSION['password']   = $baris['password'];
    header("location: ../index.php");
}
else{
    header("location: ../login.php");
}