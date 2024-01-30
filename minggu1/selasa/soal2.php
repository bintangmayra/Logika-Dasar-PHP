<?php
$nilaiMatematika = 88;
$nilaiBahasaInggris = 85;
$nilaiBahasaIndonesia = 88;

$rataRata = ($nilaiMatematika + $nilaiBahasaInggris + $nilaiBahasaIndonesia) / 3;

$nilaiMinMatematika = 88;
$nilaiMinBahasaInggris = 85;
$nilaiMinBahasaIndonesia = 80;
$rataRataMin = 80;
//menetapkan nilai minimum dan rata rata
if ($nilaiMatematika >= $nilaiMinMatematika
    && $nilaiBahasaInggris >= $nilaiMinBahasaInggris
    && $nilaiBahasaIndonesia >= $nilaiMinBahasaIndonesia
    && $rataRata >= $rataRataMin) {
    $status = "<span style='color: green;'>Peserta diterima</span>";
} else {
    $status = "<span style='color: red;'>Peserta tidak diterima</span>";
}

echo "<div style='text-align: center; margin-top: 50px;'>";
echo "<h2>$status</h2>";
echo "<p>Nilai rata-rata: " . number_format($rataRata, 2) . "</p>";
echo "</div>";
?>
