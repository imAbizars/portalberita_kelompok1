-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 17, 2025 at 09:13 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portalberita`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `like` int NOT NULL DEFAULT '0',
  `unlike` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `konten`, `image`, `created_at`, `like`, `unlike`) VALUES
(20, 'Chainsaw Man:Reze Arc Tayang di Bioskop Mulai 26 September 2025', '<p>Akhirnya yang ditunggu-tunggu datang juga! Film&nbsp;<em>Chainsaw Man: Reze Arc</em>&nbsp;resmi diumumkan akan tayang di bioskop Indonesia mulai 26 September 2025. Buat para penggemar&nbsp;<em>Chainsaw Man</em>, siap-siap menyaksikan aksi seru Denji dan kemunculan Reze yang penuh misteri dan emosi. Setelah sukses besar di season 1, adaptasi karya&nbsp;<strong>Tatsuki Fujimoto</strong>&nbsp;oleh studio MAPPA kembali hadir dan siap mengaduk-aduk perasaan kita lagi. Dengan judul film Chainsaw Man:&nbsp;<em>Reze Arc</em>, besar kemungkinan cerita ini bakal mengangkat keseluruhan kisah Reze yang muncul setelah&nbsp;<em>Katana Man Arc</em>, arc yang menjadi penutup di season 1&nbsp;<em>Chainsaw Man</em>. Menariknya, di arc ini untuk pertama kalinya kita akan melihat sosok hybrid manusia-iblis lain selain Denji, yang bakal membuka lembaran baru dalam konflik dan drama ceritanya. Season pertama sendiri mengadaptasi sampai chapter 38 dari manganya, dan film&nbsp;<em>Chainsaw Man: Reze Arc</em>&nbsp;bakal langsung lanjut dari chapter 39, jadi pastinya bakal jadi kelanjutan yang epic. buat kamu yang udah nggak sabar pengen tahu lebih banyak soal&nbsp;<em>Chainsaw Man: Reze Arc</em>, yuk simak beberapa info penting berikut ini&mdash;tapi hati-hati, bakal ada</p>\r\n\r\n<h2><strong>1. Chainsaw Man bakal Baperin Penonton Lewat Romansa Denji x Reze!</strong></h2>\r\n\r\n<p>Reze adalah karakter baru yang bakal jadi antagonis utama di&nbsp;<em>Chainsaw Man: Reze Arc</em>. Meski awalnya terlihat seperti sosok manis yang tulus menyukai Denji, ternyata dia adalah Bom Devil yang punya misi penting: mencabut jantung Denji dan mengambil Pochita. Yang bikin arc ini begitu emosional adalah fakta bahwa Reze jadi orang pertama yang benar-benar menunjukkan rasa suka ke Denji. Tapi hubungan mereka yang berakhir dengan tragis justru jadi titik balik besar buat perkembangan karakter Denji ke depannya.</p>\r\n\r\n<p>Walaupun Chainsaw Man dikenal dengan tema yang gelap, brutal, dan penuh kekacauan, Film&nbsp;<em>Chainsaw-Man: Reze Arc</em><strong>&nbsp;</strong>menghadirkan sisi romansa yang kuat dan bikin penonton baper. Denji yang masih resah dengan perasaannya terhadap Makima mencoba membuka hati lewat Reze.</p>\r\n\r\n<h2><strong>2. Siapa Sebenarnya Reze? Ini Dia Fakta Menarik dari Reze!</strong></h2>\r\n\r\n<p>Nama &ldquo;Reze&rdquo; kemungkinan diambil dari kata bahasa Inggris&nbsp;<em>raze</em>, yang berarti &ldquo;menghancurkan&rdquo; dan ini cocok banget sama kekuatannya sebagai hybrid manusia setengah iblis yang menjalin kontrak dengan Bom Devil. Reze memiliki julukan yaitu Bomb Girl. Karena memiliki wujud yang sama dengan denji yaitu sosok setengah manusia, setengah iblis, reze mampu memahami Denji dengan cara yang nggak bisa dilakukan oleh orang lain. Reze sendiri bukan berasal dari Jepang. Ia dikirim oleh Uni Soviet sebagai agen rahasia dengan misi khusus: mencuri jantung Denji, alias Pochita. Dari situlah kenapa Reze langsung mengincar Chainsaw Man dan berusaha mendekatinya lewat pendekatan yang terlihat romantis tapi penuh manipulasi.</p>\r\n\r\n<p>Awalnya, Reze tampak hanya berpura-pura jatuh hati pada Denji demi menjalankan misinya. Tapi seiring berjalannya cerita, muncul kebingungan dalam hatinya sendiri perasaan antara menjalankan tugas atau mengikuti hati. Hubungan mereka pun berubah jadi romansa tragis yang justru makin memperdalam konflik batin Denji.Di Film&nbsp;<em>Chainsaw-Man: Reze Arc</em>, kita bakal ngelihat sisi Denji yang berbeda: dia mulai mengenal cinta, mulai mempertanyakan kesetiaannya pada Makima, dan menghadapi luka emosional yang jauh lebih dalam dari sekadar pertarungan fisik. Arc ini nggak cuma penuh aksi dan ledakan, tapi juga emosi dan dilema, menjadikannya salah satu bagian paling menyayat dari Chainsaw Man.</p>\r\n\r\n<h2><strong>3. Mereka Balik Lagi! Siap-Siap Lihat Aksi Epik Para Karakter Utama!</strong></h2>\r\n\r\n<p>Seperti yang bisa kita lihat di teaser kedua film anime ini, para karakter utama dan pendukung seperti Denji, Makima, Aki Hayakawa, dan Kobeni kembali tampil penuh aksi menghadapi berbagai ancaman yang menghadang mereka. Penonton juga bakal disuguhkan kemunculan kembali beberapa karakter yang sebelumnya hanya muncul sekilas di season pertama, seperti Beam, iblis loyal berbentuk pria hiu berotot, dan Angel Devil, sosok misterius yang bisa menyerap umur seseorang hanya lewat sentuhan.</p>\r\n\r\n<p>Dengan aksi seru dan cerita yang makin emosional,&nbsp;<em>Chainsaw Man: Reze Arc</em>&nbsp;siap membuat penonton terhanyut dalam kisahnya. Jangan lewatkan kesempatan untuk menyaksikan pertarungan epik dan romansa tragis Denji dan Reze di layar lebar. Tandai Kalendermu! karena film ini bakal tayang mulai 26 September 2025 di bioskop terdekat! Ajak teman-temanmu, dan rasakan sendiri petualangan penuh kejutan yang hanya bisa kamu temui di&nbsp;<em>Chainsaw Man: Reze Arc</em>.</p>\r\n', 'reze.jpeg', '2025-06-03 19:23:31', 2, 0),
(21, 'PSG Berhasil Menjadi Juara Liga Champions, Kalahkan Inter 5 - 0 dalam Final Tak Berimbang  ', '<p>Paris Saint-Germain menjadi juara Liga Champions untuk kali pertama sepanjang sejarah setelah mengalahkan Inter Milan 5-0. Pertandingan puncak Liga Champions PSG vs Inter Milan berlangsung di Allianz Arena, Munich, Sabtu (31/5/2025) malam waktu setempat atau Minggu dini hari WIB.</p>\r\n\r\n<p>Tim asuhan Luis Enrique langsung menguasai jalannya laga PSG vs Inter Milan sejak awal dan membuat kubu Serie A tersebut tak berdaya sepanjang pertandingan.</p>\r\n\r\n<p>PSG memulai laga dengan tempo tinggi. Achraf Hakimi membuka keunggulan pada menit ke-12, disusul gol dari Desire Doue delapan menit kemudian.</p>\r\n\r\n<p>Doue kembali mencetak gol di babak kedua, sebelum Khvicha Kvaratskhelia dan pemain muda Senny Mayulu melengkapi kemenangan fenomenal Paris.</p>\r\n\r\n<p>Bungkam Inter 5-0 di Final Skor 5-0 menjadi margin kemenangan terbesar dalam sejarah final Liga Champions, sekaligus menjadikan Inter sebagai tim pertama yang kebobolan lima gol di partai puncak kompetisi ini sejak format European Cup berganti menjadi Liga Champions.</p>\r\n\r\n<p>Hasil tersebut sekaligus menjadi pembuktian perkataan pelatih Luis Enrique dan apa yang telah ia lakukan untuk mentransformasi kubu Parc des Princes.</p>\r\n\r\n<p>Tanpa sosok-sosok bintang seperti Lionel Messi, Neymar, dan terutama Mbapp&eacute;, PSG justru menjelma menjadi tim yang lebih kompak, solid, dan berorientasi pada permainan kolektif.</p>\r\n\r\n<p>Paris Saint-Germain menjadi klub ke-24 yang mengangkat trofi Si Kuping Besar.&nbsp;</p>\r\n\r\n<p>Keberhasilan PSG musim ini juga menambah daftar klub asal Prancis yang pernah menjuarai Liga Champions, menyusul jejak Olympique Marseille yang pernah menjadi juara pada tahun 1993.&nbsp;</p>\r\n\r\n<p>Pengamat sepak bola Italia, Giovanni Capuano, melontarkan kritik tajam terhadap performa Inter Milan usai kekalahan memalukan.</p>\r\n\r\n<p>Melalui akun media sosialnya, Capuano tak segan menyebut kekalahan Inter sebagai &quot;penghinaan olahraga&quot;.</p>\r\n\r\n<p>Momen penuh haru menyelimuti pesta kemenangan Paris Saint-Germain (PSG). Bagi sang pelatih, Luis Enrique, malam bersejarah itu juga menjadi momen mengenang putri tercinta yang telah tiada, Xana Enrique.&nbsp;</p>\r\n\r\n<p>Xana, yang meninggal dunia pada tahun 2019 di usia sembilan tahun akibat kanker tulang langka, menjadi sosok yang tak pernah lepas dari ingatan Enrique.</p>\r\n', 'psg_3644905416537813941.jpg', '2025-06-03 21:31:20', 0, 0),
(23, 'Resep Sop Daging Sapi Khas Jawa yang Harum Pakai Biji Pala', '<p>Ide olahan daging sapi berkuah gurih lainnya adalah sop daging. Kamu bisa membuat kreasi khas Jawa yang berbumbu gurih dan harum khas pala. Ini resepnya!<br />\\r\\n\\\\r\\\\n\\\\\\\\r\\\\\\\\nSop daging sapi termasuk hidangan yang populer di Indonesia. Salah satu yang dapat dibuat adalah kreasi sop daging sapi khas Jawa.<br />\\r\\n\\\\r\\\\n\\\\\\\\r\\\\\\\\n<br />\\r\\n\\\\r\\\\n\\\\\\\\r\\\\\\\\nBumbu yang digunakan untuk membuat sajian sop daging khas Jawa ini terbilang sederhana. Hidangannya semakin nikmat karena ditambahkan biji pala yang membuat sop ini harum berempah.<br />\\r\\n\\\\r\\\\n\\\\\\\\r\\\\\\\\n<br />\\r\\n\\\\r\\\\n\\\\\\\\r\\\\\\\\nSop daging sapi bisa menjadi santapan Idul Adha yang nikmat. Selain daging sapi, padukan juga dengan kentang dan wortel.</p>\\r\\n\\r\\n<p>\\\\r\\\\n\\\\r\\\\n</p>\\r\\n\\r\\n<p>\\\\\\\\r\\\\\\\\n\\\\\\\\r\\\\\\\\n</p>\\r\\n\\r\\n<p>\\\\r\\\\n\\\\r\\\\n</p>\\r\\n\\r\\n<h3><strong>Bahan - bahan</strong></h3>\\r\\n\\r\\n<p>\\\\r\\\\n\\\\r\\\\n</p>\\r\\n\\r\\n<p>\\\\\\\\r\\\\\\\\n\\\\\\\\r\\\\\\\\n</p>\\r\\n\\r\\n<p>\\\\r\\\\n\\\\r\\\\n</p>\\r\\n\\r\\n<ul>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>\\\\\\\\r\\\\\\\\n</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>500 gram daging sapi</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>\\\\\\\\r\\\\\\\\n</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>1.5 liter air</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>\\\\\\\\r\\\\\\\\n</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>3 sdm minyak sayur</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>\\\\\\\\r\\\\\\\\n</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>5 butir bawang merah, iris kasar</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>\\\\\\\\r\\\\\\\\n</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>2 buah kentang, kupas, potong-potong</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>\\\\\\\\r\\\\\\\\n</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>2 buah wortel, kupas, potong-potong</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>\\\\\\\\r\\\\\\\\n</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>1 buah tomat merah, potong-potong</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>\\\\\\\\r\\\\\\\\n</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>1 batang daun bawang, iris kasar</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>\\\\\\\\r\\\\\\\\n</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>1 tangkai seledri, iris kasar</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>\\\\\\\\r\\\\\\\\n</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n</ul>\\r\\n\\r\\n<p>\\\\r\\\\n\\\\r\\\\n</p>\\r\\n\\r\\n<p>\\\\\\\\r\\\\\\\\n\\\\\\\\r\\\\\\\\n</p>\\r\\n\\r\\n<p>\\\\r\\\\n\\\\r\\\\n</p>\\r\\n\\r\\n<p>Haluskan:</p>\\r\\n\\r\\n<p>\\\\r\\\\n\\\\r\\\\n</p>\\r\\n\\r\\n<p>\\\\\\\\r\\\\\\\\n\\\\\\\\r\\\\\\\\n</p>\\r\\n\\r\\n<p>\\\\r\\\\n\\\\r\\\\n</p>\\r\\n\\r\\n<ul>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>\\\\\\\\r\\\\\\\\n</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>4 siung bawang putih</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>\\\\\\\\r\\\\\\\\n</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>1/4 butir pala</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>\\\\\\\\r\\\\\\\\n</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>1 sdt merica butiran</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>\\\\\\\\r\\\\\\\\n</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>2 sdt garam</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>\\\\\\\\r\\\\\\\\n</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n</ul>\\r\\n\\r\\n<p>\\\\r\\\\n\\\\r\\\\n</p>\\r\\n\\r\\n<p>\\\\\\\\r\\\\\\\\n\\\\\\\\r\\\\\\\\n</p>\\r\\n\\r\\n<p>\\\\r\\\\n\\\\r\\\\n</p>\\r\\n\\r\\n<h3><strong>Cara memasak :</strong></h3>\\r\\n\\r\\n<p>\\\\r\\\\n\\\\r\\\\n</p>\\r\\n\\r\\n<p>\\\\\\\\r\\\\\\\\n\\\\\\\\r\\\\\\\\n</p>\\r\\n\\r\\n<p>\\\\r\\\\n\\\\r\\\\n</p>\\r\\n\\r\\n<ul>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>\\\\\\\\r\\\\\\\\n</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>Potong daging sapi dengan ukuran sesuai selera. Kemudian rebus dalam air sampai mendidih dan daging empuk.</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>\\\\\\\\r\\\\\\\\n</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>Haluskan bumbunya menggunakan ulekan atau blender. Setelah itu, tumis dengan sedikit minyak sampai agak kecokelatan dan harum.</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>\\\\\\\\r\\\\\\\\n</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>Masukkan bumbu ke dalam rebusan daging sapi dan diamkan beberapa saat.</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>\\\\\\\\r\\\\\\\\n</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>Lalu, masukkan wortel dan kentang. Rebus dengan api kecil sampai semuanya melunak.</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>\\\\\\\\r\\\\\\\\n</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>Terakhir masukkan irisan daun bawang, seledri, dan tomat.</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>\\\\\\\\r\\\\\\\\n</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>Sajikan sop daging sapi dengan taburan bawang goreng.</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n	<li>\\\\\\\\r\\\\\\\\n</li>\\r\\n	<li>\\\\r\\\\n</li>\\r\\n</ul>\\r\\n\\r\\n<p>\\\\r\\\\n\\\\r\\\\n</p>\\r\\n\\r\\n<p>\\\\\\\\r\\\\\\\\n</p>\\r\\n\\r\\n<p>\\\\r\\\\n</p>\\r\\n', 'sop.jpg', '2025-06-07 15:47:16', 0, 0),
(24, 'Perang Dagang AS vs China: Amerika Sepakat Bekerjasama dengan China', 'Presiden Amerika Serikat Donald Trump mengawali perang dagang dengan menetapkan sejumlah tarif tambahan dalam aktivitas ekspor dan impor. Langkah yang diambil Donald Trump ini menggemparkan dunia perekonomian, berbagai negara juga memberikan respon terhadap langkah ini. Seperti langkah yang diambil Australia dengan memberikan sebuah peringatan terhadap Amerika Serikat. Disisi lain China menanggapi berita ini dengan memberikan kenaikan tarif terhadap Amerika Serikat, langkah ini berhasil membuat Amerika Serikat sedikit terguncang mengingat turunnya nilai mata uang dollar.\r\n\r\nPada awalnya Presiden Amerika Serikat Donald Trump memberikan sikap seolah tidak peduli akan sikap China dan justru menambahkan tarif kembali terhadap China. Melihat sikap AS yang begitu tidak ingin menyerah China juga melancarkan \"Serangan balik\" terhadap perekonomian AS.\r\n\r\nHingga pada akhirnya perekonomian AS saat ini mengalami penurunan yang signifikan, membuat Presiden Amerika Serikat Donald Trump tidak mempunyai pilihan lain selain membuat kesepakatan dengan Pemerintah China demi menyelamatkan perekonomian Amerika Serikat.\r\n\r\nPeristiwa ini menuai berbagai respon pemerintah di berbagai dunia, dan China sekarang dianggap sebagai negara Super Power baru dalam hal perekonomian karena berhasil memukul mundur negara Amerika Serikat dalam perang dagang kali ini.', 'tru.jpg', '2025-06-17 14:26:13', 0, 0),
(26, 'Iran Klaim Tembak 3 Jet Tempur Paling Canggih F-35 Israel, Ini Spesifikasinya', '<p>Hal itu diungkap oleh kantor berita IRNA pada Sabtu (14/6/2025). Sehari sebelumnya, Iran juga mengatakan sudah menembak jatuh 2 pesawat tempur F-35 Israel lainnya. Meski demikian, Juru bicara militer Israel, Letkol Avichay Adraee membantah klaim tersebut. Dia menyebutkan bahwa kabar tersebut adalah sebuah kebohongan. Jet tempur F-35 adalah pesawat tempur generasi kelima yang dianggap paling canggih di kelasnya</p>\r\n\r\n<p>Jika klaim itu benar, Iran menjadi negara pertama yang berhasil menembak jatuh jet tempur F-35.Lantas, seperti apa spesifikasi jet tempur F-35 yang diklaim paling canggih di kelasnya?</p>\r\n\r\n<p>Dikutip dari laman resminya, jet tempur F-35 adalah pesawat tempur yang diklaim paling canggih di dunia produksi Amerika Serikat (AS).&nbsp;Jet tempur F-35 diproduksi oleh produsen kedirgantaraan AS, Lockheed Martin dan dikirim melalui program Penjualan Militer Asing (FMS) AS. Jet pertama tiba di Israel sekitar tahun 2016. Israel menjadi salah satu dari sedikit negara yang diberi wewenang oleh AS untuk mengoperasikan pesawat tempur siluman generasi kelima itu. Jet tempur ini memberikan keuntungan bagi pilot untuk melawan musuh mana pun dan memungkinkan mereka melaksanakan misi dengan jaminan pulang dengan selamat.</p>\r\n\r\n<p>Baca juga: Mengenal Operasi Rising Lion, Serangan Israel ke Iran yang Tewaskan Petinggi Militer-Ilmuwan Nuklir Sebagai pesawat siluman, jet tempur F-35 diklaim sulit dideteksi dan ditargetkan oleh musuh. Bentuk dan sensor internal, senjata, serta bahan bakar F-35 semuanya berkontribusi pada sifat siluman F-35. Sebagai contoh, desain jet tempur F-35 memiliki bentuk dan sudut yang geometris pada sisi tertentu. Desain ini memberikan gangguan pantulan radar dengan cara memantulkannya atau menjebak pantulan radar. Kemudian, jet tempur itu juga memiliki lapisan penyerap radar berupa &quot;cat&quot; berwarna abu-abu yang fungsinya untuk mengurangi dan menyerap sinyal radar.</p>\r\n', 'WhatsApp Image 2025-06-17 at 14.22.00.jpeg', '2025-06-17 14:38:59', 0, 0),
(27, 'Tujuh Pembalap Diinvestigasi Usai F1 GP Kanada, Norris Dapat Sanksi', '<p><strong>Tujuh Pembalap Diinvestigasi Usai F1 GP Kanada, Norris Dapat Sanksi</strong></p>\r\n\r\n<p>FIA tengah menyelidiki tujuh pembalap&mdash;termasuk yang finis posisi 3 dan 5&mdash;atas dugaan pelanggaran prosedur Safety Car setelah balapan di Circuit Gilles‑Villeneuve&nbsp;</p>\r\n\r\n<p>Para pembalap yang diselidiki: Esteban Ocon, Carlos Sainz, Andrea Kimi Antonelli, Oscar Piastri, Charles Leclerc, Pierre Gasly, dan Lance Stroll</p>\r\n\r\n<p>Mereka dicurigai menyalip saat papan SC masih aktif, meskipun mobil Safety Car sudah masuk pitlane</p>\r\n\r\n<p><strong>Dugaan dan potensi penalti :&nbsp;</strong></p>\r\n\r\n<p>Investigasi mencakup apakah mereka melanggar &ldquo;delta time&rdquo; atau jarak aman saat safety car masih diberlakukan</p>\r\n\r\n<p>Fernando Alonso berharap ada penalti untuk mereka yang menyalip, karena menurutnya &ldquo;menyalip saat safety car tak bisa ditawar&rdquo;&nbsp;</p>\r\n\r\n<p><strong>Insiden McLaren&mdash;Norris vs Piastri</strong></p>\r\n\r\n<p>Tim FIA juga menyelidiki tabrakan antara Lando Norris dan Oscar Piastri, dua pembalap McLaren. Cerritanya sempat terjadi kontak saat Norris mencoba menyalip&nbsp;</p>\r\n\r\n<p>Ini adalah penyelidikan tersendiri selain investigasi Safety Car.</p>\r\n\r\n<p><strong>Dampak pada hasil balapan</strong> :&nbsp;</p>\r\n\r\n<p>Hasil GP Kanada belum final dan bisa berubah jika penalti dikenakan kepada para pembalap yang diselidiki</p>\r\n\r\n<p>Saat ini podium belum pasti dan stewards FIA masih menunggu pernyataan resmi dari para pembalap.</p>\r\n', 'sport.jpg', '2025-06-17 14:48:37', 0, 0),
(28, 'Pria Mengaku Content Kreator di CFD Depok Mengajak Collab Remaja Untuk Membuat Konten, Gak Tahunya 2 HP di Raib', '<p>Depok - Aksi penipuan terjadi saat Car Free Day (CFD) di kawasan Margonda, Depok. Dua remaja menjadi korban setelah diajak berkolaborasi membuat konten oleh pria tak dikenal yang mengaku sebagai content creator. Akibatnya, dua ponsel milik korban raib dibawa kabur.</p>\r\n\r\n<p>Peristiwa ini terjadi pada Minggu (16/6/2024) pagi. Korban, MG dan SH, masing-masing berusia 15 tahun, saat itu sedang duduk di halte depan Apotek IL, Jalan Margonda. Mereka lalu didatangi oleh dua pria tak dikenal yang menawarkan kerja sama membuat konten lucu dan menjanjikan bayaran Rp50 ribu.</p>\r\n\r\n<p>Kedua korban lantas menyerahkan ponsel mereka kepada pelaku atas alasan akandigunakan untuk merekam video. Setelahnya, mereka diminta ikut ke lokasi yang disebut sebagai &quot;studio&quot;. Namun, di tengah jalan, korban diturunkan di kawasan Pasar Kemiri Beji, sementara kedua pelaku kabur membawa ponsel milik korban.</p>\r\n\r\n<p>Kakak salah satu korban, Novi, membagikan kronologi kejadian ini melalui media sosial dan membenarkan kejadian tersebut. Ia menyebut, pihak keluarga telah melaporkan kejadian ini ke Polres Metro Depok dan diarahkan untuk membuat laporan lengkap di SPKT.</p>\r\n\r\n<p>Pihak kepolisian menyatakan akan menindaklanjuti laporan tersebut. Kasus ini masih dalam penyelidikan, dan polisi mengimbau masyarakat agar lebih waspada terhadap modus penipuan berkedok content creator.</p>\r\n', 'cfd.jpg', '2025-06-17 14:51:49', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `berita_kategori`
--

CREATE TABLE `berita_kategori` (
  `berita_id` int NOT NULL,
  `kategori_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `berita_kategori`
--

INSERT INTO `berita_kategori` (`berita_id`, `kategori_id`) VALUES
(20, 1),
(21, 1),
(28, 1),
(21, 2),
(26, 2),
(21, 3),
(27, 3),
(20, 4),
(23, 5),
(24, 6);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1, 'hot'),
(2, 'news'),
(3, 'sport'),
(4, 'anime'),
(5, 'foods'),
(6, 'ekonomi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin54', 'admin54', 'admin'),
(9, 'ngopicoy', 'ngopicoy', 'user'),
(10, 'jawakeras', 'jawakeras', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita_kategori`
--
ALTER TABLE `berita_kategori`
  ADD PRIMARY KEY (`berita_id`,`kategori_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita_kategori`
--
ALTER TABLE `berita_kategori`
  ADD CONSTRAINT `berita_kategori_ibfk_1` FOREIGN KEY (`berita_id`) REFERENCES `berita` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `berita_kategori_ibfk_2` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
