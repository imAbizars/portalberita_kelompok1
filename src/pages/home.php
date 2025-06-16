<?php
include "../db/koneksi.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../main.css">
</head>
<script>
        //slider
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

    //kategori
    document.addEventListener('DOMContentLoaded', () => {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const beritaBoxes = document.querySelectorAll('.berita-box');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const selectedKategori = button.dataset.kategori;

                beritaBoxes.forEach(box => {
                const kategoriList = box.dataset.kategori.split(',').map(k => k.trim());

                if (selectedKategori === 'all' || kategoriList.includes(selectedKategori)) {
                    box.style.display = 'block';
                } else {
                    box.style.display = 'none';
                }
                });
            });
        });

    });
    </script>
    <script src="https://kit.fontawesome.com/73fba7024b.js" crossorigin="anonymous"></script>
<body>
    <?php include "../components/navbar.php";?>
  <main>
    <?php include "../components/marquee.php";?>
    <div class="container">
         <div class="left-content">
            <div class="caution">
                <div class="circle"></div>
                <h3>Hot News</h3>
            </div>
            <!-- slider -->
            <?php include "../components/slider.php";?>
            <div class="content">
                <h1>Selamat Datang Di Portal Berita</h1>
                <h3 class="subjudul">Berita Kekinian, Buat Kamu yang Penasaran.</h3>
                <?php include "../components/box.php";?>
            </div>
         </div>
         <?php include "../components/listfoods.php";?>     
    </div>
    <?php include "../components/footer.php";?>  
  </main>
</body>


</html>