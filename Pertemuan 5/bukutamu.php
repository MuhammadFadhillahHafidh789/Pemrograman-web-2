<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
</head>
<body>
    <h2>Buku Tamu</h2>
    <form method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="komentar">Komentar:</label><br>
        <textarea id="komentar" name="komentar" rows="4" required></textarea><br><br>

        <input type="submit" value="Simpan" name="submit">
    </form>

    <?php
    // Proses penyimpanan data
    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $komentar = $_POST['komentar'];

        // Buat teks untuk disimpan
        $data = "Nama: $nama\nEmail: $email\nKomentar: $komentar\n\n";

        // Simpan data ke dalam file bukutamu.dat
        file_put_contents('bukutamu.dat', $data, FILE_APPEND | LOCK_EX);

        echo "<p>Data berhasil disimpan!</p>";
    }
    ?>
</body>
</html>
