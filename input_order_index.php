<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$username           = $_POST['username'];
$kode_daging        = $_POST['kode_daging'];
$tingkat_kematangan = $_POST['tingkat_kematangan'];
$harga              = $_POST['harga'];
$stok               = $_POST['stok'];
$total              = $_POST['total'];

// menginput data ke database
mysqli_query($koneksi,"insert into transaksi values('','$username','$kode_daging','$tingkat_kematangan','$harga','$stok','$total')");
// mengalihkan halaman kembali ke tampil.php
header("location:index.php");

?>