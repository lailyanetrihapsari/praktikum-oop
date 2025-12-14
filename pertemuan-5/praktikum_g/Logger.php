<?php

interface Logger {
    public function log(string $pesan): void;
}

interface Formatter {
    public function format(string $pesan): string;
}

class FileLogger implements Logger {
    public function log(string $pesan): void {
        echo "File: $pesan\n";
    }
}

class ConsoleLogger implements Logger, Formatter {
    public function log(string $pesan): void {
        echo $this->format($pesan) . "\n";
    }

    public function format(string $pesan): string {
        return "Console: $pesan";
    }
}

class DatabaseLogger implements Logger {
    public function log(string $pesan): void {
        echo "Database: $pesan\n";
    }
}

// TEST
$log1 = new ConsoleLogger();
$log1->log("Halo");

$log2 = new FileLogger();
$log2->log("Testing");

$log3 = new DatabaseLogger();
$log3->log("Simpan data");
