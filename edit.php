<?php
require 'auth.php';
require 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$user = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn->query("UPDATE users SET username='$username', password='$password' WHERE id=$id");
    header("Location: index.php");
    exit;
}
?>

<link rel="stylesheet" href="style.css">
<div class="container">
    <h2>Edit User</h2>
    <form method="post">
        <input type="text" name="username" value="<?= $user['username'] ?>" required><br>
        <input type="password" name="password" value="<?= $user['password'] ?>" required><br>
        <button type="submit">Update</button>
    </form>
</div>
