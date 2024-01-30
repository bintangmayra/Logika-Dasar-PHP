<!-- predikat terhadap hasil ujian diberikan ketika
-mendapatkan predikat A jika nilai lebih dari 99
-mendapatkan predikat b jika nilai lebih dari 75
-selain itu mendapatkan predikat c -->

<?php

$nilai1 = 20;

$predikat = $nilai1 > 99
? 'Predikat A' 
: ( $nilai1 >= 75 && $nilai1 <= 99 
    ? 'Predikat B' 
    : ( $nilai1 >= 60 && $nilai1 > 75
        ? 'Predikat C' 
        : 'Kurang'
       ) 
  );
echo $predikat; 
?>