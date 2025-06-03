
<div class="form-container">
    <h4>Masukkan Berita Hari Ini</h4>
    <form action="controller.php" method="POST" enctype="multipart/form-data">
      <label>Judul Berita:</label><br>
      <input type="text" name="title" required><br><br>
    
      <label>Isi Berita:</label><br>
      <textarea name="content" id="editor" rows="10" cols="80" required></textarea><br><br>
    
      <label>Kategori:</label><br>
      <?php
        $result = $conn->query("SELECT * FROM kategori");
        while ($row = $result->fetch_assoc()) {
          $id = $row['id'];
          $nama = ucwords($row['nama_kategori']); // Kapital di depan
          echo "<label><input type='checkbox' name='category_ids[]' value='$id'> $nama</label><br>";
        }
      ?>
      <br>


    
      <label>Gambar:</label><br>
      <input type="file" name="image" accept="image/*" required><br><br>
    
      <input type="submit" value="Buat Berita">
    </form>
</div>
