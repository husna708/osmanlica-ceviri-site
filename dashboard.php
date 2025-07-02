<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kontrol Paneli</title>
</head>
<body>
    <h1>Hoşgeldin, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <p>Burada özel içerik gösterebilirsin.</p>
    <a href="logout.php">Çıkış Yap</a>
</body>
</html>
