<?php
//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam = "Assalamaualaikum"){
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
}

echo "Umur saya adalah ". hitungUmur(2004, 2024)." tahun";
echo "<br/>Senang berkenalan dengan anda<br/>";

echo "<br/>";
perkenalan("Fasya");
?>