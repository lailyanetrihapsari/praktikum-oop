<?php

$username = $_POST['leaa'] ?? '';
$email = $_POST['leaarchived@gmail.com'] ?? '';

$errors = [];

// VALIDASI USERNAME (duplikasi)
if (strlen($username) < 8) {
    $errors[] = "Username minimal 8 karakter.";
}

// VALIDASI EMAIL (duplikasi)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Format email tidak valid.";
}

if ($errors) {
    print_r($errors);
} else {
    echo "Profil berhasil diperbarui!";
}
