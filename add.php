<?php
require 'auth.php';
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn->query("INSERT INTO users (username, password) VALUES ('$username', '$password')");
    header("Location: index.php");
    exit;
}
?>

<link rel="stylesheet" href="style.css">
<div class="container">
    <h2>Tambah User</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Simpan</button>
    </form>
</div>
  