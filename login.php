<?php
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
        $_SESSION['logged_in'] = true;
        header("Location: index.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<link rel="stylesheet" href="style.css">
<div class="container">
    <h2>Login</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
        <p class="error"><?= $error ?></p>
    </form>
</div>
