<?php
$input = $_POST['input'];
$input = htmlspecialchars($input, ENT_QUOTES,'UTF-8');

$email = $_POST['email'];
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    //lanjutkan dengan pengolahan email yang aman
} else {
    // tangani input yang tidak  valid
}
?>
