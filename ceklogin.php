<?php
    session_start();
    include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' and password='$password'");

    $cek = mysqli_num_rows($data);
    if($cek>0){
        $data_level = mysqli_fetch_array($data);
        $level = $data_level['level'];
        header("location:index.php");

        if($level=='1'){
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            $_SESSION['level'] ="1";
            header("location:tampil_user.php");
        }
        
        else{
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            $_SESSION['level'] ="2";
            header("location:index.php");
        }
    }else{
        echo "<script> alert ('login gagal ! username dan passowrd tidak benar ');</script>";
        echo "<script> window.location = 'login.php';</script>";
    }
?>
