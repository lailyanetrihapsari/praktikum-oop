<?php
class Product {
public function __construct(string $name){
echo "Produk $name dibuat\n";
}
}
$p = new Product("Laptop");