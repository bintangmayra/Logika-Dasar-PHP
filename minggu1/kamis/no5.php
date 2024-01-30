<!-- ubah pukul 19.00 menjadi pukul 07.00 pm --> 
 <!-- dan ubah pukul 23.45 menjadi pukul 11.45pm, pukul 08.55 menjadi 08.55am -->
 <?php

$waktu1 = 19.00 ;
//$waktu2 = "2345" ;
//$waktu3 = "0855" ;

echo ($waktu1 > 12) ? "menjadi". $waktu1 = $waktu1 - 12.00 . "pm"
:
"mengubah waktu mnejadi" . $waktu1 . "am";
