<?php
// deklarasi & inisialisasi
$nama = "Budi Santoso";
$totalBelanja = 150000;
$keterangan = "";
// struktur kendali if
if($totalBelanja > 100000){
  $keterangan = "Selamat $nama Anda dapat hadiah";
} else{
  $keterangan = "Terima kasih $nama sudah berbelanja";
}

echo "Nama pelanggan: ".$nama."\n";
echo "Total Belanja: Rp. ".number_format($totalBelanja,2,',','.')."\n";
echo "Keterangan: ".$keterangan;

