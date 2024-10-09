<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form dengan PHP</title>
</head>
<body>
    <h2>Form Contoh</h2>
    <form method = "POST" action="proses_lanjut.php">
        <label for="buah">Pilih buah    :</label>
        <select name="buah" id="buah">
            <option value="apel">apel</option>
            <option value="pisang">pisang</option>
            <option value="mangga">mangga</option>
            <option value="jeruk">jeruk</option>
        </select>

        <br>

        <label for="buah">Pilih warna favorit   :</label><br>
        <input type="checkbox" name="warna[]" value="merah"> Merah <br>
        <input type="checkbox" name="warna[]" value="biru"> Biru <br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau <br>

        <br>

        <label> Pilih Jenis Kelamin : </label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki Laki <br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan <br>
    
        <br>

        <input type="submit" value="Submit">
    </form>
    
</body>
</html>
