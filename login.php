<?php
session_start();
include 'db.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $q = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    $user = mysqli_fetch_assoc($q);

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: index.php");
    } else {
        echo "Login gagal";
    }
}
?>

<form method="POST">
    <input name="username" placeholder="username">
    <input name="password" placeholder="password">
    <button name="login">Login</button>
</form>
