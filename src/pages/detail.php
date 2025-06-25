<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include __DIR__ . '/../db/koneksi.php';

if (!isset($_GET['id'])) {
    echo "Berita tidak ditemukan.";
    exit;
}

$id = intval($_GET['id']); // pastikan aman dari SQL Injection

$query = "SELECT b.id, b.judul, b.konten, GROUP_CONCAT(k.nama_kategori SEPARATOR ', ') AS nama_kategori, b.image, b.created_at,b.like,b.unlike
          FROM berita b
          JOIN berita_kategori bk ON b.id = bk.berita_id
          JOIN kategori k ON bk.kategori_id = k.id
          WHERE b.id = $id
          GROUP BY b.id
          LIMIT 1";

$result = $conn->query($query);

if ($result->num_rows == 0) {
    echo "Berita tidak ditemukan.";
    exit;
}

$berita = $result->fetch_assoc();
$liked = isset($_SESSION['liked_berita']) && in_array($berita['id'], $_SESSION['liked_berita']);
?>


<?php include "./src/components/marquee.php";?>
    <div class="detail">
        <h1><?= $berita['judul']; ?></h1>
        <div class="meta">
            <?= date('d M Y', strtotime($berita['created_at'])); ?> | <?= $berita['nama_kategori']; ?>
            <div class="like-box">
                <button id="likeButton"
                    data-berita-id="<?= $berita['id']; ?>"
                    class="<?= (isset($_SESSION['liked_berita']) && in_array($berita['id'], $_SESSION['liked_berita'])) ? 'liked' : '' ?>">
                    <i id="likeIcon" class="<?= (isset($_SESSION['liked_berita']) && in_array($berita['id'], $_SESSION['liked_berita'])) ? 'fa-solid' : 'fa-regular' ?> fa-thumbs-up"></i>
                    <span id="likeCount"><?= $berita['like']; ?></span>
                </button>
            </div>
            <div class="unlike-box">
                <button id="UnlikeButton"
                data-berita-id="<?= $berita['id'];?>"
                class="<?=(isset($_SESSION['unliked_berita']) && in_array($berita['id'],$_SESSION['unliked_berita']))?'unliked':''?>">
                <i id="UnlikeIcon" class="<?= (isset($_SESSION['unliked_berita']) && in_array($berita['id'], $_SESSION['unliked_berita'])) ? 'fa-solid' : 'fa-regular' ?> fa-thumbs-down"></i>
                <span id="UnlikeCount"><?= $berita['unlike']; ?></span>
                </button>
            </div>
        </div>
        <img src="../../../tugaskelompok/images/<?= $berita['image']; ?>" alt="<?= $berita['judul']; ?>">
        <div class="konten">
            <?= $berita['konten']; ?>
            <!-- Tampilkan Komentar -->
                <div class="komentar-section">
                    <h3>Komentar</h3>

                    <?php
                    $komentarQuery = "
                        SELECT k.isi, k.created_at, u.username
                        FROM komentar k
                        JOIN user u ON k.user_id = u.id
                        WHERE k.berita_id = $id
                        ORDER BY k.created_at DESC
                    ";
                    $komentarResult = $conn->query($komentarQuery);
                    ?>

                    <?php if ($komentarResult->num_rows > 0): ?>
                        <?php while ($komen = $komentarResult->fetch_assoc()): ?>
                            <div class="komentar">
                                <div class="komentar-header">
                                    <span><?= $komen['username']; ?></span>
                                    <small><?= date('d M Y H:i', strtotime($komen['created_at'])); ?></small>
                                </div>
                                <p><?= htmlspecialchars($komen['isi']); ?></p>
                            </div>

                        <?php endwhile; ?>
                    <?php else: ?>
                        <p>Belum ada komentar.</p>
                    <?php endif; ?>
                </div>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <form action="/tugaskelompok/src/utils/kirim_komentar.php" method="POST" class="form-komentar">
                        <input type="hidden" name="berita_id" value="<?= $berita['id']; ?>">
                        <textarea name="isi" rows="5" cols="40" placeholder="Tulis komentar..." required></textarea>
                        <button type="submit">Kirim Komentar</button>
                    </form>
                <?php else: ?>
                    <p><a href="index.php?page=login">Login</a> untuk mengirim komentar.</p>
                <?php endif; ?>
        </div>
    
        <p><a href="index.php">← Kembali Beranda</a></p>
    </div>
    <script>
document.addEventListener("DOMContentLoaded", function () {
    const likeButton = document.getElementById("likeButton");
    const likeIcon = document.getElementById("likeIcon");
    const likeCount = document.getElementById("likeCount");
    const UnlikeButton = document.getElementById("UnlikeButton");
    const UnlikeIcon = document.getElementById("UnlikeIcon");
    const UnlikeCount = document.getElementById("UnlikeCount");

    //likedbutton
    likeButton.addEventListener("click", function () {
        const beritaId = likeButton.getAttribute("data-berita-id");

        fetch("/tugaskelompok/src/utils/like_ajax.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: `berita_id=${beritaId}&action=like`
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                likeCount.textContent = data.new_like_count;
                if (data.liked) {
                    likeIcon.classList.remove("fa-regular");
                    likeIcon.classList.add("fa-solid");
                    likeButton.classList.add("liked");
                } else {
                    likeIcon.classList.remove("fa-solid");
                    likeIcon.classList.add("fa-regular");
                    likeButton.classList.remove("liked");
                }
            } else if (data.login_required) {
                alert("Silakan login terlebih dahulu untuk menyukai berita.");
                window.location.href = "/tugaskelompok/index.php?page=login";
            }
        });
    });

    //unlikebutton
    UnlikeButton.addEventListener("click",function(){
        const beritaId = UnlikeButton.getAttribute("data-berita-id");

        fetch("/tugaskelompok/src/utils/like_ajax.php",{
            method:"POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: `berita_id=${beritaId}&action=unlike`
        })
        .then(response=>response.json())
        .then(data=>{
            if (data.success) {
                UnlikeCount.textContent = data.new_unlike_count;
                if (data.liked) {
                    UnlikeIcon.classList.remove("fa-regular");
                    UnlikeIcon.classList.add("fa-solid");
                    UnlikeButton.classList.add("unliked");
                } else {
                    UnlikeIcon.classList.remove("fa-solid");
                    UnlikeIcon.classList.add("fa-regular");
                    UnlikeButton.classList.remove("unliked");
                }
            } else if (data.login_required) {
                alert("Silakan login terlebih dahulu untuk menyukai berita.");
                window.location.href = "/tugaskelompok/index.php?page=login";
            }
        });
    });
});
</script>
<script src="https://kit.fontawesome.com/73fba7024b.js" crossorigin="anonymous"></script>

