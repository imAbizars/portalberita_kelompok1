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
        VALUES ('$title', '$content', '$gambar_name', $category_id, NOW())";

if ($conn->query($sql) === TRUE) {
    header("Location: dashboard.php?page=daftarberita");
    exit();
} else {
    echo "Gagal menambahkan berita: " . $conn->error;
}
?>
