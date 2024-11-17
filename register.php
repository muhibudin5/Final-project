<?php
$errors = [];
$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Validasi sederhana
    if (empty($name)) {
        $errors['name'] = "Name is required";
    }

    if (empty($username)) {
        $errors['username'] = "Username is required";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format";
    }

    if (strlen($password) < 6) {
        $errors['password'] = "Password must be at least 6 characters";
    }

    if ($password !== $confirmPassword) {
        $errors['confirmPassword'] = "Passwords do not match";
    }

    // Sementara tidak ada koneksi ke database
    if (empty($errors)) {
        // Hash password before saving to the database
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        // Simulate a successful registration (replace with database logic)
        $successMessage = "Registration successful!";
        
        // Here you would typically save the user data to the database
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register-style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
    <img src="layout/img/logo0.png" alt="Logo" class="logo">
    
    <?php if ($successMessage): ?>
        <div class="success"><?php echo $successMessage; ?></div>
    <?php endif; ?>

    <form class="register-form" method="POST">
        <div class="form-group">
            <input type="text" name="name" placeholder="Name" required value="<?php echo htmlspecialchars($name ?? '', ENT_QUOTES); ?>">
            <?php if (isset($errors['name'])): ?>
                <div class="error"><?php echo $errors['name']; ?></div>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <input type="text" name="username" placeholder="Username" required value="<?php echo htmlspecialchars($username ?? '', ENT_QUOTES); ?>">
            <?php if (isset($errors['username'])): ?>
                <div class="error"><?php echo $errors['username']; ?></div>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Email" required value="<?php echo htmlspecialchars($email ?? '', ENT_QUOTES); ?>">
            <?php if (isset($errors['email'])): ?>
                <div class="error"><?php echo $errors['email']; ?></div>
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
        <div class="form-group">
            <input type="password" name="confirmPassword" placeholder="Confirm Password" required id="confirm-password">
            <button type="button" class="toggle-password" onclick="togglePassword('confirm-password', this)">
                <i class="bi bi-eye" id="eye-icon-confirm-password"></i>
            </button>
            <?php if (isset($errors['confirmPassword'])): ?>
                <div class="error"><?php echo $errors['confirmPassword']; ?></div>
            <?php endif; ?>
        </div>
        <button type="submit" class="submit-btn">Register</button>
    </form>
    <div class="footer">
        <p>Sudah punya akun? <a href="#" style="color: #3A89FF;">Masuk di sini</a></p>
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
