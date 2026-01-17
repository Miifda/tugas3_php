<?php
// Membuat Hash Table menggunakan associative array
$hashTable = array(
    "230101001" => "Ahmad Fauzi",
    "230101002" => "Muhammad Rizki",
    "230101003" => "Aisyah Putri"
);

// Menampilkan seluruh data
echo "Data Mahasantri:<br>";

foreach ($hashTable as $nim => $nama) {
    echo "NIM: " . $nim . " | Nama: " . $nama . "<br>";
}
?>
