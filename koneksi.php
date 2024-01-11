<?php

$server = "localhost";
$username = "root";
$password = "1234";
$database_name = "db_sasirangan";

$db = mysqli_connect($server, $username, $password, $database_name);
if(!$db) {
    die("Tidak bisa Terhubung = " .mysqli_connect_error());}
?>