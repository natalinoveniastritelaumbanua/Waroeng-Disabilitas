<?php include "koneksi.php"; ?>

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
    <link rel = "stylesheet" href = "bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "css/main.css">
</head>
<body>
    
    <!-- navbar -->
    <?php 
    include 'navbar.php'
    ?>
    <!-- <nav class = "navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
        <div class = "container">
            <a class = "navbar-brand d-flex justify-content-between align-items-center order-lg-0" >
                <img src = "./20220717_214516_0001.ico" alt = "site icon">
                <span class = "text-uppercase fw-lighter ms-2">Waroeng Disabilitas</span>
            </a>

            <div class = "order-lg-2 nav-btns">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button type = "button" class = "btn position-relative">
                    <i class = "fa fa-search"></i>
                </button>
            </form>
            </div>

            <button class = "navbar-toggler border-0" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navMenu">
                <span class = "navbar-toggler-icon"></span>
            </button>

            <div class = "collapse navbar-collapse order-lg-1" id = "navMenu">
                <ul class = "navbar-nav mx-auto text-center">
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "index.php">Home</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "Product.php">Product</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link text-uppercase text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:cornflowerblue;">
                          <li><a class="dropdown-item" href="#">Kain</a></li>
                          <li><a class="dropdown-item" href="#">Kaos lengan pendek</a></li>
                          <li><a class="dropdown-item" href="#">Kaos lengan panjang</a></li>
                          <li><a class="dropdown-item" href="#">Tunik</a></li>
                        </ul>
                      </li> -->
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "About.php">About Us</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "login.php">Admin</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav> -->
    <!-- end of navbar -->
    <?php
    include 'koneksi.php';
    $produk = $db->query("SELECT * FROM daftar_produk");
    ?>
    <!-- end of navbar -->

    <!-- product -->
    
    <!-- collection -->
   <!-- collection -->
   <section id="collection" class="py-5">
        <div class="container">
            <div class="title text-center">
                <h2 class="position-relative d-inline-block">PRODUCT</h2>
            </div>


            <div class = "special-list row g-0">
                <?php
                  include 'koneksi.php';
                  $data = $db->query("SELECT * FROM daftar_produk");
                  foreach($data as $produk) {
                ?>
                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "foto/kaos pendek.jpeg" class = "w-100">
                        
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

            <div class="row g-0">
                <div class="d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                    
                </div>

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
    </section>

    <!-- end of special products -->


    <!-- end of special products -->
   

    <!-- footer -->
    <footer class = "bg-dark py-5">
        <div class = "container">
            <div class = "row text-white g-4">
                <div class = "col-md-6 col-lg-3">
                    <a class = "text-uppercase text-decoration-none brand text-white" href = "index.html">Waroeng Disabilitas</a>
                    <p class = "text-white text-muted mt-3">waroeng disabilitas menjual sasirangan dari kain hingga pakaian</p>
                </div>

                <div class = "col-md-6 col-lg-3">
                    <h5 class = "fw-light">Links</h5>
                    <ul class = "list-unstyled">
                        <li class = "my-3">
                            <a href = "index.php" class = "text-white text-decoration-none text-muted">
                                <i class = "fas fa-chevron-right me-1"></i> Home
                            </a>
                        </li>
                        <li class = "my-3">
                            <a href = "Product.php" class = "text-white text-decoration-none text-muted">
                                <i class = "fas fa-chevron-right me-1"></i> Product
                            </a>
                        </li>
                        <li class = "my-3">
                            <a href = "#" class = "text-white text-decoration-none text-muted">
                                <i class = "fas fa-chevron-right me-1"></i> About Us
                            </a>
                        </li>
                    </ul>
                </div>

                <div class = "col-md-6 col-lg-3">
                    <h5 class = "fw-light mb-3">Contact Us</h5>
                    <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class = "me-3">
                            <i class = "fas fa-map-marked-alt"></i>
                        </span>
                        <span class = "fw-light">
                            Jl. Batu Besar, Tlk. Dalam, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan 701115
                        </span>
                    </div>
                    <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class = "me-3">
                            <i class="fa-brands fa-shopify"></i>
                        </span>
                        <span class = "fw-light">
                            waroeng disabilitas
                        </span>
                    </div>
                    <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class = "me-3">
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span class = "fw-light">
                            +62 812-5549-4032
                        </span>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-3">
                    <h5 class = "fw-light mb-3">Follow Us</h5>
                    <div>
                        <ul class = "list-unstyled d-flex">
                          
                            <li>
                                <a href = "https://instagram.com/waroeng_disabilitas?igshid=MzMyNGUyNmU2YQ==" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class = "fab fa-instagram"></i>
                                </a>
                            </li>
                           
                        
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->

     <!-- jquery -->
     <script src = "js/jquery-3.6.0.js"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- bootstrap js -->
    <script src = "bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script src = "js/script.js"></script>
</body>
</html>

