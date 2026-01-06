<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Perpustakaan Sumut</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <!-- Header -->
    <div class="header">
      <img src="images/logo.jpg" alt="Logo">
      <h1>PERPUSTAKAAN DAERAH SUMATERA UTARA</h1>
    </div>

    <!-- Menu Atas (3 kolom) -->
    <div class="top-menu">
      <div class="box">
        <img src="images/anggota.png" alt="Anggota"><br>
        <strong>Anggota Perpustakaan</strong>
        <p>Untuk menjadi anggota baru anda harus mendaftar terlebih dahulu.</p>
      </div>
      <div class="box">
        <img src="images/profil.png" alt="Profil"><br>
        <strong>Profil</strong>
        <p>Silahkan anda melihat profil instansi kami.</p>
      </div>
      <div class="box">
        <img src="images/buku.png" alt="Buku Tamu"><br>
        <strong>Buku Tamu</strong>
        <p>Silahkan mengisi buku tamu sebagai tamu website kami.</p>
      </div>
    </div>

    <!-- Info Bar -->
    <div class="infobar">
      <p>August 31, 2008 | SELAMAT BERGABUNG DI WEBSITE KAMI!</p>
    </div>

    <!-- Konten Utama -->
    <div class="main-content">
      <!-- Sidebar Kiri -->
      <div class="sidebar">
        <h4>KATEGORI BUKU</h4>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Komik</a></li>
          <li><a href="#">Matematika</a></li>
          <li><a href="#">Sosial</a></li>
          <li><a href="#">Komputer</a></li>
          <li><a href="#">Cerita Anak</a></li>
          <li><a href="#">Fiksi</a></li>
          <li><a href="#">Agama Islam</a></li>
        </ul>
        <div class="search">
          <label>Judul Buku:</label>
          <input type="text" name="judul"><br>
          <button>Cari</button>
        </div>
      </div>

      <!-- Konten Tengah -->
      <div class="content">
        <p>Keranjang Buku | Nama Anggota:</p>
        <img src="images/perpustakaan.png" alt="Gedung Perpustakaan" width="200">
      </div>

      <!-- Sidebar Kanan (Login) -->
      <div class="login-box">
        <h4>LOGIN</h4>
        <form action="login.php" method="post">
          <label>Nama:</label><br>
          <input type="text" name="nama" required><br>
          <label>Password:</label><br>
          <input type="password" name="password" required><br><br>
          <input type="submit" value="OK"><br><br>
          <a href="daftar.php">Anggota Baru</a>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
