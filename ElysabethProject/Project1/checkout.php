<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Checkout</title>
</head>
<body>
  <h2>Form Checkout</h2>

  <form action="simpan_checkout.php" method="post" onsubmit="return isiDataKeranjang()">
    <label>Nama Pembeli:</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Alamat Lengkap:</label><br>
    <textarea name="alamat" name="alamat" rows="3" required></textarea><br><br>

    <label>Nomor HP:</label><br>
    <input type="text" name="nohp" required><br><br>

    <label>Metode Pembayaran:</label><br>
    <select name="metode" required>
      <option value="Transfer Bank">Transfer Bank</option>
      <option value="COD">COD</option>
      <option value="E-Wallet">E-Wallet</option>
    </select><br><br>

    <!-- Hidden input untuk keranjang -->
    <input type="hidden" name="cart_data" id="cart_data">

    <button type="submit">Konfirmasi Pesanan</button>
  </form>

  <script>
    function isiDataKeranjang() {
      const cart = localStorage.getItem('cartData');
      if (!cart) {
        alert("Keranjang kosong. Silakan kembali dan tambahkan produk.");
        return false;
      }
      document.getElementById('cart_data').value = cart;
      return true;
    }
  </script>
</body>
</html>
