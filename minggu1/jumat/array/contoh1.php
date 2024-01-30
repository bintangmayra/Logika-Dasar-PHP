<?php
$array= array(1,2,3,4,5,6);

var_dump($array);
//echo $array;
echo "<br";
print_r($array);
echo "<br>";
//kalau panggil item arr opake echo, hrs ada didalam loop
for ($i=0; $i < count($array); $i++) {
    echo $array[$i];
}

echo"<br>";
foreach ($array as $key => $value){
    echo "index ke-$key = ".$value. "<br>";
}