<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator AC</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h1>Kalkulator Jejak Karbon AC</h1>
        <form method="POST" action="">
            <label for="jam">Jam Penggunaan per Hari:</label>
            <input type="number" id="jam" name="jam" required>
            <label for="daya">Daya AC (Watt):</label>
            <input type="number" id="daya" name="daya" required>
            <button type="submit" name="hitung" class="btn-kirim">Hitung</button>
        </form>

        <?php
        if (isset($_POST['hitung'])) {
            $jam = $_POST['jam'];
            $daya = $_POST['daya'];
            $kwh = ($jam * $daya) / 1000; // Konversi ke kWh
            $emisi = $kwh * 0.85; // Asumsi 0.85 kg CO2 per kWh
            echo "<p>Jejak karbon Anda: <strong>" . number_format($emisi, 2) . " kg CO2</strong></p>";
        }
        ?>
        <a href="../index.php" class="btn btn-kembali">Kembali ke Beranda</a>
    </div>
</body>
</html>