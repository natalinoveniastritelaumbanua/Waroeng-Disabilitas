<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil data dari form
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $status = $_POST['status'];

    // Mengelola unggahan file
    $foto = $_FILES['foto']['name'];
    $tmp_file = $_FILES['foto']['tmp_name']; // Perbaikan: Mengambil nama file sementara

    // Tentukan folder penyimpanan
    $folder = 'images/';

    // Pindahkan file yang diunggah ke folder penyimpanan
    if (move_uploaded_file($tmp_file, $folder . $foto)) {
        // Jika file berhasil diunggah, lakukan operasi insert ke dalam database
        $query = "INSERT INTO daftar_produk(nama_produk, harga, deskripsi, foto_produk, status_produk)
                VALUES('$nama_produk', $harga, '$deskripsi', '$foto', '$status')";
        $hasil = $db->query($query);

        if ($hasil) {
            // Jika insert ke database berhasil, arahkan ke halaman daftar_produk.php
            header('location:daftar_produk.php');
            exit();
        } else {
            echo "Gagal menambahkan produk. Silakan coba lagi.";
        }
    } else {
        echo "Gagal mengunggah file. Pastikan folder 'images' dapat ditulisi.";
    }
}
