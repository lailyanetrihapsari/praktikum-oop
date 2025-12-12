<?php
// Contoh anonymous class sederhana
$logger = new class {
    public function log(string $message) {
        echo "[LOG] $message\n";
    }
};

$logger->log("Sistem berjalan");

// Contoh anonymous class dengan property
$infoLogger = new class("INFO") {
    public function __construct(public string $level) {}

    public function log(string $msg) {
        echo "[$this->level] $msg\n";
    }
};

$infoLogger->log("Sistem berjalan");
