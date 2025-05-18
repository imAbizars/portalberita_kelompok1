<?php
include 'koneksi.php';

// Ambil data berita
$query = "SELECT b.judul, b.konten, k.nama_kategori, b.image, b.created_at 
          FROM berita b 
          JOIN kategori k ON b.category_id = k.id 
          ORDER BY b.created_at DESC";
$result = $conn->query($query); 
?>

<table>
    <thead>
    <tr style=" color:black;">
        <th>No</th>
        <th>Judul</th>
        <th>Kategori</th>
        <th>Isi</th>
        <th>Gambar</th>
        <th>Tanggal</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if ($result->num_rows > 0) {
        $no = 1;
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$no}</td>";
            echo "<td>{$row['judul']}</td>";
            echo "<td>{$row['nama_kategori']}</td>";
            echo "<td>" . substr(strip_tags($row['konten']), 0, 100) . "...</td>";
            echo "<td><img src='images/{$row['image']}' alt='Gambar' width='80'></td>";
            echo "<td>{$row['created_at']}</td>";
            echo "</tr>";
            $no++;
        }
    } else {
        echo "<tr><td colspan='6'>Tidak ada data berita.</td></tr>";
    }
    ?>
    </tbody>
</table>
