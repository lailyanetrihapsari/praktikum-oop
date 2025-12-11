<?php
require_once "Product.php";

class DVD extends Product {
    private $duration;

    public function __construct($title, $price, $duration) {
        parent::__construct($title, $price);
        $this->duration = $duration;
    }

    // Override method getInfo()
    public function getInfo() {
        return "DVD: {$this->title}, Durasi: {$this->duration} menit, Harga: Rp{$this->price}";
    }
}
