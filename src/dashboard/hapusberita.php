<?php
include __DIR__ . '/../db/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);

    $result = $conn->query("SELECT image FROM berita WHERE id = $id");
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $imagePath = '../../../tugaskelompok/images/' . $row['image'];
        if (file_exists($imagePath)) {
            unlink($imagePath); 
        }
    }

    $conn->query("DELETE FROM berita WHERE id = $id");

    header("Location: ../../index.php?page=dashboard&dashboard_page=daftarberita");
    exit();
}
?>
