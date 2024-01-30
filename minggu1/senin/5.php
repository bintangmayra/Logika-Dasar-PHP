<?php
$angka1 = 10; 
$angka2 = 4;  

$hasil = $angka1 / $angka2;
if (is_float($hasil) || is_double($hasil)) {
    //digunakan untuk memeriksa apakah hasilnya merupakan angka desimal atau double.
    echo "$angka1 : $angka2 = $hasil dibulatkan menjadi  " . round($hasil);
    //Jika hasilnya berupa desimal atau double, kode akan menampilkan pesan yang 
    //mencakup hasil pembagian asli dan hasil yang dibulatkan menggunakan fungsi round.
} else {
    echo "$angka1 : $angka2 = $hasil";
}
?>
<?
//terdapat dua variabel yg menyimpan data angka
//$angka1 = 10;
//$angka2 = 3;
//apabla hasil perhitungn bagi antara angka1 dan angka2 merupakan desimal , maka hasil akan dibulatkan tertampil
//seperti berikut: 10:3 = 3,33333 jika dibulatkan menjadi 3
//apabila hasil perhhitungan bukan desimal:
// 10:5 = 2
