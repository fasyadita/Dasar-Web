<?php
    $username =  $_POST['username'];
    $password =  $_POST['password'];

    if ($username == "admin" && $password =="1234") {
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["status"] = 'login';
        echo "anda berhasil login, silahkan menuju <a href='homeSession.php'> Halaman Home</a>";
    } else {
        echo "gagal login, silahkan login lagi <a href ='sessionLoginForm.html'>Halaman Login</a>";
    }
?>