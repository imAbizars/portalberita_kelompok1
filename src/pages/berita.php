<?php
include __DIR__ . '/../db/koneksi.php';

// Ambil kategori dari URL
$kategori = isset($_GET['kategori']) ? $_GET['kategori'] : null;

// Cegah SQL Injection
$kategori = $conn->real_escape_string($kategori);

// Ambil semua berita sesuai kategori
$query = "
    SELECT b.*, k.nama_kategori
    FROM berita b
    JOIN berita_kategori bk ON b.id = bk.berita_id
    JOIN kategori k ON bk.kategori_id = k.id
    WHERE k.nama_kategori = '$kategori'
    ORDER BY b.created_at DESC
";
$result = $conn->query($query);
$kategoriQuery = "
    SELECT nama_kategori 
    FROM kategori 
    WHERE nama_kategori = '$kategori' 
    LIMIT 1";
$kategoriResult = $conn->query($kategoriQuery);
$namaKategori = $kategoriResult && $kategoriResult->num_rows > 0
    ? $kategoriResult->fetch_assoc()['nama_kategori']
    : null;
?>
<div class="berita">
    <h1>Berita Kategori: <?= $namaKategori ? ucwords(strtolower($namaKategori)) : 'Tidak Diketahui'; ?></h1>
        <?php if ($result->num_rows > 0): ?>
            <div class="news-grid">
                <?php while($row = $result->fetch_assoc()): ?>
                    <div class="news-card">
                        <img src="../../../tugaskelompok/images/<?= $row['image']; ?>" alt="<?= $row['judul']; ?>">
                        <div class="news-card-content">
                            <h3><a href="index.php?page=detail&id=<?= $row['id']; ?>"><?= $row['judul']; ?></a></h3>
                            <p><?= substr($row['konten'], 0, 100); ?>...</p>
                            <small><?= date('d M Y', strtotime($row['created_at'])); ?> | <?= $row['nama_kategori']; ?></small>
                        </div>
                        <a class="read-more" href="index.php?page=detail&id=<?= $row['id']; ?>">Baca Selengkapnya</a>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else: ?>
            <p>Tidak ada berita dalam kategori ini.</p>
        <?php endif; ?>
</div>