<!DOCTYPE html>
<html>
<head>
    <title>Ubah Huruf</title>
</head>
<body>
    <h2>Ubah Huruf</h2>
    <form method="post">
        Masukkan teks: <input type="text" name="teks">
        <input type="submit" name="submit" value="Ubah">
    </form>
    <?php
    if(isset($_POST['submit'])){
        // Menerima input teks dari pengguna
        $teks = $_POST['teks'];

        // Mengubah teks menjadi huruf kecil
        $teks_kecil = strtolower($teks);

        // Mengubah teks menjadi huruf besar
        $teks_besar = strtoupper($teks);

        // Menampilkan hasil
        echo "<p>Teks asli: \"$teks\"</p>";
        echo "<p>Teks dalam huruf kecil: \"$teks_kecil\"</p>";
        echo "<p>Teks dalam huruf besar: \"$teks_besar\"</p>";
    }
    ?>
</body>
</html>
