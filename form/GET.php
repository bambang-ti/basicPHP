<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="coba9.php" method="GET">
    <label for="nama">Nama</label><br>
    <input type="text" name="nama"><br>
    <label for="alamat">Alamat</label><br>
    <textarea name="alamat" id="alamat"></textarea><br>
    <button type="submit" name="proses" value="Simpan">Simpan</button>
  </form>
  <br>
</body>
</html>
<?php
// memproses form
$nama = $_GET['nama'];
$almt = $_GET['alamat'];
// tampilkan data jika sudah diproses
$proses = $_GET['proses'];
if(isset($proses)){
  echo 'Nama :'.$nama.'<br/>Alamat :'.$almt;
}
?>