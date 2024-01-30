<?php
// bautlah sebuh function yamg akan menampilkan hari tanggal dengan format (senin, 22 januari 2024) hari menggunakan bhaasa indonesia, argumen di ambil dari variable berikut

$date = date('D, d M Y'); 

function formatIDN(){
  
    switch(date('D')){
		case 'Sun':
			$formatIDN = "Minggu";
		break;
 
		case 'Mon':			
			$formatIDN = "Senin";
		break;
 
		case 'Tue':
			$formatIDN = "Selasa";
		break;
 
		case 'Wed':
			$formatIDN = "Rabu";
		break;
 
		case 'Thu':
			$formatIDN = "Kamis";
		break;
 
		case 'Fri':
			$formatIDN = "Jumat";
		break;
 
		case 'Sat':
			$formatIDN = "Sabtu";
		break;
		
		default:
			$formatIDN = "Tidak di ketahui";		
		break;
	}
 
	return $formatIDN;
 
}

echo $date;
echo " vs ";
echo  formatIDN(date('D')). " ".date('d M Y');