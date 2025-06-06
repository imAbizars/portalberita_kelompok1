<?php session_start(); ?>
<nav>
    <h2>Portal Berita</h2>
    <ul>
      <li><a href="../pages/home.php">Beranda</a></li>
      <li><a href="../pages/tentangkami.php">Tentang Kami</a></li>
      <li><a href="faq.php">FAQ</a></li>
    </ul>

    <?php if (isset($_SESSION['user'])): ?>
        <span style="color:white;">Halo, <?= htmlspecialchars($_SESSION['user']) ?>!</span>
    <?php else: ?>
        <a class="register" href="../pages/login.php">Register</a>
        <a class="sign-in" href="../pages/login.php">Sign-In</a>
    <?php endif; ?>
</nav>
