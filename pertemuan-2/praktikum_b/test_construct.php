<?php
require "UserConstruct.php";
$u = new UserConstruct("Rani", 20);
echo $u->name . " - " . $u->age;