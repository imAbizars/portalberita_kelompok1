<?php
include '../db/koneksi.php';

if (!isset($_GET['id'])) {
    echo "Berita tidak ditemukan.";
    exit;
}

$id = intval($_GET['id']); // pastikan aman dari SQL Injection

$query = "SELECT b.id, b.judul, b.konten, GROUP_CONCAT(k.nama_kategori SEPARATOR ', ') AS nama_kategori, b.image, b.created_at 
          FROM berita b
          JOIN berita_kategori bk ON b.id = bk.berita_id
          JOIN kategori k ON bk.kategori_id = k.id
          WHERE b.id = $id
          GROUP BY b.id
          LIMIT 1";

$result = $conn->query($query);

if ($result->num_rows == 0) {
    echo "Berita tidak ditemukan.";
    exit;
}

$berita = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<title><?= $berita['judul']; ?> - Detail Berita</title>
<link rel="stylesheet" href="../main.css">
</head>
<body >
    <?php include "../components/navbar.php";?>
    <div class="detail">
        <h1><?= $berita['judul']; ?></h1>
        <div class="meta">
            <?= date('d M Y', strtotime($berita['created_at'])); ?> | <?= $berita['nama_kategori']; ?>
        </div>
        <img src="../../images/<?= $berita['image']; ?>" alt="<?= $berita['judul']; ?>">
        <div class="konten">
            <?= $berita['konten']; ?>
        </div>
    
        <p><a href="index.php">← Kembali ke Berita</a></p>
    </div>

</body>
</html>
