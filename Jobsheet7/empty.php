<?php
$myArray = array(); // array kosong
if (empty($myArray)){
    echo "array tidak terdefinisi atau kosong";
} else {
    echo " array terdefinisi atau tidak kosong";
}

if(empty($nonExistentVar)){
    echo "<br>Variabel tidak terdefinisi atau kosong.";
} else {
    echo "<br>Variabel terdefinisi dan tidak kosong";
}
?>