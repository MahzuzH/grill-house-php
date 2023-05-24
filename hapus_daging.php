<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$kode_daging = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi,"delete from daging where kode_daging='$kode_daging'");

header("location:tampil_daging.php");

?>