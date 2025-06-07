<?php
$query = "SELECT DISTINCT b.id, b.judul, b.created_at
          FROM berita b
          JOIN berita_kategori bk ON b.id = bk.berita_id
          JOIN kategori k ON bk.kategori_id = k.id
          WHERE k.nama_kategori = 'news'
          ORDER BY b.created_at DESC";
$result = $conn->query($query);
?>
<div class="marquee">
        <div class="track">
            <span>
            <?php while($row = $result->fetch_assoc()): ?>
                <?= htmlspecialchars($row['judul']) ?> &nbsp;&nbsp;&bull;&nbsp;&nbsp;
            <?php endwhile; ?>
            </span>
        </div>
</div>