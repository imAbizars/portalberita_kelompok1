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

// ammbil data berita 
$query = "SELECT  b.judul, b.konten, k.nama_kategori, b.image, b.created_at 
          FROM berita b 
          JOIN kategori k ON b.category_id = k.id 
          ORDER BY b.created_at DESC";
$result = $conn->query($query); 
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
        <div class="containerdaftar">
            <h2>Daftar Berita</h2>
            <table>
                <thead>
                <tr style="background-color:rgb(119, 99, 99);">
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Isi</th>
                    <th>Gambar</th>
                    <th>Tanggal</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if ($result->num_rows > 0) {
                    $no = 1;
                    while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$no}</td>";
                    echo "<td>{$row['judul']}</td>";
                    echo "<td>{$row['nama_kategori']}</td>";
                    echo "<td>" . substr(strip_tags($row['konten']), 0, 100) . "...</td>";
                    echo "<td><img src='images/{$row['image']}' alt='Gambar' width='80'></td>";
                    echo "<td>{$row['created_at']}</td>";
                    echo "</tr>";
                    $no++;
                    }
                } else {
                    echo "<tr><td colspan='6'>Tidak ada data berita.</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </main>
  </div>
</body>
</html>
