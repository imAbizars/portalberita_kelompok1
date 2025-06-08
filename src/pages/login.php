<?php
session_start();
include '../db/koneksi.php';

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
        $_SESSION['user'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['last_login'] = time();

        if ($user['role'] === 'admin') {
            header("Location: ../dashboard/dashboard.php");
        } else {
            header("Location: home.php");
        }
        exit();
    } else {
        $error = "Login gagal! Username atau password salah.";
    }
    $stmt->close();
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="form">
            <h1 class="judul">Selamat Datang Di Portal Berita</h1>
            <?php if ($error): ?>
                <p style="color:red;"><?php echo $error; ?></p>
            <?php endif; ?>
            <div class="content">
                <form method="POST" action="">
                    <label for="username">Username</label><br>
                    <input type="text" name="username" required><br>
                    <label for="password">Password</label><br>
                    <input type="password" name="password" required><br><br>
                    <button type="submit">Login</button>
                </form>
                <p>Belum Punya Akun?<a href="../pages/register.php">Daftar Disini</a></p>
                <?php if (isset($_GET['logout']) && $_GET['logout'] == 1): ?>
                    <div class="alert success">Anda telah berhasil logout.</div>
                <?php endif; ?>
            </div>
        </div>
        <div class="image">
            <img src="../../assets/images/gedung1.jpg" alt="Login Image" style="height: 100vh; object-fit: cover;">
        </div>
    </div>
</body>
</html>
