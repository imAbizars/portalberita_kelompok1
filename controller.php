<?php
include 'koneksi.php';

// Ambil data dari form
$title       = $_POST['title'];
$content     = $_POST['content'];
$category_id = $_POST['category_id'];

// Proses upload gambar
$gambar_name = $_FILES['image']['name'];
$tmp_name    = $_FILES['image']['tmp_name'];
$folder      = "images/";

$upload_path = $folder . basename($gambar_name);
move_uploaded_file($tmp_name, $upload_path);

// Simpan ke database
$sql = "INSERT INTO berita (judul, konten, image, category_id, created_at)
        VALUES (?, ?, ?, ?, NOW())";

$stmt = $koneksi->prepare($sql);
$stmt->bind_param("sssi", $title, $content, $gambar_name, $category_id);

if ($stmt->execute()) {
    echo "Berita berhasil disimpan. <a href='index.php'>Lihat berita</a>";
} else {
    echo "Gagal menyimpan berita: " . $stmt->error;
}
?>
