<<<<<<< HEAD
<?php 
$db = mysqli_connect("localhost","root","",'db_sasirangan', 3307);
=======

<?php 
$db = mysqli_connect("localhost","root@localhost","",'db_sasirangan', 3307);
>>>>>>> c4de2037e7b589c25d6f8d1cb9199c480720bb0a
if(!$db) {
    die("Tidak bisa Terhubung = " .mysqli_connect_error());}
?>