<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include __DIR__ . '/../db/koneksi.php';


$kategoriQuery = $conn->query("SELECT nama_kategori FROM kategori");
$kategoriList = [];
while ($row = $kategoriQuery->fetch_assoc()){
    $kategoriList[]=$row['nama_kategori'];
}
?>
<nav>
    <h2>Portal Berita</h2>
    <ul>
        <li><a href="index.php">Beranda</a></li>
        <li class="dropdown">
            <a href="">Berita <span class="dropdown-icon">&#9662;</span></a>
            <ul class="dropdown-menu">
                <?php foreach ($kategoriList as $kategori): ?>
                    <li>
                        <a href="index.php?page=berita&kategori=<?= urlencode($kategori) ?>">
                            <?= htmlspecialchars($kategori) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>
        <li><a href="index.php?page=tentangkami">Tentang Kami</a></li>
        <li><a href="index.php?page=faq">FAQ</a></li>
    </ul>

    <?php if (isset($_SESSION['user'])): ?>
        <div class="user-dropdown">
            <span class="user-name">Halo, <?= htmlspecialchars($_SESSION['user']) ?> &#9662;</span>
            <div class="logout-menu">
                <a class="logout-nav" href="src/utils/logout.php">Logout</a>
            </div>
        </div>
    <?php else: ?>
        <a class="register" href="index.php?page=register">Register</a>
        <a class="sign-in" href="index.php?page=login">Sign-In</a>
    <?php endif; ?>
</nav>
