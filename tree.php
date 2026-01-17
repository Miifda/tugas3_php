<?php
// Membuat class Node untuk Binary Tree
class TreeNode {
    public $data;
    public $left;
    public $right;

    public function __construct($data) {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}

// Membuat root dan child
$root = new TreeNode(10);
$root->left = new TreeNode(5);   // child kiri
$root->right = new TreeNode(15); // child kanan

// Menampilkan semua data (preorder traversal)
function tampilTree($node) {
    if ($node != null) {
        echo $node->data . "<br>";
        tampilTree($node->left);
        tampilTree($node->right);
    }
}

// Menampilkan isi Binary Tree
echo "Isi Binary Tree:<br>";
tampilTree($root);
?>
