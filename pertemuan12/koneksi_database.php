<?php
$dbhost1 ="localhost";
$dbuser1 ="root";
$dbpass1 ="";
$dbname1 ="dbberita12";

//koneksi ke mysql
$conn=mysqli_connect($dbhost1,$dbuser1,$dbpass1,$dbname1);
if(!$conn)
{
    echo"Tidak dapat terkoneksi ke database";
}
    echo"Koneksi sukses";
?>