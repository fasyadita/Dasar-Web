<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $errors = array();

    //validasi nama
    if (empty($nama)) {
        $errors[] = "nama harus diisi";
    }
    
    //validasi email
    if (empty($email)) {
        $errors[] = "email harus diisi";
    } else if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = "format email tidak VALID";
    }

    // jika ada kesalahan 
    if(empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // lanjutkan dengan pemrosesan data jika semua validasi berhasil
        // misalnya, menyimpan data ke databse atau mengirim email
        echo "Data berhasil dikirim : nama = $nama, email = $email";
    }
}
?>