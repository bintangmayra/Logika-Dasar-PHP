<!-- buatlah urutan perkalian 1-10 2-10 3-10 -->

<?php
for ($i=1 ; $i <= 3; $i++) { 
    for ($a=1; $a <= 10; $a++) { 
        echo "$a x $i = " . $a * $i . "|";
    }
echo"<br>";
}