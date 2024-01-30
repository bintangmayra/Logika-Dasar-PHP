<?php

$hargaNasiGoreng = 15000;
$hargaAyamBakar = 20000;
$hargaNasiKebuli = 25000;


$jumlahNasiGoreng = 2;
$jumlahAyamBakar = 1;
$jumlahNasiKebuli = 2;

$totalHarga = ($jumlahNasiGoreng * $hargaNasiGoreng) + ($jumlahAyamBakar * $hargaAyamBakar) + ($jumlahNasiKebuli * $hargaNasiKebuli);
$hariIni = Date('D');


if ($hariIni == "Fri") {
    $diskon = 5;
} elseif ($hariIni == "Mon") {
    $diskon = 2;
} else {
    $diskon = 0;
}

$totalHargaDiskon = $totalHarga - ($diskon / 100 * $totalHarga);

echo "Total harga yang harus dibayar oleh Dani: " . $totalHargaDiskon;
?>
