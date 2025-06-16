<?php
include '../db/koneksi.php';

if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan.";
    exit;
}

$id = intval($_GET['id']);

// Ambil data berita
$query = "SELECT b.*, GROUP_CONCAT(bk.kategori_id) AS kategori_ids 
          FROM berita b
          JOIN berita_kategori bk ON b.id = bk.berita_id
          WHERE b.id = $id
          GROUP BY b.id";
$result = $conn->query($query);

if ($result->num_rows === 0) {
    echo "Berita tidak ditemukan.";
    exit;
}

$berita = $result->fetch_assoc();
$selected_kategori = explode(',', $berita['kategori_ids']);
?>

<div class="form-container">
    <h4>Edit Berita</h4>
    <form action="updateberita.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $berita['id'] ?>">

        <label>Judul Berita:</label><br>
        <input type="text" name="title" value="<?= htmlspecialchars($berita['judul']) ?>" required><br><br>

        <label>Isi Berita:</label><br>
        <textarea name="content" id="editor" rows="10" cols="80" required><?= htmlspecialchars($berita['konten']) ?></textarea><br><br>

        <label>Kategori:</label><br>
        <?php
        $kategori_result = $conn->query("SELECT * FROM kategori");
        while ($row = $kategori_result->fetch_assoc()) {
            $id_kat = $row['id'];
            $nama = ucwords($row['nama_kategori']);
            $checked = in_array($id_kat, $selected_kategori) ? "checked" : "";
            echo "<label><input type='checkbox' name='category_ids[]' value='$id_kat' $checked> $nama</label><br>";
        }
        ?><br>

        <label>Gambar (kosongkan jika tidak ingin ganti):</label><br>
        <input type="file" name="image" accept="image/*"><br><br>
        <img src="../../images/<?= $berita['image'] ?>" width="120"><br><br>

        <input type="submit" value="Update Berita">
    </form>
</div>
