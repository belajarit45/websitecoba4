<?php
// Connect to database
include 'php/db.php';
session_start();

if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = $_POST['date'];
    $category = $_POST['category'];
    $image = $_FILES['image'];

    // Save image
    $target_file = 'uploads/' . basename($image['name']);
    move_uploaded_file($image['tmp_name'], $target_file);

    // Save news
    $stmt = $pdo->prepare('INSERT INTO news (title, content, date, category, image) VALUES (:title, :content, :date, :category, :image)');
    $stmt->execute(['title' => $title, 'content' => $content, 'date' => $date, 'category' => $category, 'image' => $target_file]);

    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="dashboard.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Judul Berita" required>
        <textarea name="content" placeholder="Isi Berita" required></textarea>
        <input type="date" name="date" required>
        <input type="text" name="category" placeholder="Kategori" required>
        <input type="file" name="image" required>
        <button type="submit">Update Berita</button>
    </form>
</body>
</html>
