<?php
include "../db/koneksi.php";

// Ambil kategori dari URL
$kategori = isset($_GET['kategori']) ? $_GET['kategori'] : null;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$page = max($page, 1);
$limit = 6;
$offset = ($page - 1) * $limit;

$kategori = $conn->real_escape_string($kategori);

$countQuery = "
    SELECT COUNT(*) as total
    FROM berita b
    JOIN berita_kategori bk ON b.id = bk.berita_id
    JOIN kategori k ON bk.kategori_id = k.id
    WHERE k.nama_kategori = '$kategori'
";
$countResult = $conn->query($countQuery);
$totalRow = $countResult->fetch_assoc();
$totalPages = ceil($totalRow['total'] / $limit);

$query = "
    SELECT b.*, k.nama_kategori
    FROM berita b
    JOIN berita_kategori bk ON b.id = bk.berita_id
    JOIN kategori k ON bk.kategori_id = k.id
    WHERE k.nama_kategori = '$kategori'
    ORDER BY b.created_at DESC
    LIMIT $limit OFFSET $offset
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

    <main class="">
        <h1>Berita Kategori: <?= htmlspecialchars($kategori) ?></h1>

        <?php if ($result->num_rows > 0): ?>
            <div class="berita-grid">
                <?php while($row = $result->fetch_assoc()): ?>
                    <div class="berita-box">
                        <img src="../../images/<?= $row['image']; ?>" alt="<?= $row['judul']; ?>">
                        <h3><?= $row['judul']; ?></h3>
                        <p><?= substr($row['konten'], 0, 100); ?>...</p>
                        <small><?= date('d M Y', strtotime($row['created_at'])); ?> | <?= $row['nama_kategori']; ?></small>
                        <a href="detail.php?id=<?= $row['id']; ?>">Baca Selengkapnya</a>
                    </div>
                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <?php if ($page > 1): ?>
                    <a href="?kategori=<?= urlencode($kategori) ?>&page=<?= $page - 1 ?>">&laquo; Sebelumnya</a>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <a href="?kategori=<?= urlencode($kategori) ?>&page=<?= $i ?>" <?= $i === $page ? 'style="font-weight:bold;"' : '' ?>>
                        <?= $i ?>
                    </a>
                <?php endfor; ?>

                <?php if ($page < $totalPages): ?>
                    <a href="?kategori=<?= urlencode($kategori) ?>&page=<?= $page + 1 ?>">Selanjutnya &raquo;</a>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <p>Tidak ada berita dalam kategori ini.</p>
        <?php endif; ?>
    </main>

    <?php include "../components/footer.php"; ?>
</body>
</html>
