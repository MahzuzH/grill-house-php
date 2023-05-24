<?php 
// koneksi database
include 'koneksi.php';

$kode_daging    = $_POST['kode_daging'];
$bagian_daging  = $_POST['bagian_daging'];
$grade          = $_POST['grade'];
$stok           = $_POST['stok'];
$harga          = $_POST['harga'];

mysqli_query($koneksi,"update daging set stok='$stok', harga='$harga' where kode_daging='$kode_daging'");

// mengalihkan halaman kembali ke tampil.php
header("location:tampil_daging.php");

?>