
<div class="form-container">
    <h4>Masukkan Berita Hari Ini</h4>
    <form action="controller.php" method="POST" enctype="multipart/form-data">
      <label>Judul Berita:</label><br>
      <input type="text" name="title" required><br><br>
    
      <label>Isi Berita:</label><br>
      <textarea name="content" rows="5" cols="50" required></textarea><br><br>
    
      <label>Kategori:</label><br>
      <select name="category_id" required>
        <option value="">-- Pilih Kategori --</option>
        <?php
          $result = $conn->query("SELECT * FROM kategori");
          while ($row = $result->fetch_assoc()) {
            echo "<option value='{$row['id']}'>{$row['nama_kategori']}</option>";
          }
        ?>
      </select><br><br>
    
      <label>Gambar:</label><br>
      <input type="file" name="image" accept="image/*" required><br><br>
    
      <input type="submit" value="Buat Berita">
    </form>
</div>
