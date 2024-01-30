<!-- dani ingin membangun rumah dsuatu komplek perumahan dengan panjang tanah 13 mter dan lebar tanah 9 meter. tetapi sebelum membangun rumah, dani harus memberikan laporan terlebih dahulu tipe rumah yang ingin dia buat kepada kontrator bangunan. dengan luas tanah yang dia punya, masuk ke kategori manakah rumah dani nantinya.
- tipe 36: <90 m2
-tipe 45: 90-96 m2
-tipe 54: 96-120m2
-tipe 60: 120-150m2
-tipe 70: >150 m2 -->
<?php

$panjangTanah = 13;
$lebarTanah = 9;
$luasTanah = $panjangTanah * $lebarTanah;

if ($luasTanah < 90) {
    $tipeRumah = "Tipe Rumah: 36";
} elseif ($luasTanah >= 90 && $luasTanah <= 96) {
    $tipeRumah = "Tipe Rumah: 45";
} elseif ($luasTanah > 96 && $luasTanah <= 120) {
    $tipeRumah = "Tipe Rumah: 54";
} elseif ($luasTanah > 120 && $luasTanah <= 150) {
    $tipeRumah = "Tipe Rumah: 60";
} else {
    $tipeRumah = "Tipe Rumah: 70";
}

echo $tipeRumah;
?>
