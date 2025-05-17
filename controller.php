<?php
include 'koneksi.php';


$title       = $_POST['title'];
$content     = $_POST['content'];
$category_id = $_POST['category_id'];

$gambar_name = $_FILES['image']['name'];
$tmp_name    = $_FILES['image']['tmp_name'];
$folder      = "images/";

$upload_path = $folder . basename($gambar_name);
move_uploaded_file($tmp_name, $upload_path);

$sql = "INSERT INTO berita (judul, konten, image, category_id, created_at)
        VALUES (?, ?, ?, ?, NOW())";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssi", $title, $content, $gambar_name, $category_id);

if ($stmt->execute()) {
    echo "Berita berhasil disimpan. <a href='index.php'>Lihat berita</a>";
} else {
    echo "Gagal menyimpan berita: " . $stmt->error;
}
?>
