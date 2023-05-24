<?php 
// koneksi database
include 'koneksi.php';

// error_reporting(E_ALL^(E_NOTICE | E_WARNING));

$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

mysqli_query($koneksi,"insert into user values('','$username','$password','$level')");
// mengalihkan halaman kembali ke tampil.php
header("location:tampil_user.php");

?>
