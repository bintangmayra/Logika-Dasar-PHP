<?php
//buatlah sebuah fungsi yang akan menghitung lembar uang rupiah.
//contoh : 140500
//lembar rupiah:
//-Rp. 100.000: 1
//-Rp. 20.000 : 2
//- Rp. 500: 1
function rupiah($number){
    $uang = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500];

    foreach ($uang as $uangs) {
        $count = floor($number / $uangs);
        if ($count > 0) {
            $result["Rp. $uangs"] = $count;
            $number -= ($uangs * $count);
        }
    }

    echo " <br>Lembar Rupiahnya adalah:</br> " ;
    foreach ($result as $uangs => $count) {
        echo " <br>$uangs: $count lembar</br>" ;
    }
}

rupiah(40000);


