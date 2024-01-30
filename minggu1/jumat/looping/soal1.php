<!-- tampilkan angka yang bisa dibagi 4 dan 5 pada rentang 1-50 -->
<?php

for ($i = 1; $i <= 50; $i++) {
   
    if ($i % 4 == 0 && $i % 5 == 0) {
        echo "$i dapat dibagi habis oleh 4 dan 5" . "<br>";
    }
}
?>
