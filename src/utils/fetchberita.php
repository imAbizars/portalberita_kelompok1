<?php
include "../db/koneksi.php";
$query = "SELECT b.id, b.judul, b.konten, GROUP_CONCAT(k.nama_kategori SEPARATOR ', ') as nama_kategori, b.image, b.created_at,b.like,b.unlike
          FROM berita b
          JOIN berita_kategori bk ON b.id = bk.berita_id
          JOIN kategori k ON bk.kategori_id = k.id
          GROUP BY b.id
          ORDER BY b.created_at DESC";
$result = $conn->query($query);
?>
