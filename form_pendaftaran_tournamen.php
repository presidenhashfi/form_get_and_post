<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Formulir Pendaftaran Turnamen Free Fire</title>
</head>
<body>
    <h2>Formulir Pendaftaran Turnamen Free Fire</h2>
    <form method="post" action="post.php">
        <label for="nama_tim">Nama Tim:</label><br>
        <input type="text" id="nama_tim" name="nama_tim" required><br><br>

        <label for="ketua_tim">Nama Ketua Tim:</label><br>
        <input type="text" id="ketua_tim" name="ketua_tim" required><br><br>

        <label for="no_hp">Nomor HP (Ketua):</label><br>
        <input type="tel" id="no_hp" name="no_hp" pattern="[0-9]{10,13}" required><br><br>

        <label for="id_freefire">ID Free Fire Tim:</label><br>
        <input type="text" id="id_freefire" name="id_freefire" required><br><br>

        <label for="anggota">Nama Anggota Tim (maks. 4 orang):</label><br>
        <textarea id="anggota" name="anggota" rows="4" cols="50" placeholder="Pisahkan dengan koma, contoh: Angga, Budi, Citra, Dika" required></textarea><br><br>

        <input type="submit" value="Daftar Sekarang">
    </form>
</body>
</html>
