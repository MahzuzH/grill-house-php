<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$kode_daging = $_POST['kode_daging'];
$bagian_daging = $_POST['bagian_daging'];
$grade = $_POST['grade'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];


// menginput data ke database
mysqli_query($koneksi,"insert into daging (`kode_daging`, `bagian_daging`, `grade`, `stok`, `harga`) values('$kode_daging','$bagian_daging','$grade','$stok','$harga')");
// mengalihkan halaman kembali ke tampil.php
header("location:tampil_daging.php");

?>