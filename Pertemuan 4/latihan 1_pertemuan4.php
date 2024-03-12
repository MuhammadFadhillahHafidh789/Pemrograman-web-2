<?php

function hitung_bilangan($nilai_awal, $nilai_akhir) {
    $count = 0;
    $total = 0;

    // Pastikan nilai_awal adalah bilangan ganjil
    if ($nilai_awal % 2 == 0) {
        $nilai_awal++;
    }

    for ($i = $nilai_awal; $i <= $nilai_akhir; $i += 2) {
        if ($i % 3 == 0) {
            echo $i . " ";
            $count++;
            $total += $i;
        }
    }

    return array($count, $total);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai_awal = isset($_POST["nilai_awal"]) ? $_POST["nilai_awal"] : 1;
    $nilai_akhir = isset($_POST["nilai_akhir"]) ? $_POST["nilai_akhir"] : 100;

    list($banyaknya_deret, $jumlah_deret) = hitung_bilangan($nilai_awal, $nilai_akhir);

    echo "<br>";
    echo "Banyaknya deret bilangan: " . $banyaknya_deret . "<br>";
    echo "Jumlah deret bilangan: " . $jumlah_deret . "<br>";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nilai Awal: <input type="number" name="nilai_awal"><br>
    Nilai Akhir: <input type="number" name="nilai_akhir"><br>
    <input type="submit" value="Submit">
</form>
