<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link rel="stylesheet" href="main.css">
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
            <div class="team-scroll" id="teamScroll" >
                <div class="team-box">
                <img src="./assets/team/team1.jpg" alt="Tim 1" draggable="false">
                <h3>Haviza Amara Putri</h3>
                <p>"Cintailah kucing"</p>
                </div>
                <div class="team-box">
                <img src="./assets/team/team2.jpg" alt="Tim 2">
                <h3>Hazel Altian Athallah</h3>
                <p>"Lebih baik ditakuti daripada dicintai"</p>
                </div>
                <div class="team-box">
                <img src="./assets/team/team3.jpg" alt="Tim 3">
                <h3>Yoktan Farely</h3>
                <p>"Tidak ada"</p>
                </div>
                <div class="team-box">
                <img src="assets/team/team4.jpg" alt="Tim 4">
                <h3>Rahul Dwi Putra</h3>
                <p>"Jangan lupa mandi biar wangy"</p>
                </div>
                <div class="team-box">
                <img src="assets/images/t5.jpg" alt="Tim 5">
                <h3>Floria Hilary Heda</h3>
                </div>
                <div class="team-box">
                <img src="assets/team/team5.jpg" alt="Tim 6">
                <h3>Wika Muhammad Maulana</h3>
                <p>"HIdup cuma sekali,makan mie ayam enak"</p>
                </div>
                <div class="team-box">
                <img src="assets/images/tim7.jpg" alt="Tim 7">
                <h3>Dennis Abizar</h3>
                </div>
            </div>
        </div>

    </main>
    <script>
        const teamScroll = document.getElementById("teamScroll");
        let isDown = false;
        let startX;
        let scrollLeft;

        teamScroll.addEventListener("mousedown", (e) => {
        isDown = true;
        teamScroll.classList.add("active");
        startX = e.pageX - teamScroll.offsetLeft;
        scrollLeft = teamScroll.scrollLeft;
        });

        teamScroll.addEventListener("mouseleave", () => {
        isDown = false;
        teamScroll.classList.remove("active");
        });

        teamScroll.addEventListener("mouseup", () => {
        isDown = false;
        teamScroll.classList.remove("active");
        });

        teamScroll.addEventListener("mousemove", (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - teamScroll.offsetLeft;
        const walk = (x - startX) * 1.0; // kecepatan scroll
        teamScroll.scrollLeft = scrollLeft - walk;
        });
    </script>

</body>
</html>