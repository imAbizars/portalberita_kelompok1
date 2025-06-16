<?php 
session_start();
include '../db/koneksi.php';

$kategoriQuery = $conn->query("SELECT nama_kategori FROM kategori");
$kategoriList = [];
while ($row = $kategoriQuery->fetch_assoc()){
    $kategoriList[]=$row['nama_kategori'];
}
?>
<nav>
    <h2>Portal Berita</h2>
    <ul>
        <li><a href="../pages/home.php">Beranda</a></li>
        <li class="dropdown">
            <a href="">Berita <span class="dropdown-icon">&#9662;</span></a>
            <ul class="dropdown-menu">
                <?php foreach ($kategoriList as $kategori): ?>
                    <li>
                        <a href="berita.php?kategori=<?= urlencode($kategori) ?>">
                            <?= htmlspecialchars($kategori) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>
        <li><a href="../pages/tentangkami.php">Tentang Kami</a></li>
        <li><a href="faq.php">FAQ</a></li>
    </ul>

    <?php if (isset($_SESSION['user'])): ?>
        <div class="user-dropdown">
            <span class="user-name">Halo, <?= htmlspecialchars($_SESSION['user']) ?> &#9662;</span>
            <div class="logout-menu">
                <a class="logout-nav" href="../utils/logout.php">Logout</a>
            </div>
        </div>
    <?php else: ?>
        <a class="register" href="../pages/register.php">Register</a>
        <a class="sign-in" href="../pages/login.php">Sign-In</a>
    <?php endif; ?>
</nav>
