<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "belajar_php_native";

//koneksi
$koneksi = mysqli_connect($servername, $username, $password, $database);

//cek koneksi
if (!$koneksi) {
    die("koneksi gagal".mysqli_connect_error());
}
else{
    echo "koneksi berhasil";
}
?>