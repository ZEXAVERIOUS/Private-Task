<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<b> Form Registrasi </b>
<form action= "Hasilregistrasi.php" method="post">
<br>
Isi Data Dibawah Ini :
</br>
<br>
Nama            : <input type="text" name="nama">
</br>
<br>
Alamat          : <textarea rows="5" columns="40" name="alamat"></textarea>
</br>
<br>
Tempat Lahir    : <input type="text" name="tempattl">
</br>
<br>
Tanggal Lahir   : <input type="date" name="ttl">
</br>
<br>
Jenis Kelamin   :
<input type="radio" name="jeniskel" value="Laki-laki">Laki-laki
<input type="radio" name="jeniskel" value="Perempuan">Perempuan
</br>
<br>
Pendidikan      :
<select name="pendidikan">
<option value="-Pilih-">
<option value="S1">S1
<option value="SMA">SMA
<option value="SMP">SMP
<option value="SD">SD
</select>
</br>
<br>
<input type="submit" name="Submit"> <input type="reset" value="Cancel">
</br>
</form>
</body>
</html>