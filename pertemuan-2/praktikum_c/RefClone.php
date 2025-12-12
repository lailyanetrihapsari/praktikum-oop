<?php
class User {
    public string $name;
    public int $age;

}
$a = new User();
$a->name = "Budi";
$b = $a; // referensi ke object yang sama
$b->name = "Sinta";
echo $a->name . PHP_EOL; // berubah menjadi "Sinta"
$c = clone $a; // membuat object baru
$c->name = "Tono";
echo $a->name . PHP_EOL; // tetap "Sinta"
echo $c->name . PHP_EOL; // "Tono"