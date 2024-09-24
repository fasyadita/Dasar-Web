<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <title></title>       
    </head>
    <body>
        <table>
        <?php
        $Dosen = [
            'nama'          => 'Elok Nur Hamdana',
            'domisili'      => 'Malang',
            'Jenis_kelamin' => 'Perempuan'];
    
        echo "Nama          : {$Dosen ['nama']}<br>";
        echo "Domisili      : {$Dosen ['domisili']}<br>";
        echo "Jenis Kelamin : {$Dosen ['Jenis_kelamin']}<br>";
        ?>
        </table>
    </body>
</html>