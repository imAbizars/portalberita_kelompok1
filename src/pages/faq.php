<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="../main.css">
   <link rel="icon" href="../../assets/images/newspaper.png" type="image/png" >
</head>
<body>
    <?php include "../components/navbar.php";?>
    <main class="faq">
    <div class="faq-img">
        <img src="../../assets//images/faq.jpg" alt="">
    </div>
        <div class="faq-container">
            <h1>Bingung? Temukan Penjelasan di Sini!</h1>
            <div class="faq-item">
                <div class="faq-question">
                    Apa Sih Itu Portal Berita Kami?
                </div>
                <div class="faq-answer">
                    <li>Portal Berita Kami adalah situs yang menyediakan informasi aktual dan terpercaya dari berbagai kategori seperti nasional, teknologi, ekonomi, hiburan, dan lainnya.</li>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    Apakah Pembaca Dapat Mensubmit Berita Ke Portal Ini?
                </div>
                <div class="faq-answer">
                    <li>Pembaca dapat mensubmit berita kepada kami, berita tersebut akan kami kurasi dulu untuk ke valid an isi berita dan perbaikan penulisan bila perlu, apabila berita ditolak atau pun diposting kami akan menghubungi partisipan</li>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    Bagaimana Cara Mensubmit Berita Kita?
                </div>
                <div class="faq-answer">
                    <li>Pembaca dapat mengirimkan email dengan Subject "Berita Mail" ke alamat email portalberita@gmail.com.</li>
                </div>
            </div>
        </div>
    </main>
    <?php include "../components/footer.php";?>
    <script>
        const faqItems = document.querySelectorAll('.faq-item');
        
    faqItems.forEach(item => {
      const question = item.querySelector('.faq-question');
      question.addEventListener('click', () => {
        item.classList.toggle('active');
      });
    });
  </script>
</body>
</html>