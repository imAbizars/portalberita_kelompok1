<?php
session_start();
include "./src/db/koneksi.php";

$pagePaths = include './config/pages.php';
$page = $_GET['page'] ?? 'home';
$allowedPages = array_keys($pagePaths);
$noLayoutPages = ['login', 'register', 'dashboard','tambahberita','daftarberita','editberita'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if ($page === 'login'): ?>
    <link rel="stylesheet" href="src/login.css">
    <title>Login</title>
  <?php elseif ($page === 'register'): ?>
    <link rel="stylesheet" href="src/register.css">
    <title>Register</title>
  <?php elseif ($page === 'dashboard'): ?>
    <link rel="stylesheet" href="src/dashboard/dashboard.css">
    <title>Dashboard</title>
  <?php else: ?>
    <title>Portal Berita</title>
  <?php endif; ?>

  <link rel="stylesheet" href="./src/main.css">
  <link rel="icon" href="/tugaskelompok/assets/images/newspaper.png" type="image/png">
</head>
<body>

<?php if (!in_array($page, $noLayoutPages)): ?>
  <?php include "./src/components/navbar.php"; ?>
<?php endif; ?>

<main>
  <?php
  if (in_array($page, $allowedPages) && file_exists($pagePaths[$page])) {
      include $pagePaths[$page];
  } else {
      echo "<h2 style='text-align:center; margin-top:2rem;'>404 - Halaman Tidak Ditemukan</h2>";
  }
  ?>
</main>

<?php if (!in_array($page, $noLayoutPages)): ?>
  <?php include "./src/components/footer.php"; ?>
<?php endif; ?>

</body>
</html>
