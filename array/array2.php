<?php
// array scalar
$b1 = ['kode'=>'a1', 'buah'=>'Apel', 'harga'=>25000];
$b2 = ['kode'=>'a2', 'buah'=>'Anggur', 'harga'=>45000];
$b3 = ['kode'=>'b1', 'buah'=>'Belimbing', 'harga'=>15000];
$b4 = ['kode'=>'b2', 'buah'=>'Bangkuang', 'harga'=>10000];
$b5 = ['kode'=>'c1', 'buah'=>'Cerry', 'harga'=>35000];

// array associative
$buah2an = [$b1, $b2, $b3, $b4, $b5];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Buah</th>
        <th>Harga</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach($buah2an as $b){
        $warna = $no % 2 == 1 ? 'khaki' : 'beige';
      ?>
      <tr bgcolor="<?= $warna; ?>">
        <td><?= $no; ?></td>
        <td><?= $b['kode']; ?></td>
        <td><?= $b['buah']; ?></td>
        <td><?= $b['harga']; ?></td>
      </tr>
      <?php $no++; 
      }
      ?>
    </tbody>
  </table>
</body>
</html>