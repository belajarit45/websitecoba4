<?php
// Connect to database
include 'php/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $whatsapp = $_POST['whatsapp'];

    if (!empty($username) && !empty($password) && !empty($whatsapp)) {
        if (is_numeric($whatsapp)) {
            $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username');
            $stmt->execute(['username' => $username]);
            if ($stmt->rowCount() === 0) {
                $stmt = $pdo->prepare('INSERT INTO users (username, password, whatsapp) VALUES (:username, :password, :whatsapp)');
                $stmt->execute(['username' => $username, 'password' => $password, 'whatsapp' => $whatsapp]);
                header('Location: login.php');
            } else {
                $error = 'Username sudah terdaftar!';
            }
        } else {
            $error = 'Nomor WhatsApp harus berupa angka!';
        }
    } else {
        $error = 'Semua kolom harus diisi!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="register.php" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="text" name="whatsapp" placeholder="Nomor WhatsApp">
        <button type="submit">Register</button>
        <?php if (isset($error)) echo "<p>$error</p>"; ?>
    </form>
    <a href="login.php">Sudah punya akun? Login</a>
</body>
</html>
