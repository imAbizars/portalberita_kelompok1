<?php
if(session_status() === PHP_SESSION_NONE){
  session_start();
}
include __DIR__ . '/../db/koneksi.php';

$timeout = 3600;

// login dan role
if (!isset($_SESSION['user'])) {
    header("Location: index.php?page=login&unauthorized=1");
    exit();
}

if (isset($_SESSION['last_login']) && (time() - $_SESSION['last_login']) > $timeout) {
    session_unset();
    session_destroy();
    header("Location: index.php?page=login&timeout=1");
    exit();
}

if ($_SESSION['role'] !== 'admin') {
    echo "Akses ditolak. Halaman ini hanya untuk admin.";
    exit();
}

//  aktif
$page = $_GET['dashboard_page'] ?? 'tambahberita';

$allowed_pages = ['tambahberita', 'daftarberita','editberita'];
if (!in_array($page, $allowed_pages)) {
    $page = 'tambahberita';
}

// judul halaman 
$page_titles = [
    'tambahberita' => 'Tambah Berita',
    'daftarberita' => 'Daftar Berita',
    'editberita'=>'Edit Berita'
];

$judul_halaman = $page_titles[$page] ?? 'Dashboard';
?>

  <div class="dashboard-container">

    <!-- sidebar -->
    <?php include 'sidebar.php'; ?>

    <!-- main content -->
    <main class="main-content">
      <nav class="main-header">
        <h3><?= $judul_halaman ?></h3>
      </nav>
        <?php include $page . '.php'; ?>
    </main>
  </div>
  <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace('editor');
</script>
