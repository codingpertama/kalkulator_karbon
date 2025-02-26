<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Bahan Bakar</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h1>Kalkulator Jejak Karbon Bahan Bakar</h1>
        <form method="POST" action="">
            <label for="jenis">Jenis Bahan Bakar:</label>
            <select id="jenis" name="jenis" required>
                <option value="bensin">Bensin</option>
                <option value="solar">Solar</option>
            </select>
            <label for="liter">Jumlah Liter:</label>
            <input type="number" id="liter" name="liter" required>
            <button type="submit" name="hitung" class="btn-kirim">Hitung</button>
        </form>

        <?php
        if (isset($_POST['hitung'])) {
            $jenis = $_POST['jenis'];
            $liter = $_POST['liter'];
            $emisi = ($jenis == 'bensin') ? $liter * 2.31 : $liter * 2.68; // Emisi CO2 per liter
            echo "<p>Jejak karbon Anda: <strong>" . number_format($emisi, 2) . " kg CO2</strong></p>";
        }
        ?>
        <a href="../index.php" class="btn btn-kembali">Kembali ke Beranda</a>
    </div>
</body>
</html>