<?php
// membuat fungsi define by user - return
function tambah($a, $b){
  $c = $a + $b;
  return $c;
}

// memanggil fungsi return
$x = 10;
$y = 20;
echo "Hasil $x + $y = ".tambah($x, $y)."<br/>";
echo 'Hasil 50 + 30 = '.tambah(50, 30);
?>