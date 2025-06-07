<?php
include "../db/koneksi.php";

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
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Berita Kategori: <?= htmlspecialchars($kategori) ?></title>
    <link rel="stylesheet" href="../main.css">
</head>
<body>
    <?php include "../components/navbar.php"; ?>

    <main>
        <div class="berita">
            <h1 class="page-title">Berita Kategori: <?= htmlspecialchars($kategori) ?></h1>
                <?php if ($result->num_rows > 0): ?>
                    <div class="news-grid">
                        <?php while($row = $result->fetch_assoc()): ?>
                            <div class="news-card">
                                <img src="../../images/<?= $row['image']; ?>" alt="<?= $row['judul']; ?>">
                                <div class="news-card-content">
                                    <h3><a href="detail.php?id=<?= $row['id']; ?>"><?= $row['judul']; ?></a></h3>
                                    <p><?= substr($row['konten'], 0, 100); ?>...</p>
                                    <small><?= date('d M Y', strtotime($row['created_at'])); ?> | <?= $row['nama_kategori']; ?></small>
                                </div>
                                <a class="read-more" href="detail.php?id=<?= $row['id']; ?>">Baca Selengkapnya</a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php else: ?>
                    <p>Tidak ada berita dalam kategori ini.</p>
                <?php endif; ?>
        </div>
    </main>
        <?php include "../components/footer.php"; ?>

</body>
</html>
