<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include __DIR__ . '/../db/koneksi.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php?page=login");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_SESSION['user_id'];
    $beritaId = intval($_POST['berita_id']);
    $isi = trim($_POST['isi']);

    if ($isi !== '') {
        $stmt = $conn->prepare("INSERT INTO komentar (berita_id, user_id, isi) VALUES (?, ?, ?)");
        $stmt->bind_param("iis", $beritaId, $userId, $isi);
        $stmt->execute();
    }
}

header("Location: ../../index.php?page=detail&id=" . $beritaId);
exit;
