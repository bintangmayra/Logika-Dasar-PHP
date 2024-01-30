<!-- jika hari ini adalah hari senin maka ahri ini upacara jika hari ini bukan hari senin
maka hari ini tidak upacra. (ambil hari ini secara otomatis) -->
<?php
$hari = Date('D');
echo ($hari == 'Mon') ? "Hari  $hari  harus upacara" : "Tidak ada upacara";
