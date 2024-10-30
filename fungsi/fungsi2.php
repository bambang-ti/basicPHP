<?php
$ar_buah = ['Pepaya', 'Mangga', 'Pisang', 'Jambu', 'Apel'];
sort($ar_buah);
foreach ($ar_buah as $buah){
  echo '<br/>'.$buah;
}

echo '<hr/>';
arsort($ar_buah);
foreach ($ar_buah as $buah){
  echo '<br/>'.$buah;
}
?>