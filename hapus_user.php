<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$no_akun = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi,"delete from user where no_akun='$no_akun'");

header("location:tampil_user.php");

?>