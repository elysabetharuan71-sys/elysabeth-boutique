<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <style>
    body { font-family: Arial; margin: 0; font-size: 14px; }
    table { width: 100%; border-collapse: collapse; }
    th, td {
      padding: 10px;
      border: 1px solid #ccc;
      text-align: left;
    }
    th {
      background-color: #f7f7f7;
    }
  </style>
</head>
<body>
  <table>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Pesan</th>
      <th>Tanggal</th>
    </tr>
    <?php
    $no = 1;
    $result = mysqli_query($conn, "SELECT * FROM buku_tamu ORDER BY id DESC");
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>
              <td>{$no}</td>
              <td>{$row['nama']}</td>
              <td>{$row['email']}</td>
              <td>{$row['pesan']}</td>
              <td>{$row['tanggal']}</td>
            </tr>";
      $no++;
    }
    ?>
  </table>
</body>
</html>


</body>
</html>
