<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type ="text/css" href="style.css"/>
         <title></title>       
    </head>
    <body>
    <table>
            <tr>
                <th>Nama</th>
                <th>Domisili</th>
                <th>Jenis Kelamin</th>
            </tr>

        <?php
        $Dosen = [
            'nama'          => 'Elok Nur Hamdana',
            'domisili'      => 'Malang',
            'Jenis_kelamin' => 'Perempuan'];

            echo"<tr>";
            echo "<td>". $Dosen['nama'] ."</td>";
            echo "<td>". $Dosen['domisili'] ."</td>";
            echo "<td>". $Dosen['Jenis_kelamin'] ."</td>";

            echo"</tr>";
    
        ?>
        </table>
    </body>
</html>