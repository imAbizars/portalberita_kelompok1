<?php
include '../db/koneksi.php';
include '../utils/fetchberita.php';

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
                <img src="../../images/<?= $row['image']; ?>" alt="<?= $row['judul']; ?>">
                <h3><?= $row['judul']; ?></h3>
                
                <div class="berita-content"> <!-- GANTI INI -->
                    <p><?= substr($row['konten'], 0, 100); ?>...</p>
                    <div class="berita-meta">
                        <small><?= date('d M Y', strtotime($row['created_at'])); ?> | <?= $row['nama_kategori']; ?></small>
                        <i class="fa-solid fa-thumbs-up">
                            <?php if ($row['like'] > 0) echo $row['like']; ?>
                        </i>
                        <i class="fa-solid fa-thumbs-down">
                            <?php if ($row['unlike'] > 0) echo $row['unlike']; ?>
                        </i>
                    </div>
                </div>
                
                <a href="detail.php?id=<?= $row['id']; ?>">Baca Selengkapnya</a>
            </div>
        <?php endwhile; ?>
    </div>

</div>
