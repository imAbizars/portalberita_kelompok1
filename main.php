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
<!-- ini script untuk slider -->
    <script>
        window.addEventListener('DOMContentLoaded', () => {
        let slider = document.querySelector('.slider');
        let slides = document.querySelectorAll('.slide');
        const dotsContainer = document.getElementById('dots');
         let currentIndex = 0;

        slides.forEach((_, index) => {
            const dot = document.createElement('span');
            dot.classList.add('dot');
            if (index === 0) dot.classList.add('active');
            dot.addEventListener('click', () => goToSlide(index));
            dotsContainer.appendChild(dot);
        });

        const dots = document.querySelectorAll('.dot');

        function goToSlide(index) {
            currentIndex = index;
            slider.style.transform = `translateX(-${index * 100}%)`;
            updateDots();
        }

        function updateDots() {
            dots.forEach(dot => dot.classList.remove('active'));
            dots[currentIndex].classList.add('active');
        }

        setInterval(() => {
            currentIndex = (currentIndex + 1) % slides.length;
            goToSlide(currentIndex);
        }, 4000);
        let isDown = false;
        let startX;
        let scrollLeft;

        slider.addEventListener('mousedown', (e) => {
            isDown = true;
            startX = e.pageX;
            slider.style.transition = 'none';
        });

        slider.addEventListener('mouseleave', () => {
            isDown = false;
        });

        slider.addEventListener('mouseup', (e) => {
            if (!isDown) return;
            isDown = false;

            const deltaX = e.pageX - startX;
            if (deltaX > 50 && currentIndex > 0) {
                currentIndex--;
            } else if (deltaX < -50 && currentIndex < slides.length - 1) {
                currentIndex++;
            }
            slider.style.transition = 'transform 0.5s ease';
            goToSlide(currentIndex);
        });

        slider.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            const x = e.pageX;
            const walk = x - startX;
            slider.style.transform = `translateX(-${currentIndex * 100 - (walk / slider.offsetWidth) * 100}%)`;
        });
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
            <div class="caution">
                <div class="circle"></div>
                <h3>Hot News</h3>
            </div>
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