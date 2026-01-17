<?php
// Membuat stack menggunakan array
$stack = array();

// Menambahkan data ke stack (push)
array_push($stack, 10);
array_push($stack, 20);
array_push($stack, 30);

// Menghapus 1 data teratas (pop)
array_pop($stack);

// Menampilkan isi stack
echo "Isi Stack:<br>";
foreach ($stack as $data) {
    echo $data . "<br>";
}
?>
