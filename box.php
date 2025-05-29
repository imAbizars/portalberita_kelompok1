<?php
include 'koneksi.php';
include 'fetchberita.php';

$querykategori = "SELECT id, nama_kategori FROM kategori";
$resultkategori = $conn->query($querykategori);


?>
<div class="box-berita">
    <div class="kategoriberita">
        <button class="filter-btn" data-kategori="all">Semua</button>
        <?php while ($kategori = $resultkategori->fetch_assoc()): ?>
            <button class="filter-btn" data-kategori="<?= $kategori['nama_kategori']; ?>">
                <?= ucwords($kategori['nama_kategori']); ?>
            </button>
        <?php endwhile; ?>
    </div>

    <div class="berita-grid">
        <?php while($row = $result->fetch_assoc()): ?>
            <div class="berita-box" data-kategori="<?= $row['nama_kategori']; ?>">
                <img src="images/<?= $row['image']; ?>" alt="<?= $row['judul']; ?>">
                <h3><?= $row['judul']; ?></h3>
                
                <div class="berita-content"> <!-- GANTI INI -->
                    <p><?= substr($row['konten'], 0, 100); ?>...</p>
                    <small><?= date('d M Y', strtotime($row['created_at'])); ?> | <?= $row['nama_kategori']; ?></small>
                </div>
                
                <a href="detail.php?id=<?= $row['id']; ?>">Baca Selengkapnya</a>
            </div>
        <?php endwhile; ?>
    </div>

</div>
