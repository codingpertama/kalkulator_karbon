<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Motor/Mobil</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h1>Kalkulator Jejak Karbon Motor/Mobil</h1>
        <form method="POST" action="">
            <label for="jarak">Jarak Tempuh (km):</label>
            <input type="number" id="jarak" name="jarak" required>
            <label for="kendaraan">Jenis Kendaraan:</label>
            <select id="kendaraan" name="kendaraan" required>
                <option value="motor">Motor</option>
                <option value="mobil">Mobil</option>
            </select>
            <button type="submit" name="hitung" class="btn-kirim">Hitung</button>
        </form>

        <?php
        if (isset($_POST['hitung'])) {
            $jarak = $_POST['jarak'];
            $kendaraan = $_POST['kendaraan'];
            $emisi = ($kendaraan == 'motor') ? $jarak * 0.1 : $jarak * 0.2; // Emisi CO2 per km
            echo "<p>Jejak karbon Anda: <strong>" . number_format($emisi, 2) . " kg CO2</strong></p>";
        }
        ?>
        <a href="../index.php" class="btn btn-kembali">Kembali ke Beranda</a>
    </div>
</body>
</html>