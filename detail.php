<?php include 'koneksi.php';?>
<?php 
//mendapatkan id_produk dari url
$id_produk=$_GET["id"];

//query ambil data
$koneksi->query("SELECT*FROM daftar_produk WHERE id_produk=$id_produk");
$detail = $ambil->fetch_assoc();

echo "<pre>";
print_r($detail);
echo "</pre>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk</title>
    <link rel = "stylesheet" href = "bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>
<body>
    <!-- navbar -->
   <?php 
   include 'navbar.php';
   ?>
    <!-- end of navbar -->
    
    <section class="kontent">
        <div class="container">
            <div class="col-md-6">
                <img src="foto_produk/<?php echo $detail["foto_produk"];?>" alt=""
                class="img-responsive">
            </div>
            <div class="col-md-6">
                <h2><?php echo $detail["nama_produk"] ?></h2>
                <h4>Rp. <?php echo number_format($detail["harga"]); ?></h4>
                <p><?php echo $detail["deskripsi_produk"]; ?></p>
            </div>
        </div>
    </section>
</body>
</html>