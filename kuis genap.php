<!DOCTYPE html>
<html>
<head>
    <title>output genap</title>
</head>
<body>
    <h2>Tambah Data Ruang</h2>
    <form method="post" action="output genap.php">
        <label for="nama_gedung">Nama Gedung:</label>
        <select id="nama_gedung" name="nama_gedung">
            <option value="Gedung A">Gedung A</option>
            <option value="Gedung B">Gedung B</option>
            <option value="Gedung C">Gedung C</option>
        </select><br><br>
        
        <label for="nama_lantai">Nama Lantai:</label>
        <select id="nama_lantai" name="nama_lantai">
            <option value="Lantai 1">Lantai 1</option>
            <option value="Lantai 2">Lantai 2</option>
            <option value="Lantai 3">Lantai 3</option>
        </select><br><br>
        
        <label for="kode_ruang">Kode Ruang:</label>
        <input type="text" id="kode_ruang" name="kode_ruang" required><br><br>
        
        <label for="nama_ruang">Nama Ruang:</label>
        <input type="text" id="nama_ruang" name="nama_ruang" required><br><br>
        
        <label for="kapasitas_lajur">Kapasitas Lajur:</label>
        <input type="number" id="kapasitas_lajur" name="kapasitas_lajur" required><br><br>
        
        <label for="keterangan">Keterangan:</label><br>
        <textarea id="keterangan" name="keterangan"></textarea><br><br>
        
        <button type="button" onclick="window.close()">Tutup</button>
        <input type="submit" value="Simpan"> 
    </form>
</body>
</html>