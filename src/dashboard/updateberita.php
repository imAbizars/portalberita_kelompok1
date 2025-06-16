<?php
include '../db/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);
    $title = $conn->real_escape_string($_POST['title']);
    $content = $conn->real_escape_string($_POST['content']);
    $category_ids = isset($_POST['category_ids']) ? $_POST['category_ids'] : [];

    // Ambil data berita lama (untuk nama file gambar)
    $old = $conn->query("SELECT image FROM berita WHERE id = $id")->fetch_assoc();
    $oldImage = $old['image'];

    // Cek apakah ada file gambar baru
    if (!empty($_FILES['image']['name'])) {
        $targetDir = "../../images/";
        $imageName = basename($_FILES["image"]["name"]);
        $imagePath = $targetDir . $imageName;

        // Pindahkan file baru
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath)) {
            // Hapus gambar lama jika perlu
            if (file_exists($targetDir . $oldImage)) {
                unlink($targetDir . $oldImage);
            }
            $finalImage = $imageName;
        } else {
            echo "Gagal upload gambar baru.";
            exit;
        }
    } else {
        // Jika tidak ada gambar baru, pakai gambar lama
        $finalImage = $oldImage;
    }

    // Update berita
    $stmt = $conn->prepare("UPDATE berita SET judul=?, konten=?, image=? WHERE id=?");
    $stmt->bind_param("sssi", $title, $content, $finalImage, $id);
    $stmt->execute();

    // Hapus kategori lama
    $conn->query("DELETE FROM berita_kategori WHERE berita_id = $id");

    // Masukkan kategori baru
    foreach ($category_ids as $cat_id) {
        $cat_id = intval($cat_id);
        $conn->query("INSERT INTO berita_kategori (berita_id, kategori_id) VALUES ($id, $cat_id)");
    }

    header("Location: dashboard.php?page=daftarberita");
    
    exit;
} else {
    echo "Akses tidak valid.";
    exit;
}
