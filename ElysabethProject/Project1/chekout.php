<?php
$data = json_decode($_POST['cart_data'], true);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Checkout</title>
</head>
<body>
  <h2>Form Checkout</h2>

  <form action="simpan_checkout.php" method="post">
    <label>Nama Pembeli:</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Alamat Lengkap:</label><br>
    <textarea name="alamat" rows="3" required></textarea><br><br>

    <label>Nomor HP:</label><br>
    <input type="text" name="nohp" required><br><br>

    <label>Metode Pembayaran:</label><br>
    <select name="metode" required>
      <option value="Transfer Bank">Transfer Bank</option>
      <option value="COD">COD</option>
      <option value="E-Wallet">E-Wallet</option>
    </select><br><br>

    <input type="hidden" name="keranjang" value='<?= json_encode($data) ?>'>

    <button type="submit">Konfirmasi Pesanan</button>
  </form>
</body>
</html>
