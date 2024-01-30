<!-- tampilkan bilangan bilangan yang memungkinkan
 untuk bilangan 90 bisa dibagi habis dengan bilangan dari rentang 1-30 dengan looping

 -->

<?php
for ($i=1; $i < 30; $i++){
  if(90 % 1 ==0){
    echo "90 : $i =" . 90/ $i . "<br>";
  }
}