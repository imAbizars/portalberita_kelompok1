<?php
session_start();
header('Content-Type: application/json');

if (!isset($_POST['berita_id']) || !isset($_POST['action'])) {
    echo json_encode(['success' => false]);
    exit;
}

if (!isset($_SESSION['user'])) {
    echo json_encode(['success' => false, 'login_required' => true]);
    exit;
}

include __DIR__ . '/../db/koneksi.php';

$berita_id = intval($_POST['berita_id']);
$action = $_POST['action'];

if (!isset($_SESSION['liked_berita'])) $_SESSION['liked_berita'] = [];
if (!isset($_SESSION['unliked_berita'])) $_SESSION['unliked_berita'] = [];

$liked = false;
$unliked = false;

// Handle Like
if ($action === 'like') {
    if (in_array($berita_id, $_SESSION['liked_berita'])) {
        $conn->query("UPDATE berita SET `like` = `like` - 1 WHERE id = $berita_id AND `like` > 0");
        $_SESSION['liked_berita'] = array_filter($_SESSION['liked_berita'], fn($id) => $id != $berita_id);
        $liked = false;
    } else {
        $conn->query("UPDATE berita SET `like` = `like` + 1 WHERE id = $berita_id");
        $_SESSION['liked_berita'][] = $berita_id;
        $liked = true;

        // kalo sebelumnya sudah unlike, kurangi unlike
        if (in_array($berita_id, $_SESSION['unliked_berita'])) {
            $conn->query("UPDATE berita SET `unlike` = `unlike` - 1 WHERE id = $berita_id AND `unlike` > 0");
            $_SESSION['unliked_berita'] = array_filter($_SESSION['unliked_berita'], fn($id) => $id != $berita_id);
        }
    }

    
    $result = $conn->query("SELECT `like`, `unlike` FROM berita WHERE id = $berita_id");
    $row = $result->fetch_assoc();

    echo json_encode([
        'success' => true,
        'liked' => $liked,
        'new_like_count' => $row['like'],
        'new_unlike_count' => $row['unlike']
    ]);
    exit;
}

//Handle Unlike
if ($action === 'unlike') {
    if (in_array($berita_id, $_SESSION['unliked_berita'])) {
        $conn->query("UPDATE berita SET `unlike` = `unlike` - 1 WHERE id = $berita_id AND `unlike` > 0");
        $_SESSION['unliked_berita'] = array_filter($_SESSION['unliked_berita'], fn($id) => $id != $berita_id);
        $unliked = false;
    } else {
        $conn->query("UPDATE berita SET `unlike` = `unlike` + 1 WHERE id = $berita_id");
        $_SESSION['unliked_berita'][] = $berita_id;
        $unliked = true;

        if (in_array($berita_id, $_SESSION['liked_berita'])) {
            $conn->query("UPDATE berita SET `like` = `like` - 1 WHERE id = $berita_id AND `like` > 0");
            $_SESSION['liked_berita'] = array_filter($_SESSION['liked_berita'], fn($id) => $id != $berita_id);
        }
    }

    $result = $conn->query("SELECT `like`, `unlike` FROM berita WHERE id = $berita_id");
    $row = $result->fetch_assoc();

    echo json_encode([
        'success' => true,
        'liked' => $unliked, 
        'new_like_count' => $row['like'],
        'new_unlike_count' => $row['unlike']
    ]);
    exit;
}
