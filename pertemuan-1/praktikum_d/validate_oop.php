<?php
require "Validator.php";

$val = new Validator();

$username = $_POST['username'] ?? '';    
$email    = $_POST['email'] ?? '';     

$val->checkTextLength('username', $username, 6, 12);
$val->checkEmail('email', $email);

if ($val->fails()) {
    print_r($val->errors());
} else {
    echo "Valid!";
}
