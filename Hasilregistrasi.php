<!DOCTYPE html>
<html lang="en">
<head>
    <title> Data Registrasi </title>
</head>
<body>
<?php
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$tempattl=$_POST['tempattl'];
$ttl=$_POST['ttl'];
$jeniskel=$_POST['jeniskel'];
$pendidikan=$_POST['pendidikan'];
?>
<table border=1>
    <tr>
    <td colspan=2 align="center"><b>Data Registrasi</b></td>
</td>
</tr>
<tr>
    <td>Nama</td><td><?php echo $nama; ?></td>`
</tr>
<tr>
    <td>Alamat</td><td><?php echo $alamat; ?></td>
</tr>
<tr>
    <td>Tempat Lahir</td><td><?php echo $tempattl; ?></td>
</tr>
<tr>
    <td>Tanggal Lahir</td><td><?php echo $ttl; ?></td>
</tr>
<tr>
    <td>Jenis Kelamin</td><td><?php echo $jeniskel; ?></td>
</tr>
<tr>
    <td>Pendidikan</td><td><?php echo $pendidikan; ?></td>
</tr></table>
<a href="Formregistrasi.php">
</body>
</html>