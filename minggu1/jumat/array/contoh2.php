<?php
$array = array(
    [1,2,3,4],
    [5,6,7],
);

foreach ($array as $key => $value) {
    for($i=0; $i < count($value); $i++){
        echo $value[$i], "<br>";
    }
}