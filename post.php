<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pendaftaran Turnamen</title>
</head>
<body>
    <h2>Data Pendaftaran Turnamen Free Fire</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p><strong>Nama Tim:</strong> " . htmlspecialchars($_POST['nama_tim']) . "</p>";
        echo "<p><strong>Nama Ketua Tim:</strong> " . htmlspecialchars($_POST['ketua_tim']) . "</p>";
        echo "<p><strong>Nomor HP:</strong> " . htmlspecialchars($_POST['no_hp']) . "</p>";
        echo "<p><strong>ID Free Fire:</strong> " . htmlspecialchars($_POST['id_freefire']) . "</p>";

        // Tampilkan anggota tim dalam bentuk list
        $anggota = explode(",", $_POST['anggota']);
        echo "<p><strong>Anggota Tim:</strong></p>";
        echo "<ul>";
        foreach ($anggota as $nama) {
            echo "<li>" . htmlspecialchars(trim($nama)) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Data belum dikirim. Silakan isi <a href='form_pendaftaran_tournamen.php'>formulir pendaftaran</a> terlebih dahulu.</p>";
    }
    ?>
</body>
</html>
