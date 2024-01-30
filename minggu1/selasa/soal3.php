<?php

$totalBelanjaAndi = 180000;


$potonganHarga = 10000;
$batasBelanja = 100000;
if ($totalBelanjaAndi > $batasBelanja) {
    $totalSetelahPotongan = $totalBelanjaAndi - $potonganHarga;
    echo "Andi berhak mendapatkan potongan harga sebesar $potonganHarga. Total yang harus dibayar: $totalSetelahPotongan";
} else {
    echo "Andi tidak mendapatkan potongan harga. Total yang harus dibayar: $totalBelanjaAndi";
}
?>
