<?php
include '../db/koneksi.php';
$title        = $_POST['title'];
$content      = $_POST['content'];
$category_ids = $_POST['category_ids']; // array kategori
$gambar_name  = $_FILES['image']['name'];
$tmp_name     = $_FILES['image']['tmp_name'];
$folder       = "../../images/";
$upload_path  = $folder . basename($gambar_name);

move_uploaded_file($tmp_name, $upload_path);

// Insert ke berita
$stmt = $conn->prepare("INSERT INTO berita (judul, konten, image, created_at) VALUES (?, ?, ?, NOW())");

if ($stmt) {
    $stmt->bind_param("sss", $title, $content, $gambar_name);

    if ($stmt->execute()) {
        $berita_id = $stmt->insert_id;

        // Insert ke berita_kategori
        $stmt_kat = $conn->prepare("INSERT INTO berita_kategori (berita_id, kategori_id) VALUES (?, ?)");
        foreach ($category_ids as $cat_id) {
            $stmt_kat->bind_param("ii", $berita_id, $cat_id);
            $stmt_kat->execute();
        }

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
