<?php
function hitung ($a1, $a2, $tombol){
  if($tombol == '+') $hasil = $a1 + $a2;
  else if($tombol == '-') $hasil = $a1 - $a2;
  else if($tombol == '*') $hasil = $a1 * $a2;
  else if($tombol == '/') $hasil = $a1 / $a2;
  else $hasil = 0;
  return $hasil;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Kalkulatorku</h1>
  <form action="#" method="post"></form>
  <div class="inputan">
    <label for="a1">
      angka 1&sbnp;: <input type "text" id="a1" name="a1" /> <label><br> 
    </label>
    <label for="a2">
      angka 2&sbnp;: <input type "text" id="a2" name="a2" /> <label><br> 
    </label>
  </div>
</body>
</html>