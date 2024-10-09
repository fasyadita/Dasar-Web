<!DOCTYPE html>
<html>
    <head>
        <title>Form Input PHP</title>
    </head>
    <body>
        <h2>Form Input PHP</h2>
        <form method="post" action="proses_form.php">
            <label for="nama">nama      : </label>
            <input type="text" name="nama" id="nama" required><br><br>

            <label for="email">email    :</label>
            <input type="email" name="email" id="email" required><br><br>

            <input type="submit"name ="submit" value="submit">
        </form>
        </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    echo "nama      : " .$nama. "<br>";
    echo "email     : " .$email;
}
?>