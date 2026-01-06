<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "db_perpus");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $nama    = $conn->real_escape_string($_POST['nama']);
    $alamat  = $conn->real_escape_string($_POST['alamat']);
    $nohp    = $conn->real_escape_string($_POST['nohp']);
    $metode  = $conn->real_escape_string($_POST['metode']);
    $keranjang = isset($_POST['cart_data']) ? json_decode($_POST['cart_data'], true) : [];

    if (!empty($keranjang)) {
        // Simpan ke tabel pesanan
        $conn->query("INSERT INTO pesanan (nama, alamat, nohp, metode) 
                      VALUES ('$nama', '$alamat', '$nohp', '$metode')");
        $id_pesanan = $conn->insert_id;

        // Simpan ke tabel detail_pesanan
        foreach ($keranjang as $item) {
            $produk = $conn->real_escape_string($item['name']);
            $harga  = intval($item['price']);
            $warna  = $conn->real_escape_string($item['color']);
            $ukuran = $conn->real_escape_string($item['size']);

            $conn->query("INSERT INTO detail_pesanan (id_pesanan, produk, harga, warna, ukuran)
                          VALUES ($id_pesanan, '$produk', $harga, '$warna', '$ukuran')");
        }

        // Tampilkan hasilnya ke layar
      echo "<h2>&#10004; Pesanan Anda Berhasil Disimpan</h2>";

        echo "<p><strong>Nama:</strong> $nama<br>";
        echo "<strong>Alamat:</strong> $alamat<br>";
        echo "<strong>No HP:</strong> $nohp<br>";
        echo "<strong>Metode Pembayaran:</strong> $metode</p>";

        echo "<h3>&#10004; Detail Pesanan:</h3>";
        echo "<table border='1' cellpadding='8' cellspacing='0'>";
        echo "<tr>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Warna</th>
                <th>Ukuran</th>
              </tr>";

        $total = 0;
        foreach ($keranjang as $item) {
            $harga = intval($item['price']);
            $total += $harga;
            echo "<tr>
                    <td>{$item['name']}</td>
                    <td>Rp " . number_format($harga, 0, ',', '.') . "</td>
                    <td>{$item['color']}</td>
                    <td>{$item['size']}</td>
                  </tr>";
        }

        echo "<tr>
                <td colspan='3' align='right'><strong>Total</strong></td>
                <td><strong>Rp " . number_format($total, 0, ',', '.') . "</strong></td>
              </tr>";
        echo "</table><br>";

        echo "<a href='produk.htm'>Kembali ke Halaman Produk</a>";
    } else {
        echo "<p>?? Tidak ada produk dalam keranjang.</p>";
    }
} else {
    echo "<p>? Akses tidak valid.</p>";
}

$conn->close();
?>
