<?php

// Rumah makan Bani mengadakan program diskon sebesar 5% tiap pembelian hari Selasa.
// Dan setiap pembelian di atas 100.000 mendapat diskon sebesar 7%.

// Data pembelian
$pembelian = 130000;
$hariIni = date("D");

//jwb
if ($hariIni == "Tue") {
    $diskon = 5;

    // Jika total pembelian di atas 100.000, tambahkan diskon tambahan 7%
    if ($pembelian > 100000) {
        $diskon += 7;
    }
} else {
    $diskon = 0;
}
$jumDiskon = ($diskon / 100) * $pembelian;
$totalBayar = $pembelian - $jumDiskon;
echo "Total Pembelian: Rp. " . number_format($pembelian, 0, ',', '.') ;
echo " Bani mendapatkan Diskon Rp. " . number_format($jumDiskon, 0, ',', '.') ;
echo "Total Yang Di Bayar Bani: Rp. " . number_format($totalBayar, 0, ',', '.') ;

?>
