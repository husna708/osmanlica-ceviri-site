<?php
require 'db.php'; // veritabanı bağlantını içeren dosya

$username = "admin";
$password = "12345";

$hash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->execute([$username, $hash]);

echo "Kullanıcı eklendi: $username";
?>
