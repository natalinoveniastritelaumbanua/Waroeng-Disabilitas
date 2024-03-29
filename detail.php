<?php
include 'koneksi.php';

// Ambil ID produk dari parameter URL
$id_produk = $_GET['id'];

// Query untuk mengambil detail produk berdasarkan ID
$result = $db->query("SELECT * FROM daftar_produk WHERE id_produk = $id_produk");

// Periksa apakah data ditemukan
if ($result->num_rows > 0) {
    $detail = $result->fetch_assoc();
?>

    <!DOCTYPE html>
    <html>

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail Produk</title>
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
        include 'navbar.php';
        ?>
        <!-- end of navbar -->
        <div style="padding-top: 80px;"></div>
        <section id="collection" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/<?php echo $detail["foto_produk"]; ?>" alt="" class="img-responsive" width="50%">
                    </div>
                    <div class="col-md-6">
                        <h2><?php echo $detail["nama_produk"] ?></h2>
                        <h4>Rp. <?php echo number_format($detail["harga"]); ?></h4>
                        <p><?php echo $detail["deskripsi"]; ?></p>
                        <h6><?php echo $detail["status_produk"] ?></h6>

                        <!-- Button untuk mengarahkan ke WhatsApp -->
                        <a href="https://api.whatsapp.com/send?phone=6281255944032&text=Halo%2C%20saya%20tertarik%20dengan%20produk%20ini." class="btn btn-success">Hubungi via WhatsApp</a>
                    </div>
                </div>
            </div>
        </section>

    </body>

    </html>

<?php
} else {
    echo "Produk tidak ditemukan.";
}
?>