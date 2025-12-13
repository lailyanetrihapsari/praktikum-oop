<?php

class User {
    private string $hashedPassword;

    public function setPassword(string $password): void {
        $this->hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    }

    // EXPERIMEN (sementara, buat lihat hash)
    public function debugShowHash(): string {
        return $this->hashedPassword;
    }
}

$user = new User();
$user->setPassword("rahasia123");

// cuma buat eksperimen
echo $user->debugShowHash();
echo $user->hashedPassword;
echo $user->getPassword();

