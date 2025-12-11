<?php
require "Validator_Encapsulation.php";

$val = new Validator_Encapsulation();

// AKSES LANGSUNG PROTECTED → ERROR
$val->_inputType = $_GET;

