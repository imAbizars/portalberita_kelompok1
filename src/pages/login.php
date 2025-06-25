<?php
include __DIR__ . '/../db/koneksi.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM user WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && $password === $user['password']) {
        session_regenerate_id(true); 
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['last_login'] = time();

        if ($user['role'] === 'admin') {
            header("Location: index.php?page=dashboard");
        } else {
            header("Location: index.php");
        }
        exit();
    } else {
        $error = "Login gagal! Username atau password salah.";
    }
    $stmt->close();
}
?>
    <div class="container">
        <div class="form">
            <div class="content">
                    <?php if ($error): ?>
                        <p style="color:red;"><?php echo $error; ?></p>
                        <?php endif; ?>
                <h1 class="judul">Selamat Datang Di Portal Berita</h1>
                <form method="POST" action="">
                    <label for="username">Username</label><br>
                    <input type="text" name="username" required><br>
                    <label for="password">Password</label><br>
                    <input type="password" name="password" required><br><br>
                    <button type="submit">Login</button>
                </form>
                <div class="item-content">
                    <p>Belum Punya Akun?<a href="index.php?page=register">Daftar Disini</a></p>
                    <p><a href="index.php">Kembali Ke Berita</a></p>
                </div>
                <?php if (isset($_GET['logout']) && $_GET['logout'] == 1): ?>
                    <div class="alert success">Anda telah berhasil logout.</div>
                <?php endif; ?>
            </div>
        </div>
        <div class="image">
            <img src="../../../tugaskelompok/assets/images/gedung.jpg" alt="Login Image" style="height: 100vh; object-fit: cover;">
        </div>
    </div>