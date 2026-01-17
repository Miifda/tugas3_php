<?php
// Membuat class Node
class Node {
    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

// Membuat 3 node
$node1 = new Node(10);
$node2 = new Node(20);
$node3 = new Node(30);

// Menghubungkan node (Single Linked List)
$node1->next = $node2;
$node2->next = $node3;

// Menampilkan seluruh isi linked list
echo "Isi Single Linked List:<br>";

$current = $node1;
while ($current != null) {
    echo $current->data . "<br>";
    $current = $current->next;
}
?>
