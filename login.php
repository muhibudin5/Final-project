<?php
$errors = [];
$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Validasi sederhana
    if (empty($username)) {
        $errors['username'] = "Username is required";
    }

    if (empty($password)) {
        $errors['password'] = "Password is required";
    }

    // Sementara tidak ada koneksi ke database
    if (empty($errors)) {
        // Di sini, Anda bisa melakukan pengecekan password dari database
        // Simulasi login berhasil (ganti dengan logika verifikasi database)
        $successMessage = "Login successful!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login-style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
    <img src="layout/img/logo0.png" alt="Logo" class="logo">
    
    <?php if ($successMessage): ?>
        <div class="success"><?php echo $successMessage; ?></div>
    <?php endif; ?>

    <form class="login-form" method="POST">
        <div class="form-group">
            <input type="text" name="username" placeholder="Username" required value="<?php echo htmlspecialchars($username ?? '', ENT_QUOTES); ?>">
            <?php if (isset($errors['username'])): ?>
                <div class="error"><?php echo $errors['username']; ?></div>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Password" required id="password">
            <button type="button" class="toggle-password" onclick="togglePassword('password', this)">
                <i class="bi bi-eye" id="eye-icon-password"></i>
            </button>
            <?php if (isset($errors['password'])): ?>
                <div class="error"><?php echo $errors['password']; ?></div>
            <?php endif; ?>
        </div>
        <button type="submit" class="submit-btn">Login</button>
    </form>
    <div class="footer">
        <p>Belum punya akun? <a href="#" style="color: #3A89FF;">Daftar di sini</a></p>
    </div>
</div>

<script>
    function togglePassword(inputId, icon) {
        const passwordInput = document.getElementById(inputId);
        const passwordType = passwordInput.getAttribute("type") === "password" ? "text" : "password";
        passwordInput.setAttribute("type", passwordType);

        // Toggle between eye and eye slash icon
        icon.innerHTML = passwordType === "text" ? '<i class="bi bi-eye-slash"></i>' : '<i class="bi bi-eye"></i>';
    }
</script>

</body>
</html>
