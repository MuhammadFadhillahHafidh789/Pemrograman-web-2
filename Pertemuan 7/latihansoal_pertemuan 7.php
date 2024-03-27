<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Materi Pemrograman PHP</title>
</head>
<body>

<?php

function menu() {
    echo "<form method='post'>";
    echo "<h1>Materi Pemrograman PHP</h1>";
    echo "<label><input type='radio' name='pilihan' value='1'> Penggunaan IF</label><br>";
    echo "<label><input type='radio' name='pilihan' value='2'> Penggunaan SWITCH..CASE</label><br>";
    echo "<label><input type='radio' name='pilihan' value='3'> Penggunaan Looping</label><br>";
    echo "<label><input type='radio' name='pilihan' value='4'> Penggunaan Array</label><br>";
    echo "<input type='submit' name='submit' value='Kirim'>";
    echo "</form>";
}

function penggunaanIF() {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        // Implementasi penggunaan IF
        // Menentukan nilai akhir dan grade berdasarkan nilai ujian
        $nilai = 75; // contoh nilai ujian
        if ($nilai >= 80) {
            echo "Nilai: $nilai, Grade: A";
        } elseif ($nilai >= 70) {
            echo "Nilai: $nilai, Grade: B";
        } elseif ($nilai >= 60) {
            echo "Nilai: $nilai, Grade: C";
        } elseif ($nilai >= 50) {
            echo "Nilai: $nilai, Grade: D";
        } else {
            echo "Nilai: $nilai, Grade: E";
        }
    }
}

function penggunaanSWITCH() {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        // Implementasi penggunaan SWITCH..CASE
        // Membuat kalkulator sederhana
        $operand1 = 10;
        $operand2 = 5;
        $operator = '+'; // contoh operator

        switch ($operator) {
            case '+':
                echo "Hasil penjumlahan: " . ($operand1 + $operand2);
                break;
            case '-':
                echo "Hasil pengurangan: " . ($operand1 - $operand2);
                break;
            case '*':
                echo "Hasil perkalian: " . ($operand1 * $operand2);
                break;
            case '/':
                if ($operand2 != 0) {
                    echo "Hasil pembagian: " . ($operand1 / $operand2);
                } else {
                    echo "Tidak bisa membagi dengan nol";
                }
                break;
            default:
                echo "Operator tidak valid";
                break;
        }
    }
}

function penggunaanLooping() {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        // Implementasi penggunaan Looping
        // Menampilkan bilangan genap yang habis dibagi 3 dan menghitung jumlahnya
        $jumlah = 0;
        echo "Bilangan genap yang habis dibagi 3: ";
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 2 == 0 && $i % 3 == 0) {
                echo "$i ";
                $jumlah++;
            }
        }
        echo "<br>Jumlah bilangan genap yang habis dibagi 3: $jumlah";
    }
}

function penggunaanArray() {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        // Implementasi penggunaan Array
        // Melakukan perkalian matriks
        $matrix1 = array(array(1, 2), array(3, 4));
        $matrix2 = array(array(5, 6), array(7, 8));

        echo "Hasil perkalian matriks:<br>";
        for ($i = 0; $i < count($matrix1); $i++) {
            for ($j = 0; $j < count($matrix2[0]); $j++) {
                $result[$i][$j] = 0;
                for ($k = 0; $k < count($matrix1[0]); $k++) {
                    $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
                }
                echo $result[$i][$j] . " ";
            }
            echo "<br>";
        }
    }
}

menu();

// Panggil fungsi sesuai dengan pilihan
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['pilihan'])) {
    switch ($_POST['pilihan']) {
        case '1':
            penggunaanIF();
            break;
        case '2':
            penggunaanSWITCH();
            break;
        case '3':
            penggunaanLooping();
            break;
        case '4':
            penggunaanArray();
            break;
        default:
            echo "Pilihan tidak valid";
            break;
    }
}

?>

</body>
</html>
