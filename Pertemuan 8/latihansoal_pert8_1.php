<!DOCTYPE html>
<html>
<head>
    <title>Menghitung Umur</title>
</head>
<body>
    <h2>Menghitung Umur</h2>
    <form method="post">
        Masukkan tahun lahir Anda: <input type="text" name="tahun_lahir">
        <input type="submit" name="submit" value="Hitung Umur">
    </form>
    <?php
    if(isset($_POST['submit'])){
        // Mengambil tahun lahir dari input
        $tahun_lahir = $_POST['tahun_lahir'];
        
        // Menggunakan fungsi tanggal untuk mendapatkan tahun sekarang
        $tahun_sekarang = date("Y");

        // Menghitung umur
        $umur = $tahun_sekarang - $tahun_lahir;

        // Menampilkan hasil
        echo "Umur Anda adalah $umur tahun.";
    }
    ?>
</body>
</html>