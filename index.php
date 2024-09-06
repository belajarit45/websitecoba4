<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kompas Clone</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="path/to/logo.png" alt="Logo">
        </div>
        <div class="search-bar">
            <input type="text" id="search" placeholder="Cari artikel...">
            <button id="search-btn">Cari</button>
        </div>
        <div class="user-icon">
            <img src="path/to/user-icon.png" alt="User" onclick="toggleUserMenu()">
            <div id="user-menu" class="hidden">
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
                <a href="#">Berikan Masukanmu</a>
            </div>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="#">Berita</a></li>
            <li><a href="#">Tren</a></li>
            <li><a href="#">Gaya Hidup</a></li>
            <li><a href="#">Kesehatan</a></li>
            <li><a href="#">Makanan</a></li>
            <li><a href="#">Edukasi</a></li>
        </ul>
    </nav>
    <aside>
        <div class="trending">
            <h2>Trending</h2>
            <ul id="trending-list">
                <!-- Trending keywords will be injected here by JavaScript -->
            </ul>
        </div>
        <div class="headline-slider">
            <img src="path/to/slider-image1.jpg" alt="Headline">
        </div>
    </aside>
    <main>
        <article>
            <img src="path/to/news-image.jpg" alt="News Image">
            <h1>Judul Berita</h1>
            <p>Isi berita...</p>
            <small>Tanggal upload: 2024-09-06</small>
        </article>
    </main>
    <footer>
        <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Ketentuan Penggunaan</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        <p>Copyright 2008 - 2024 PT. Kompas Cyber Media (Kompas Gramedia Digital Group). All Rights Reserved.</p>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>
