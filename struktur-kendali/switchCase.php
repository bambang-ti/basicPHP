<?php
// deklarasi & inisialisasi variabel
$nama = "Budi Santoso";
$nilai = 75;
// if multi kondisi
if($nilai >= 85 && $nilai <= 100) $grade = "A";
else if($nilai >= 75 && $nilai < 85) $grade = "B";
else if($nilai >= 60 && $nilai < 75) $grade = "C";
else if($nilai >= 30 && $nilai < 60) $grade = "D";
else if($nilai >= 0 && $nilai < 30) $grade = "E";
else $grade = "";
// predikat dengan switch case
switch ($grade){
  case 'A' : $predikat = 'Memuaskan'; break;
  case 'B' : $predikat = 'Bagus'; break;
  case 'C' : $predikat = 'Cukup'; break;
  case 'D' : $predikat = 'Kurang'; break;
  case 'E' : $predikat = 'Buruk'; break;
  default: $predikat = '';
}
echo "Nama Siswa: $nama <br/>";
echo "Nilai: Rp. $nilai"."<br/>";
echo "Grade Nilai: $grade"."<br/>";
echo "Predikat: $predikat";
?>