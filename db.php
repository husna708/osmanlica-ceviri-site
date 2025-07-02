<?php
$host = "localhost";      // Hosting firmasının verdiği MySQL sunucu adresi
$db   = "osmanlica_db";   // Oluşturduğun veritabanı adı
$user = "kullanici_adi";  // MySQL kullanıcı adı
$pass = "sifre";          // MySQL kullanıcı şifresi

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    // Hata ayıklama modu
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Bağlantı hatası: " . $e->getMessage());
}
?>
