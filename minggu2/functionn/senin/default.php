<?php
function biodata($nama, $jurusan = "PPLG") {
    echo "Hallo, $nama! Anda diterima di jurusan $jurusan\n";
}

biodata("putri");
biodata("TJKT", "putra");
biodata(11, "putra", "DKV"); 
?>
