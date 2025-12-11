<?php
require_once "Book.php";
require_once "DVD.php";

$produk1 = new Book("Belajar PHP OOP", 85000, "Andi Pratama");
$produk2 = new DVD("Film Petualangan", 55000, 120);

echo $produk1->getInfo() . "<br>";
echo $produk2->getInfo() . "<br>";
