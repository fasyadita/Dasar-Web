<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf A";
} else if ($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai huruf B";
} else if ($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai huruf C";
} else if ($nilaiNumerik< 70){
    echo "Nilai huruf D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "<br> Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer";

$jumlahLahan = 10;
$tanamanpPerLahan = 5;
$buahPerTaman= 10;
$jumlahBuah = 0;

for($i = 1; $i <= $jumlahLahan ; $i++){
    $jumlahBuah += ($tanamanpPerLahan *$buahPerTaman);
}

echo "<br>jumlah buah yang akan di panen adalah : $jumlahBuah";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach($skorUjian as $skor){
    $totalSkor +=$skor;
}

echo "<br>Total skor ujian adalah : $totalSkor";

$nilaiSiswa = [85, 92, 58, 64, 90, 55,88,79,70,96];
echo "<br>";

foreach($nilaiSiswa as $nilai){
    if ($nilai < 60) {
        echo "Nilai :  $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai : $nilai (lulus) <br>";
}


$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilai);
$nilaiSetelahDihapus = array_slice($nilai, 2, -2);
$totalNilai = array_sum($nilaiSetelahDihapus);

echo "Total nilai setelah mengabaikan 2 tertinggi dan 2 terendah adalah {$totalNilai} ";

$rataRata = $totalNilai / 6;

echo "<br>rata nilai {$rataRata} ";


$pembeli =120000;
echo "<br>pembeli membayar seharga 120000";

if ($pembeli >= 100000) {
    echo "<br>dapat diskon 20%";
    $diskon = 120000 * 20/100;
    $hargaAkhir = 120000 - $diskon;
    echo "<br>hanya membayar sebesar $hargaAkhir ";
} else if($pembeli < 100000){
    echo "<br>maaf belom mendapatkan diskon";
}

echo "<br>";
$skorPemain = 550;
$hadiahTambahan = ($skorPemain > 500) ? "YA" : "TIDAK";
echo "Total skor pemain adalah: {$skorPemain}<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? {$hadiahTambahan}<br>";

?>