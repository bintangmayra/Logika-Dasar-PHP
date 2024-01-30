<?php
$tahun_kelahiran = 2008;
$tahun_sekarang = date("Y"); // Mendapatkan tahun sekarang

$selisih_tahun = $tahun_sekarang - $tahun_kelahiran;

if ($selisih_tahun >= 17) {
    echo "Tahun kelahiran $tahun_kelahiran sudah dapat memiliki KTP. Usia sekarang = $selisih_tahun";
} else {
    echo "Tahun kelahiran $tahun_kelahiran belum dapat memiliki KTP";
}
?>
