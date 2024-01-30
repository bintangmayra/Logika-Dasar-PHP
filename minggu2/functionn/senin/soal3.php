<?php
//buatlah sebuah fungs yg akan membandingkan dua buah string nama>
//lalu menampilkan jumlah karakter dari dua nama tersebut, dan menampilkan nam yang memiliki jumlah karakter
//lebih banyak serta selisihnya
function pembandingNama($nama1, $nama2){
    $panjangNama1 = strlen(str_replace(' ', '', $nama1));
    $panjangNama2 = strlen(str_replace(' ', '', $nama2));

    echo "Jumlah karakter nama pertama ($nama1): $panjangNama1";
    echo "Jumlah karakter nama kedua ($nama2): $panjangNama2";

    $selisih = $panjangNama1 - $panjangNama2;
    $namaBanyakKarakter = ($selisih > 0) ? $nama1 : $nama2;

    echo "$namaBanyakKarakter memiliki jumlah karakter lebih banyak dengan selisih " . ($selisih) . " karakter.";
}

pembandingNama("Bintang Mayra Destianti", "Marsya Ananda ");
?>
