<?php

class Demo {
    private array $data = [];

    public function __get($name) {
        echo "Membaca property $name\n";
        return $this->data[$name] ?? null;
    }

    public function __set($name, $value) {
        echo "Mengisi property $name dengan $value\n";
        $this->data[$name] = $value;
    }

    public function __call($name, $args) {
        echo "Method $name dipanggil dengan argumen: ";
        print_r($args);
    }
}

$obj = new Demo();

$obj->foo = 123;      // __set dipanggil
echo $obj->foo;       // __get dipanggil
echo PHP_EOL;

$obj->bar("tes");     // __call dipanggil

$obj->hello("satu", 2, true);
echo $obj->nama;

$obj->angka = 10;
$obj->teks = "halo";
$obj->array = [1, 2, 3];
