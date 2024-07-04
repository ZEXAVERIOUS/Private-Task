<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <b> Form Input Data Mahasiswa </b> 
   <form action="hasilambilnilai1.php" method="post">
<p>
    NIM : <input type="text" name="nim">
</p>
<p>
    Nama : <input type="text" name="nama">
</p>
<p>
    Jenis Kelamin :
    <input type="radio" name="jeniskel" value="Laki Laki">Laki Laki
    <input type="radio" name="jeniskel" value="Perempuan">Perempuan
</p>
<p>
    Tanggal Lahir : <input type="date" name="ttl">
</p>
<p>
    Jurusan :
    <select name="jurusan">
    <option value="-Pilih-">
    <option value="Sistem Informasi">Sistem Informasi
    <option value="Ilmu Komunikasi">Ilmu Komunikasi
    <option value="Ilmu Komputer">Ilmu Komputer
    <option value="Ilmu Hukum">Ilmu Hukum
</p>
</select>
<p>
    Tahun Masuk :
    <select name="thnmasuk">
    <option value="-Pilih-">
    <option value="2001">2001
    <option value="2002">2002
    <option value="2003">2003
    <option value="2004">2004
</select>
</p>
<p>
<input type="submit" name="Submit">
</p>
</form>
</body>
</html>