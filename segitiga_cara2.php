<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<?php
// Fungsi untuk menghitung luas segitiga
function hitung_luas_segitiga($alas, $tinggi) {
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}

// Input data alas dan tinggi dari form
$data_alas = array();
$data_tinggi = array();
for ($i = 0; $i < 5; $i++) {
    echo "Masukkan alas segitiga ke-" . ($i+1) . ": <input type='text' name='alas[]'><br>";
    echo "Masukkan tinggi segitiga ke-" . ($i+1) . ": <input type='text' name='tinggi[]'><br>";
}

// Menggunakan data dari input untuk menghitung luas segitiga
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data_alas = $_POST['alas'];
    $data_tinggi = $_POST['tinggi'];
    for ($i = 0; $i < count($data_alas); $i++) {
        $luas = hitung_luas_segitiga($data_alas[$i], $data_tinggi[$i]);
        echo "Luas segitiga ke-" . ($i+1) . ": " . $luas . "<br>";
    }
}
?>
<input type="submit" value="Hitung">
</form>
</body>
</html>
