<?php 
include "../db/koneksi.php";

$error = '';
$success = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];
    $role = 'user';

    if (empty($username) || empty($password) || empty($confirm)) {
        $error = "Semua kolom wajib diisi.";
    } elseif ($password !== $confirm) {
        $error = "Konfirmasi password tidak cocok.";
    } else {
        $stmt = $conn->prepare("SELECT id FROM user WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $error = "Username sudah digunakan.";
        } else {
            $stmt = $conn->prepare("INSERT INTO user (username, password,role) VALUES (?, ?,?)");
            $stmt->bind_param("sss", $username, $password,$role);

            if ($stmt->execute()) {
                $success = "Registrasi berhasil. Silakan login.";
                
            } else {
                $error = "Registrasi gagal. Coba lagi.";
            }
        }

        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Registrasi</title>
    <link rel="stylesheet" href="../register.css">
    <link rel="icon" href="../../assets/images/newspaper.png" type="image/png" >
</head>
<body>
    <div class="container">
        <div class="form">
            <h2>Form Registrasi</h2>
    
            <?php if ($error): ?>
                <p style="color:red;"><?= $error ?></p>
            <?php endif; ?>
    
            <?php if ($success): ?>
                <p style="color:green;"><?= $success ?></p>
            <?php endif; ?>
            <div class="content">
                <form method="POST" action="">
                    <label for="username">Username:</label><br>
                    <input type="text" name="username" id="username" required><br><br>
        
                    <label for="password">Password:</label><br>
                    <input type="password" name="password" id="password" required><br><br>
        
                    <label for="confirm_password">Konfirmasi Password:</label><br>
                    <input type="password" name="confirm_password" id="confirm_password" required><br><br>
        
                    <button type="submit">Daftar</button>
                </form>
                <p>Sudah punya akun? <a href="../pages/login.php">Login di sini</a></p>
            </div>
        </div>
        <div class="image">
            <img src="../../assets/images/gedung1.jpg" alt="Login Image" style="height: 100vh; object-fit: cover;">
        </div>
        </div>
</body>
</html>
