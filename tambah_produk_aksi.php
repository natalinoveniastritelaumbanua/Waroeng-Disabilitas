
<?php
    include 'koneksi.php';

    // mengambil data dari method POST
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_POST['foto'];
    $status = $_POST['status'];

    //insert ke dalam database
    $hasil = $db->query("INSERT INTO daftar_produk(nama_produk, harga, deskripsi, foto_produk, status_produk)
    VALUES('$nama_produk', $harga, '$deskripsi', '$foto', '$status')");

    //mengarahkan ke halaman daftar produk
    if($hasil) {
        header('location:daftar_produk.php');
    }
?>