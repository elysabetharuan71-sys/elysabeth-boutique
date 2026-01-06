<?php
session_start();
include "koneksi.php";

$nama = $_POST['nama'];
$password = md5($_POST['password']); // md5 sama seperti yang disimpan di database

$query = "SELECT * FROM admin WHERE nama='$nama' AND password='$password'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['nama'] = $data['nama'];
    header("Location: dashboard.php");
} else {
    echo "<script>alert('Login gagal. Cek nama dan password!'); window.location.href='index.php';</script>";
}
?>
