<?php
$ar_buah = ['Pepaya', 'Mangga', 'Pisang', 'Jambu'];
$ar_buah[2] = 'Jeruk'; //buah pisang ganti dengan jeruk
unset($ar_buah[3]); //hapus buah jambu
// tambah buah baru
$ar_buah[] = 'Naga';
$ar_buah[] = 'Apel';
$ar_buah[] = 'Sawo';

echo '---cetak key dari array---';
foreach ($ar_buah as $id => $buah){
  echo '<br/>key array buah: '.$id;
}
echo '<br/>---cetak value dari array---';
foreach ($ar_buah as $buah){
  echo '<br/>Buah: '.$buah;
}
echo '<br/>---cetak key dari array---';
foreach ($ar_buah as $id => $buah){
  echo '<br/>Buah dengan id: '.$id.' adalah buah '.$buah;
}
?>