<?php
//  waktu tidur yang baik untuk anak usia 6-12 adalah 10 jam. 
//untuk usia 12-18 adalah 8-9 jam. untuk usia 18-40 adalah 7-8 jam.
// apabila seseorang berusia 17 tahun berapa waktu tidur yang baik? 

       
$usia = 17;



if ($usia > 6 && $usia < 12 ) {
   echo "10 jam";
} elseif($usia > 12 && $usia < 18  ) {
   echo "8-9 jam";
} elseif ($usia > 18 && $usia < 40 ) {
   echo "7-8 jam";
} else {
   echo "Rentang usia tidak valid.";
}







?>