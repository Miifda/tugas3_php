<?php
// Menyimpan 5 nilai angka ke dalam array
$nilai = array(80, 75, 90, 85, 70);

// Menampilkan seluruh isi array
echo "Isi Array Nilai:<br>";
foreach ($nilai as $index => $n) {
    echo "Nilai ke-" . ($index + 1) . " = $n<br>";
}

// Menghitung total nilai
$total = array_sum($nilai);

// Menghitung rata-rata nilai
$rata_rata = $total / count($nilai);

// Menampilkan hasil perhitungan
echo "<br>Total Nilai = $total<br>";
echo "Rata-rata Nilai = $rata_rata";
?>
