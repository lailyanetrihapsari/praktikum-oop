<?php
class Product {
    protected $title;
    protected $price;

    public function __construct($title, $price) {
        $this->title = $title;
        $this->price = $price;
    }

    public function getInfo() {
        return "Produk: {$this->title}, Harga: Rp{$this->price}";
    }
}
