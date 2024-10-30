<?php
// deklarasi & inisialisasi
$nama = "Budi Santoso";
$nilai = 75;
// ternary
$keterangan = ($nilai >= 60) ? "Lulus" : "Gagal";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  Nama Siswa: <?= $nama ?> <br>
  Nilai: <?= $nilai ?> <br>
  Keterangan: <?= $keterangan ?>
</body>
</html>