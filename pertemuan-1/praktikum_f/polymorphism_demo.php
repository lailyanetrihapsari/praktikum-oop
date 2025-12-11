<?php
// Class Induk
class Vehicle {
    public function accelerate() {
        return "Kendaraan bergerak lebih cepat.";
    }
}
// Class Turunan 1
class Car extends Vehicle {
    public function accelerate() {
        return "Mobil menambah kecepatan dengan gas.";
    }
}

// Class Turunan 2
class Motorcycle extends Vehicle {
    public function accelerate() {
        return "Motor melaju lebih cepat dengan putaran gas.";
    }
}

// Demonstrasi Polymorphism
function testAccelerate(Vehicle $v) {
    echo $v->accelerate() . "<br>";
}

$car = new Car();
$motor = new Motorcycle();

testAccelerate($car);
testAccelerate($motor);

?>
