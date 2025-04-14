<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kasir_aura";
$koneksi = mysqli_connect("localhost", "root", "", "kasir_aura");

// Check connection
if (mysqli_connect_error()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>