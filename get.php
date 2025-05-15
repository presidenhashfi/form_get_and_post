<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pemeriksaan</title>
</head>
<body>
    <h2>Hasil Data Pemeriksaan Kesehatan Gigi</h2>

    <?php
    if (isset($_GET['nama'])) {
        echo "<p><strong>Nama:</strong> " . htmlspecialchars($_GET['nama']) . "</p>";
        echo "<p><strong>Usia:</strong> " . htmlspecialchars($_GET['usia']) . "</p>";
        echo "<p><strong>Jenis Kelamin:</strong> " . htmlspecialchars($_GET['gender']) . "</p>";
        echo "<p><strong>Keluhan Gigi:</strong> " . nl2br(htmlspecialchars($_GET['keluhan'])) . "</p>";
        echo "<p><strong>Pernah ke dokter gigi:</strong> " . htmlspecialchars($_GET['riwayat']) . "</p>";
    } else {
        echo "<p>Data belum dikirim. Silakan isi <a href='form_kesehatan_gigi.php'>formulir</a> terlebih dahulu.</p>";
    }
    ?>
</body>
</html>
