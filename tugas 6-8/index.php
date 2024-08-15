<?php
// Membuat koneksi ke database (bisa disesuaikan dengan kebutuhan)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jwd_db";
// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);
// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
// Membuat prosedur untuk menghitung diskon
function hitungDiskon($totalBelanja)
{
    $diskon = 0;
    if ($totalBelanja >= 100000) {
        $diskon = 0.1 * $totalBelanja; // Diskon 10% untuk total belanja di atas

    } elseif ($totalBelanja >= 50000) {
        $diskon = 0.05 * $totalBelanja; // Diskon 5% untuk total belanja di atas

    }
    return $diskon;
}
// Memanggil prosedur untuk menghitung diskon
$totalBelanja = 120000; // Misalnya total belanja Rp. 120.000
$diskon = hitungDiskon($totalBelanja);
echo "Total belanja: Rp. " . $totalBelanja . "<br>";
echo "Diskon: Rp. " . $diskon . "<br>";
echo "Total yang harus dibayar: Rp. " . ($totalBelanja - $diskon) . "<br>";
// Menutup koneksi
$conn->close();
