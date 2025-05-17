<?php
session_start();
include 'koneksi.php';

$timeout = 1800;
if (!isset($_SESSION['user'])) {
    header("Location: login.php?unauthorized=1");
    exit();
}

if (isset($_SESSION['last_login']) && (time() - $_SESSION['last_login']) > $timeout) {
    session_unset();
    session_destroy();
    header("Location: login.php?timeout=1");
    exit();
}

if ($_SESSION['role'] !== 'admin') {
    echo "Akses ditolak. Halaman ini hanya untuk admin.";
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Tambah Berita</title>
  <link rel="stylesheet" href="dashboard.css">
</head>
<body>
  <div class="dashboard-container">
    <nav class="sidebar">
      <h3>Admin Panel</h3>
      <ul>
        <li><a href="dashboard.php">Tambah Berita</a></li>
        <li><a href="daftarberita.php">Daftar Berita</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
    <main class="main-content">
      <div class="container">
        <h2>Tambah Berita</h2>
        <form action="controller.php" method="POST" enctype="multipart/form-data">
          <label>Judul Berita:</label><br>
          <input type="text" name="title" required><br><br>
  
          <label>Isi Berita:</label><br>
          <textarea name="content" rows="5" cols="50" required></textarea><br><br>
          
          <label>Kategori:</label><br>
          <select name="category_id" required>
            <option value="">-- Pilih Kategori --</option>
            <?php
              $result = $conn->query("SELECT * FROM kategori");
              while ($row = $result->fetch_assoc()) {
                echo "<option value='{$row['id']}'>{$row['nama_kategori']}</option>";
              }
            ?>
          </select><br><br>
  
          <label>Gambar:</label><br>
          <input type="file" name="image" accept="image/*" required><br><br>
  
          <input type="submit" value="Buat Berita">
        </form>
      </div>
    </main>
  </div>
</body>
</html>
