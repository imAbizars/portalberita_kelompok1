<?php
include 'koneksi.php';

$query = "SELECT b.id, b.judul, b.konten, k.nama_kategori, b.image, b.created_at 
          FROM berita b 
          JOIN kategori k ON b.category_id = k.id 
          ORDER BY b.created_at DESC";
$result = $conn->query($query); 
?>
<div class="table-container">
  <table>
      <thead>
      <tr style=" color:black;">
          <th>No</th>
          <th>Judul</th>
          <th>Kategori</th>
          <th>Isi</th>
          <th>Gambar</th>
          <th>Tanggal</th>
          <th>Aksi</th>
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
              echo "<td>
                <form action='hapusberita.php' method='POST' onsubmit=\"return confirm('Yakin ingin menghapus berita ini?');\">
                  <input type='hidden' name='id' value='{$row['id']}'>
                  <button type='submit' style='background-color:red;color:white;border:none;padding:6px 10px;border-radius:4px;'>Hapus</button>
                </form>
              </td>";
              echo "</tr>";
              $no++;
          }
      } else {
          echo "<tr><td colspan='6'>Tidak ada data berita.</td></tr>";
      }
      ?>
      </tbody>
  </table>
</div>
