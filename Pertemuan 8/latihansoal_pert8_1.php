<?php

function hitung_umur($tanggal_lahir) {
    // Ambil tanggal hari ini
    $tanggal_hari_ini = new DateTime();
    
    // Ubah format tanggal lahir
    $tanggal_lahir = DateTime::createFromFormat('d/m/Y', $tanggal_lahir);
    
    // Hitung selisih tahun
    $umur = $tanggal_hari_ini->diff($tanggal_lahir)->y;
    
    return $umur;
}

// Meminta pengguna untuk memasukkan tanggal lahir
echo "Masukkan tanggal lahir Anda (DD/MM/YYYY): ";
$tanggal_lahir_str = trim(fgets(STDIN));

// Hitung umur
$umur = hitung_umur($tanggal_lahir_str);

// Tampilkan umur
echo "Umur Anda adalah: $umur tahun.\n";

?>
