<?php 
    include 'koneksi.php';
    session_start();

    //mengambil data dari method
    $username = $_POST['username'];
    $password = $_POST['password'];

    //insert ke dalam database
    $hasil=$db->query("SELECT * FROM pengguna WHERE pengguna.username = '$username' AND pengguna.password = '$password'");

    //mengarahkan ke halaman daftar produk
    if($hasil->num_rows == 1){
        $_SESSION['username'] = $username;
        $_SESSION['logged_in'] = TRUE;
        header('location: daftar_produk.php');
    } else {
<<<<<<< HEAD
        header('location: login.php'); }
=======
        header('location: login.php');
    }
>>>>>>> 6fa0c46c0c5fe0d66aa77014c174a5793b072dfa
?>