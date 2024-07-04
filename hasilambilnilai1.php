<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <title> Data Mahasiswa </title>
    <?php
    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $jeniskel=$_POST['jeniskel'];
    $ttl=$_POST['ttl'];
    $jurusan=$_POST['jurusan'];
    $thnmasuk=$_POST['thnmasuk'];
    ?>
    <table border=1>
    <tr>
    <td colspan=2 align="center"><b>Data Mahasiswa</b></td>
</td>
</tr>
<tr>
    <td>Nim</td><td><?php echo $nim; ?></td>`
</tr>
<tr>
    <td>Nama</td><td><?php echo $nama; ?></td>
</tr>
<tr>
    <td>Jenis Kelamin</td><td><?php echo $jeniskel; ?></td>
</tr>
<tr>
    <td>Tanggal Lahir</td><td><?php echo $ttl; ?></td>
</tr>
<tr>
    <td>Jurusan</td><td><?php echo $jurusan; ?></td>
</tr>
<tr>
    <td>Tahun Masuk</td><td><?php echo $thnmasuk; ?></td>
</tr></table>
<a href="ambilnilai1.php">
</body>
</html>