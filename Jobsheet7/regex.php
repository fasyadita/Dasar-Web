<?php
$pattern = '/[a-z]/'; //Cocokkan huruf kecil.
$text = 'This is a Sample Text.';

if(preg_match($pattern, $text)){
    echo "Huruf kecil ditemukan!!";
} else {
    echo "Tidak ada huruf kecil!!!";
}

$pattern = '/[0-9]+/'; //Cocokkan satu atau lebih digit.
$text = 'There are 123 apples.';

if(preg_match($pattern, $text, $matches)){
    echo "<br>Cocokkan      : " .$matches[0];
} else {
    echo "Tidak ada yang cocok!!";
}

$pattern = '/apple/';
$replacement = 'banana';
$text = 'i like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
    echo "<br>" .$new_text; // output i like banana pie;

$pattern = '/go*d/'; // cocokan "god", "good", "gooood" dll
$text = 'god is good';
if(preg_match($pattern, $text, $matches)){
    echo "<br>Cocokkan      : " .$matches[0];
} else {
    echo "Tidak ada yang cocok!!";
}

$pattern = '/[cab?]/'; // 
$text = 'abcabc abcab abcd';
if(preg_match($pattern, $text, $matches)){
    echo "<br>Cocokkan      : " .$matches[0];
} else {
    echo "Tidak ada yang cocok!!";
}


$pattern = '/[abc]{2,4}/'; // Mencari 2 sampai 4 karakter 'a', 'b', atau 'c' berurutan
$text = 'aaabccc abcdef';
if(preg_match($pattern, $text, $matches)){
    echo "<br>Cocokkan : " .$matches[0];
} else {
    echo "<br>Tidak ada yang cocok!!";
}
//value
?>