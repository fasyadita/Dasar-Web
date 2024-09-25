<?php
// function perkenalan(){
//     echo "Assalamualaikum ";
//     echo "Perkenalkan, nama saya Fasya<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// //memanggil fungsi yang sudah dibuat 
// perkenalan();
// perkenalan();

// //membuat fungsi 
// function perkenalan($nama,$salam){
//     echo $salam.", ";
//     echo "Perkenalkan, Nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan anda<br/>";
// }

// //memnaggil fungsi yang dibuat 
// perkenalan("Fasya","Halo");

// echo"<hr>";

// $saya = "Elok";
// $ucapanSalam = "Selamat Pagi";

// //memanggil lagi
// perkenalan($saya,$ucapanSalam);

function perkenalan($nama, $salam = "Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, Nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

//memanggil fungsi yang sudah dibuat
perkenalan("Fasya","Halo");

echo"<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat Pagi";

//memanggil lagi tanpa mengisi parameter salam
perkenalan($saya);


?> 