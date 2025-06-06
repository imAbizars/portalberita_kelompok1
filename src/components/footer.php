<?php
include "../db/koneksi.php";

$query = "SELECT id,nama_kategori FROM kategori";
$resultkategori = $conn->query($query);
?>

<div class="footer">
    <div class="box-footer">
        <ul>
            <?php while($row = $resultkategori->fetch_assoc()): ?>
                <li>
                    <a href="berita.php?kategori=<?= urlencode($row['nama_kategori']) ?>">
                        <?= htmlspecialchars($row['nama_kategori']) ?>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
    <div class="copyright">
        &copy; 2025 by kelompok4
    </div>
</div>
