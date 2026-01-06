<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$query = "INSERT INTO buku_tamu (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
if (mysqli_query($conn, $query)) {
    echo "<script>
        alert('Data berhasil dikirim. Terima kasih!');
        window.location.href = 'bukutamu.htm';
    </script>";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>
