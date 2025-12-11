<?php
require "Validator.php";

$val = new Validator();

// langsung set data manual (gampang)
$username = "abc";      // SALAH → kurang dari 6 karakter
$email    = "tes@";     // SALAH

$val->checkTextLength('username', $username, 6, 12);
$val->checkEmail('email', $email);

if ($val->fails()) {
    print_r($val->errors());
} else {
    echo "Valid!";
}
