<?php
require_once "Product.php";

class Book extends Product {
    private $author;

    public function __construct($title, $price, $author) {
        parent::__construct($title, $price);
        $this->author = $author;
    }

    // Override method getInfo()
    public function getInfo() {
        return "Buku: {$this->title}, Penulis: {$this->author}, Harga: Rp{$this->price}";
    }
}
