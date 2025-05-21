<?php
include "koneksi.php";

$query = "SELECT b.id, b.judul
          FROM berita b 
          JOIN kategori k ON b.category_id = k.id 
          WHERE k.nama_kategori = 'news'
          ORDER BY b.created_at DESC";
$result = $conn->query($query)
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
    <script>
        window.addEventListener('DOMContentLoaded', () => {
        let slider = document.querySelector('.slider');
        let slides = document.querySelectorAll('.slide');
        let index = 0;

        setInterval(() => {
            index = (index + 1) % slides.length;
            slider.style.transform = `translateX(-${index * 100}%)`;
        }, 3000);
    });
</script>

<body>
    <?php include "navbar.php";?>
  <main>
  <div class="marquee">
        <div class="track">
            <span>
            <?php while($row = $result->fetch_assoc()): ?>
                <?= htmlspecialchars($row['judul']) ?> &nbsp;&nbsp;&bull;&nbsp;&nbsp;
            <?php endwhile; ?>
            </span>
        </div>
    </div>
    <div class="container">
         <div class="left-content">
            <!-- slider -->
            <?php include "slider.php";?>
            <div class="content">
                <h1>Selamat Datang Di Portal Berita</h1>
            </div>
         </div>
         <div class="list-berita">

         </div>       
    </div>  
  </main>
</body>


</html>