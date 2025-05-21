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

// Gunakan prepared statement
$stmt = $conn->prepare("INSERT INTO berita (judul, konten, image, category_id, created_at) VALUES (?, ?, ?, ?, NOW())");

if ($stmt) {
    $stmt->bind_param("sssi", $title, $content, $gambar_name, $category_id);

    if ($stmt->execute()) {
        header("Location: dashboard.php?page=daftarberita");
        exit();
    } else {
        echo "Gagal menambahkan berita: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Prepare failed: " . $conn->error;
}
?>
