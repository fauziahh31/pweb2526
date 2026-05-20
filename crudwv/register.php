<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

<div class="center-page">
    <div class="login-box">

        <img src="assets/logo.jpg" class="logo">

        <h2>REGISTER</h2>

        <form method="post" action="proses_register.php">

            Username
            <input type="text" name="username" required>

            Password
            <input type="password" name="password" required>

            <button type="submit" name="register">DAFTAR</button>

        </form>

        <p>Sudah punya akun? <a href="login.php">Login</a></p>

    </div>
</div>

</body>
</html>