<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link rel="stylesheet" href="main.css">
    <script>
        const slider = document.querySelector('.team-container');
        let isDown = false;
        let startX;
        let scrollLeft;
    
        slider.addEventListener('mousedown', (e) => {
            isDown = true;
            slider.classList.add('active');
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });
    
        slider.addEventListener('mouseleave', () => {
            isDown = false;
            slider.classList.remove('active');
        });
    
        slider.addEventListener('mouseup', () => {
            isDown = false;
            slider.classList.remove('active');
        });
    
        slider.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const walk = (x - startX) * 1.5; // kecepatan scroll
            slider.scrollLeft = scrollLeft - walk;
        });
    </script>
</head>

<body>
    <?php include "navbar.php";?>
    <main class="main-tentang">
        <div class="content-tentang">
            <div>
                <h1>Yuk kenal Kita!</h1>
                <p>
                    Helloo!!<span id="wave">👋</span>
                    <br>
                    Kenalin,kami dari PortalBerita sebuah situs yang menampilkan berita terkini loh...<br>
                    Buat kalian yang penasaran yuk langsung aja kenalan<br>
                    <br>    
                    Berita Kita lahir dari rasa penasaran dan semangat berbagi info yang gak cuma cepat, tapi juga jelas dan jujur. Bukan media besar, bukan juga yang paling duluan tapi selalu ada usaha buat ngasih konten yang relevan, ringan, dan gak lebay.
                    <br>
                    <br>
                    Tujuannya sederhana kami yaitu jadi sumber berita yang asik diajak ngobrol, bukan yang bikin pusing.
                    Ngomongin isu terkini, lokal atau nasional, tanpa bumbu berlebihan.
                    <br>
                    <br>
                    Visi Kami yaitu Menjadi platform berita digital yang kekinian, terpercaya, dan dekat dengan pembaca, khususnya generasi muda yang haus akan informasi yang jujur dan ringan.
                    Karena sekarang, informasi bukan soal siapa paling cepat tapi siapa yang bisa dipercaya.
                    <br>
                    <br>
                    Next yuk!
                </p>
            </div>
            <div class="img-tentang">
                <img src=".../../assets/images/teamwork.jpg" alt="">
            </div>
        </div>
        <div class="content-tentang2">
            <h1>Ini Kita!</h1>
            <p>Sekarang kenalan yuk sama tim kecil kami</p>
            <div class="team-container">
                <div class="team-grid">
    <div class="team-box"><img src="assets/images/tim1.jpg" alt="Tim 1"><p>Anggota 1</p></div>
    <div class="team-box"><img src="assets/images/tim2.jpg" alt="Tim 2"><p>Anggota 2</p></div>
    <div class="team-box"><img src="assets/images/tim3.jpg" alt="Tim 3"><p>Anggota 3</p></div>
    <div class="team-box"><img src="assets/images/tim4.jpg" alt="Tim 4"><p>Anggota 4</p></div>
    <div class="team-box"><img src="assets/images/tim5.jpg" alt="Tim 5"><p>Anggota 5</p></div>
    <div class="team-box"><img src="assets/images/tim6.jpg" alt="Tim 6"><p>Anggota 6</p></div>
    <div class="team-box"><img src="assets/images/tim7.jpg" alt="Tim 7"><p>Anggota 7</p></div>
</div>
        </div>
    </main>
</body>
</html>