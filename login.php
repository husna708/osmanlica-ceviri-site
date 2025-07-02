<?php
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Sabit kullanıcı adı ve parola (güvenlik için gerçek projede şifreleri hashlemelisin)
    $validUser = "admin";
    $validPass = "12345";

    if ($username === $validUser && $password === $validPass) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Kullanıcı adı veya şifre yanlış!";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş Yap</title>
</head>
<body>
    <h2>Kullanıcı Girişi</h2>
    <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="post" action="">
        <label for="username">Kullanıcı Adı:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Parola:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" name="submit" value="Giriş Yap">
    </form>
</body>
</html>
