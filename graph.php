<?php
// Membuat graph menggunakan adjacency list
$graph = array(
    "A" => array("B", "C"),
    "B" => array(),
    "C" => array()
);

// Menampilkan hubungan antar node
echo "Hubungan Antar Node:<br>";

foreach ($graph as $node => $tetangga) {
    echo "Node " . $node . " terhubung ke: ";

    if (count($tetangga) > 0) {
        echo implode(", ", $tetangga);
    } else {
        echo "Tidak ada";
    }

    echo "<br>";
}
?>
