<?php

class Magic {
public function __call($name, $args) {
return "Method '$name' dipanggil dengan argumen: " . implode(", ", $args);
}
public function __toString(): string {
return "Ini adalah objek Magic";
}
}
$m = new Magic();

echo $m->hello("Rani", 25);
echo "\n";
echo $m;