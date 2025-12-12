<?php
class Counter {
    public static int $count = 0;           // properti static untuk menghitung jumlah objek
    public const LABEL = "Jumlah objek";    // constant sebagai label

    public function __construct() {
        self::$count++;                     // naikkan counter setiap objek dibuat
    }

    // Method static untuk mereset counter
    public static function reset() {
        self::$count = 0;
    }
}

// ===== Buat objek untuk menaikkan counter =====
new Counter();
new Counter();
new Counter();

// ===== Cetak hasil =====
echo Counter::LABEL . ": " . Counter::$count . PHP_EOL; // Output: Jumlah objek: 3

// ===== Reset counter =====
Counter::reset();
echo Counter::LABEL . " setelah reset: " . Counter::$count . PHP_EOL; // Output: Jumlah objek setelah reset: 0
