<?php

class Account {
    private float $balance = 0;

    public function getBalance(): float {
        return $this->balance;
    }

    public function setBalance(float $amount): void {
    $this->balance = $amount;
}

        } else {
            throw new InvalidArgumentException("Saldo tidak boleh negatif");
        }
    }
}

$acc = new Account();
$acc->setBalance(-100);
echo $acc->getBalance();
