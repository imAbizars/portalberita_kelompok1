<?php
include __DIR__ . '/../db/koneksi.php';

$query = "SELECT id, nama_kategori FROM kategori";
$resultkategori = $conn->query($query);

$kategoriChunks = [];
$temp = [];
$counter = 0;

while ($row = $resultkategori->fetch_assoc()) {
    $temp[] = $row;
    $counter++;
    if ($counter % 4 == 0) {
        $kategoriChunks[] = $temp;
        $temp = [];
    }
}
if (!empty($temp)) {
    $kategoriChunks[] = $temp;
}
?>

<div class="footer">
    <div class="box-footer">
        <ul class="footer-column">
            <li><a href="index.php">Beranda</a></li>
            <li><a href="index.php?page=tentangkami">Tentang Kami</a></li>
            <li><a href="index.php?page=faq">FAQ</a></li>
            <li><a href="../pages/kontak.php">Kontak</a></li>
        </ul>

        <?php foreach ($kategoriChunks as $chunk): ?>
            <ul class="footer-column">
                <?php foreach ($chunk as $kategori): ?>
                    <li>
                        <a href="index.php?page=berita&kategori=<?= urlencode($kategori['nama_kategori']) ?>">
                            <?= htmlspecialchars($kategori['nama_kategori']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>
    </div>

    <div class="copyright">
        &copy; 2025 by kelompok4
    </div>
</div>
