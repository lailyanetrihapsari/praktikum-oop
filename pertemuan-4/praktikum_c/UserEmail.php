<?php
class User {
private string $email;
public function setEmail(string $email): void {

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
throw new InvalidArgumentException("Format email tidak valid");
}
$this->email = strtolower($email);
}
public function getEmail(): string {
return $this->email;
}
}
$user = new User();
$user->setEmail("USER@DOMAIN.COM");
echo $user->getEmail();