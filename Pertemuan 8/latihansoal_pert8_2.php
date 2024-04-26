<?php

function cek_palindrom($string) {
    // Hilangkan spasi dan ubah menjadi huruf kecil
    $string = strtolower(str_replace(' ', '', $string));
    
    // Balikkan string
    $reverse_string = strrev($string);
    
    // Periksa apakah string asli dan balikannya sama
    if ($string == $reverse_string) {
        return true;
    } else {
        return false;
    }
}

// Meminta pengguna untuk memasukkan string
echo "Masukkan string: ";
$string = trim(fgets(STDIN));

// Memeriksa apakah string merupakan palindrom
if (cek_palindrom($string)) {
    echo "String '$string' merupakan palindrom.\n";
} else {
    echo "String '$string' bukan palindrom.\n";
}

?>
