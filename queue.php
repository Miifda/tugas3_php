<?php
// Membuat queue menggunakan array
$queue = array();

// Menambahkan data ke queue (enqueue)
array_push($queue, "A");
array_push($queue, "B");
array_push($queue, "C");

// Menghapus 1 data paling depan (dequeue)
array_shift($queue);

// Menampilkan isi queue
echo "Isi Queue:<br>";
foreach ($queue as $data) {
    echo $data . "<br>";
}
?>
