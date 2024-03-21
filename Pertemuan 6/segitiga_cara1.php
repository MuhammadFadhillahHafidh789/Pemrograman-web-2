<?php
// Mendefinisikan data alas dan tinggi dalam array secara langsung
$data_alas = array(10, 8, 12, 15, 7);
$data_tinggi = array(5, 6, 9, 10, 4);

// Fungsi untuk menghitung luas segitiga
function hitung_luas_segitiga($alas, $tinggi) {
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}

// Menggunakan data dari array untuk menghitung luas segitiga
for ($i = 0; $i < count($data_alas); $i++) {
    $luas = hitung_luas_segitiga($data_alas[$i], $data_tinggi[$i]);
    echo "Luas segitiga ke-" . ($i+1) . ": " . $luas . "<br>";
}
?>