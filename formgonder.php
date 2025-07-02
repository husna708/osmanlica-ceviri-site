<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen veriler
    $ad = htmlspecialchars($_POST['ad']);
    $email = htmlspecialchars($_POST['email']);
    $mesaj = htmlspecialchars($_POST['mesaj']);

    echo "<h2>Mesajınız Başarıyla Gönderildi!</h2>";
    echo "<p><strong>Ad Soyad:</strong> $ad</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Mesaj:</strong><br> $mesaj</p>";
} else {
    echo "Form gönderilmedi.";
}
?>
