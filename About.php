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
   include 'navbar.php';
   ?>
    <!-- end of navbar -->


 <!-- about us -->
 <section id = "about" class = "py-5">
    <div class = "container">
        <div class = "row gy-lg-5 align-items-center">
            <div class = "col-lg-6 order-lg-1 text-center text-lg-start">
                <div class = "title pt-3 pb-5">
                    <h2 class = "position-relative d-inline-block ms-4">About Us</h2>
                </div>
                <p class = "lead text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, ipsam.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem fuga blanditiis, modi exercitationem quae quam eveniet! Minus labore voluptatibus corporis recusandae accusantium velit, nemo, nobis, nulla ullam pariatur totam quos.</p>
                
            </div>
            <div class = "col-lg-6 order-lg-0">
                <img src = "foto/foto wb.jpeg" alt = "" class = "img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- end of about us -->


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
                        <a href = "index.html" class = "text-white text-decoration-none text-muted">
                            <i class = "fas fa-chevron-right me-1"></i> Home
                        </a>
                    </li>
                    <li class = "my-3">
                        <a href = "Product.html" class = "text-white text-decoration-none text-muted">
                            <i class = "fas fa-chevron-right me-1"></i> Product
                        </a>
                    </li>
                    <li class = "my-3">
                        <a href = "About.html" class = "text-white text-decoration-none text-muted">
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

