<?php
include "../db/koneksi.php";
$queryfoods = "SELECT DISTINCT b.id, b.judul, b.image, b.created_at
               FROM berita b
               JOIN berita_kategori bk ON b.id = bk.berita_id
               JOIN kategori k ON bk.kategori_id = k.id
               WHERE k.nama_kategori = 'foods'
               ORDER BY b.created_at DESC";
$resultfoods = $conn->query($queryfoods);
?>

<div class="listfoods">
    <?php while($row = $resultfoods->fetch_assoc()): ?>
        <div class="listboxfoods">
            <img src="../../images/<?= htmlspecialchars($row['image']) ?>" alt="<?= htmlspecialchars($row['judul']) ?>">
            <h4><a href=""><?= $row['judul'];?></a></h4>
        </div>
    <?php endwhile; ?>
</div>
