<?php
//buatlah sebuah fungsi yang akan menghasilkan sebuah array dari banyak data yang diterima.
//data yang dikriim berbentuk string nama-nama jurusan . jika nama jursan yang dipanggil duplikat, maka yang dimasukkan ke array hanya salah satu saja yang capslock)
//contoh pemanggilan argumentnya : namafunct("PPLG", "HTL" ,"KLN", "PMN","pplg"). maka akan menghasilkan array
//["PPLG", "HTL", "KLN","PMN"]

function createArray(...$jurusan) {
    $uniqueJurusan = array_unique(array_map('strtoupper', $jurusan));
    return $uniqueJurusan;
}

// $result = createArray("PPLG", "HTL", "KLN", "PMN", "pplg", "htl");
// echo implode(",", $result) ;
 print_r (createArray("PPLG", "HTL", "KLN", "PMN", "pplg", "htl"));
?>
