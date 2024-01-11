<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waroeng Disabilitas</title>
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <!-- navbar -->
    <?php
    include 'navbar.php'
    ?>

    <?php
    include 'koneksi.php';
    $produk = $db->query("SELECT * FROM daftar_produk");
    ?>
    <!-- end of navbar -->

    <!-- header -->
        <header id = "header" class = "vh-100 carousel slide" data-bs-ride = "carousel" style = "padding-top: 104px;">
            <div class = "container h-100 d-flex align-items-center carousel-inner">
        </header>
    <!-- end of header -->

    <!-- collection -->
    <section id="collection" class="py-5">
        <div class="container">
            <div class="title text-center">
                <h2 class="position-relative d-inline-block">PRODUCT</h2>
            </div>

            <div class="row g-0">
                <div class="d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                    
                </div>

<<<<<<< HEAD
                <div class="special-list row g-0">
                    <!-- Misalnya Anda telah mengambil data produk dari database dan menyimpannya dalam array $produk -->
                    <?php foreach ($produk as $item) { ?>
                        <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                            <div class="special-img position-relative overflow-hidden">
                                <!-- Menampilkan gambar produk -->
                                <img src="images/<?= $item['foto_produk']; ?>" width="30%" class="w-100" height="280" alt="<?= $item['nama_produk']; ?>">
                                <!-- Pastikan path gambar disesuaikan dengan struktur folder penyimpanan gambar Anda -->
                            </div>

                            <div class="text-center">
                                <!-- Menampilkan detail produk -->
                                <p class="text-capitalize mt-3 mb-1"><?= $item['nama_produk']; ?></p>
                                <span class="fw-bold d-block">Rp. <?= number_format($item['harga'], 2); ?></span>
                                <!-- Ubah link href sesuai dengan halaman detail produk Anda -->
                                <a href="detail.php?id=<?= $item['id_produk']; ?>" class="btn btn-sm text-dark p-0">
                                    <i class="fas fa-eye text-primary mr-1"></i>View Detail
                                </a>
                            </div>
                        </div>
                    <?php } ?>
=======
            <div class = "special-list row g-0">
                <?php
                  $data = $db->query("SELECT * FROM daftar_produk");
                  foreach($data as $produk) {
                ?>
                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "foto/<?= $produk['foto_produk']; ?>" class = "w-100">
                        
                        </span>
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1"><?= $produk['nama_produk']; ?></p>
                        <span class = "fw-bold d-block">Rp. <?= number_format($produk['harga'],2,',','.'); ?></span>
                        <!-- <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a> -->
                        
                    </div>
                </div>
                <?php } ?>
            </div>
>>>>>>> 6fa0c46c0c5fe0d66aa77014c174a5793b072dfa
    </section>

    <!-- end of special products -->

    <!-- about us -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row gy-lg-5 align-items-center">
                <div class="col-lg-6 order-lg-1 text-center text-lg-start">
                    <div class="title pt-3 pb-5">
                        <h2 class="position-relative d-inline-block ms-4">About Us</h2>
                    </div>
                    <p class="lead text-muted">Waroeng Disabilitas Sasirangan adalah tempat yang menggabungkan seni, budaya, dan inklusivitas dengan fokus pada pengolahan kain sasirangan. </p>
                    <p>Wadah untuk orang disabilitas dapat mengembangkan bakat dan membuka lapangan kerja untuk orang disabilitas. Produk yang dihasilkan oleh Waroeng Disabilitas adalah pakaian khas Kalimantan Selatan yaitu Sasirangan. 
                        Sasirangan ini dibuat langsung oleh teman-teman disabilitas mulai dari mendesain pola, menjahit dan menjelujur hingga mewarnai kain. Di Waroeng Disabilitas menjual berbagai jenis produk seperti Kain Sasirangan, 
                        Baju Atasan dari lengan pendek hingga panjang, juga berbagai jenis produk lainnya. Ketika ada event Waroeng Disabilitas juga akan berpartisipasi dalam acara tersebut untuk mengenalkan hasil karya mereka. 
                        Ketika ada kesempatan juga, para teman-teman disabilitas akan menjadi model untuk menampilkan karyanya.</p>
                    <a href="About.php" class="btn">Read More</a>
                </div>
                <div class="col-lg-6 order-lg-0">
                    <img src="foto/foto wb.jpeg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- end of about us -->

<<<<<<< HEAD
    <?php
    include "footer.php";
    ?>
=======
   <?php 
   include "footer_front.php";
   ?>
>>>>>>> 6fa0c46c0c5fe0d66aa77014c174a5793b072dfa




    <!-- jquery -->
    <script src="js/jquery-3.6.0.js"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- bootstrap js -->
    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script src="js/script.js"></script>
</body>

</html>