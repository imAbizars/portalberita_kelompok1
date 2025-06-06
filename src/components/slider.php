<?php
include "../db/koneksi.php";


$query = "SELECT b.id, b.judul, b.konten, k.nama_kategori, b.image, b.created_at 
          FROM berita b
          JOIN berita_kategori bk ON b.id = bk.berita_id
          JOIN kategori k ON bk.kategori_id = k.id
          WHERE k.nama_kategori = 'hot'
          ORDER BY b.created_at DESC";
$result = $conn->query($query);
?>
<div class="slider-container">
  <div class="slider">
    <?php while($row = $result->fetch_assoc()): ?>
      <div class="slide">
        <div class="image-wrapper">
          <img src="../../images/<?=htmlspecialchars($row['image']) ?>" alt="<?= htmlspecialchars($row['judul']) ?>" draggable="false">
          <div class="caption"><?= htmlspecialchars($row['judul']) ?></div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
  <div class="dots" id="dots"></div>
</div>

