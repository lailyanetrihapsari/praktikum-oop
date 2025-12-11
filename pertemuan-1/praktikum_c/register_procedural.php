<?php

$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';

$errors = [];

// VALIDASI USERNAME
if (strlen($username) < 8) {
    $errors[] = "Username minimal 8 karakter.";
}

// VALIDASI EMAIL
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Format email tidak valid.";
}

if ($errors) {
    print_r($errors);
} else {
    echo "Register berhasil!";
}
