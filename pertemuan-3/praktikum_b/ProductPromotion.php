<?php
class Product {

    public string $name;
    public int $price;

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }
}

$p = new Product("Laptop", 15000);
echo $p->name . " - " . $p->price;
