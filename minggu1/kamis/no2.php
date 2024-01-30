<?php
$beratBadan = 44 ;
$tinggiBadan = 148 ;


$imt = $tinggiBadan/(100) ^2;
$kategori = $beratBadan / ($tinggiBadan * 2);
 
if($imt < 18.5 ){
    echo"$imt berat badan kurang";
}elseif (18.5 < 22.9 ){
  echo"$imt berat badan normal";
}elseif(22.9 - 24.9){
    echo"$imt berat badanlebih";
}elseif($imt >= 25){
    echo"berat badan obesitas";
}else{
    echo"tidak valid";
}