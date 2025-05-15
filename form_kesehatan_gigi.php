<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Formulir Pemeriksaan Kesehatan Gigi</title>
</head>
<body>
    <h2>Formulir Pemeriksaan Kesehatan Gigi</h2>
    <form method="get" action="get.php">
        <label for="nama">Nama Lengkap:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="usia">Usia:</label><br>
        <input type="number" id="usia" name="usia" min="1" required><br><br>

        <label>Jenis Kelamin:</label><br>
        <input type="radio" id="laki" name="gender" value="Laki-laki" required>
        <label for="laki">Laki-laki</label>
        <input type="radio" id="perempuan" name="gender" value="Perempuan">
        <label for="perempuan">Perempuan</label><br><br>

        <label for="keluhan">Keluhan Gigi:</label><br>
        <textarea id="keluhan" name="keluhan" rows="4" cols="50" required></textarea><br><br>

        <label for="riwayat">Pernah ke dokter gigi?</label><br>
        <select name="riwayat" id="riwayat">
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
        </select><br><br>

        <input type="submit" value="Kirim">
    </form>
</body>
</html>
