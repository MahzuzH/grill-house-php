<?php 
// koneksi database
include 'koneksi.php';

// error_reporting(E_ALL^(E_NOTICE | E_WARNING));
$no_akun    = $_POST['no_akun'];
$username   = $_POST['username'];
$password   = $_POST['password'];
$level      = $_POST['level'];

// $query = "UPDATE user SET username='$username', password='$password', level='$level' where no_akun='$no_akun'";
// $query = "UPDATE user SET username='$username', password=";

mysqli_query($koneksi, "update user SET username='$username', password='$password', level=$level where no_akun=$no_akun"); 
//  `db_tokodaging`.`user` SET `username`='rayt', `password`='rayt', `level`=1 WHERE  `no_akun`=37;
// mengalihkan halaman kembali ke tampil.php
header("location:tampil_user.php");

?>
