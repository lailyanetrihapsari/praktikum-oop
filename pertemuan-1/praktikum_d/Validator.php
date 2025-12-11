<?php

class Validator {
    private array $errors = [];

    // Cek panjang teks: min dan max
    public function checkTextLength(string $field, string $value, int $min, int $max): void {
        if (strlen($value) < $min || strlen($value) > $max) {
            $this->errors[$field] = "$field harus antara $min sampai $max karakter.";
        }
    }

    // Validasi email sederhana
    public function checkEmail(string $field, string $value): void {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field] = "$field tidak valid.";
        }
    }

    // Mengecek apakah validasi gagal
    public function fails(): bool {
        return !empty($this->errors);
    }

    // Mengambil daftar error
    public function errors(): array {
        return $this->errors;
    }
}
