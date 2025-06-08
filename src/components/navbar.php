<?php session_start(); ?>
<nav>
    <h2>Portal Berita</h2>
    <ul>
        <li><a href="../pages/home.php">Beranda</a></li>
        <li><a href="">Berita</a></li>
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
