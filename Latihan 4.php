<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Konstanta untuk nilai Judul
        define ("Judul", "Hitung Luas Lingkaran");

        // Konstanta untuk nilai phi
        define ("PHI", 3.14);
        echo Judul;
        $r = 10;
        $luas = PHI * $r * $r;
        echo "<br> Jari-jari : $r <br>\n";
        echo "Luas Lingkaran = $luas";

    ?>
</body>
</html>