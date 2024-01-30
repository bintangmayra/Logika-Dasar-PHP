<?php
//buatlah sebuah fungsi yang akan mengubah sebuah number menjadi format "K" untuk ribuan dan "M" untuk jutaan> 
//Misal 9500 menjad 9,5k atau 1.700.000 menjadi 1,7 M

function formatNumber($number){
    if ($number >= 1000000) {
        $formatnumber = number_format($number / 1000000, 1) . " M";
    } elseif ($number >= 1000) {
        $formatnumber = number_format($number / 1000, 1) . " K";
    } else {
        $formatnumber = number_format($number);
    }

    echo $formatnumber;
}

formatNumber(9500);
echo "<br>";
formatNumber(1700000);