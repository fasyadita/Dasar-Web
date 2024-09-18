<?php
$a = 10;
$b = 5;

$hasilTambah = $a+$b ;
$hasilKurang = $a-$b ;
$hasilKali = $a*$b ;
$hasilBagi = $a/$b ;
$sisaBagi = $a%$b ;
$pangkat = $a**$b ;

echo "Hasil dari {$a} + {$b} = {$hasilTambah} <br>";
echo "Hasil dari {$a} - {$b} = {$hasilKurang} <br>";
echo "Hasil dari {$a} * {$b} = {$hasilKali} <br>";
echo "Hasil dari {$a} / {$b} = {$hasilBagi} <br>";
echo "Hasil dari {$a} % {$b} = {$sisaBagi} <br>";
echo "Hasil dari {$a} ** {$b} = {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br> Hasil dari {$a} == {$b} = {$hasilSama} <br>";
echo "Hasil dari {$a} != {$b} = {$hasilTidakSama} <br>";
echo "Hasil dari {$a} < {$b} = {$hasilLebihKecil} <br>";
echo "Hasil dari {$a} > {$b} = {$hasilLebihBesar} <br>";
echo "Hasil dari {$a} <= {$b} = {$hasilLebihKecilSama} <br>";
echo "Hasil dari {$a} >= {$b} = {$hasilLebihBesarSama}<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB =!$b;

echo "<br> Hasil dari {$a} && {$b} = {$hasilAnd} <br>";
echo "Hasil dari {$a} || {$b} = {$hasilOr} <br>";
echo "Hasil dari !{$a} = {$hasilNotA} <br>";
echo "Hasil dari !{$b} = {$hasilNotB} <br>";

$a += $b;
echo "<br>hasil {$a}<br>";
$a -= $b;
echo "hasil {$a}<br>";
$a *= $b;
echo "hasil {$a}<br>";
$a /= $b;
echo "hasil {$a}<br>";
$a %= $b;
echo "hasil {$a}<br>";

$hasilIdentik = $a == $b;
$hasilTidakIdentik = $a !== $b;
echo "<br>hasil Identik {$hasilIdentik}<br>";
echo "hasil tidak identik {$hasilTidakIdentik}<br>";

$kursi = 17 * 100/45;

echo "persen kursi yang tersedia adalah {$kursi}";


?>