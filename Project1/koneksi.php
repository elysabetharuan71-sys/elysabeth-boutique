<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_perpus"; // Ganti jika nama database kamu berbeda

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
