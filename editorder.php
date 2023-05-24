<?php 
// koneksi database
include 'koneksi.php';

// error_reporting(E_ALL^(E_NOTICE | E_WARNING));
$id_transaksi       = $_POST['id_transaksi'];
$username           = $_POST['username'];
$kode_daging        = $_POST['kode_daging'];
$tingkat_kematangan = $_POST['tingkat_kematangan'];
$harga              = $_POST['harga'];
$stok               = $_POST['stok'];
$total              = $_POST['total'];


mysqli_query($koneksi, "update transaksi SET username='$username', kode_daging='$kode_daging', tingkat_kematangan='$tingkat_kematangan', harga='$harga', stok='$stok', total='$total' where id_transaksi='$id_transaksi'"); 

// mengalihkan halaman kembali ke tampil.php
header("location:tampil_order.php");

?>
