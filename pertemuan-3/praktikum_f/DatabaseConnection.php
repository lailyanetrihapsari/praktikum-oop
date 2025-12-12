<?php
class DatabaseConnection {
private ?PDO $connection = null;
public function __construct(string $dsn, string $user, string $pass) {
echo "Membuka koneksi database...\n";
$this->connection = new PDO($dsn, $user, $pass);
}
public function query(string $sql) {
return $this->connection->query($sql);
}
public function __destruct() {
echo "Menutup koneksi database...\n";
$this->connection = null;
}
}
$db = new DatabaseConnection(
"mysql:host=localhost;dbname=test",
"root",
""
);