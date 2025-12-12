<?php
class Account {
    public string $owner;
    protected float $balance;
    private string $pin;

    public function __construct(string $owner, float $balance, string $pin) {
        $this->owner = $owner;
        $this->balance = $balance;
        $this->pin = $pin;
    }

    public function getBalance(string $pin): float {
        if ($pin === $this->pin) return $this->balance;
        throw new Exception("PIN salah");
    }
}

// Subclass PremiumAccount
class PremiumAccount extends Account {
    public function debugBalance(): float {
        // Bisa mengakses properti protected dari parent
        return $this->balance;
    }

    // Jika dicoba akses private akan error
    // public function debugPin(): string {
    //     return $this->pin;
    // }
}

// ==== Skrip Penguji ====
$acc = new Account("Rani", 5000, "1234");
echo "Owner: " . $acc->owner . PHP_EOL;              // public → berhasil
echo "Balance via method: " . $acc->getBalance("1234") . PHP_EOL; // public method → berhasil

// echo $acc->balance; // protected → error
// echo $acc->pin;     // private → error

$premium = new PremiumAccount("Rani", 10000, "5678");
echo "Premium Balance via subclass: " . $premium->debugBalance() . PHP_EOL; // protected bisa diakses
