<?php
$sakitIzin = 0;
$alfa = 0;

$predikat = ($sakitIzin == 1) ? 100 - 3 : ($alfa == 1 ?  100 - 5: "hadir 100%"
);

echo $predikat;