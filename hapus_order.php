<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id_transaksi = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi,"delete from transaksi where id_transaksi='$id_transaksi'");

header("location:tampil_order.php");

?>