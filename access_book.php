<?php
include 'db.php';
session_start();

$user_id = $_SESSION['user_id'];

$q = mysqli_query($conn, "SELECT quota_remaining FROM users WHERE id=$user_id");
$user = mysqli_fetch_assoc($q);

if ($user['quota_remaining'] < 5) {
    echo "Quota tidak cukup!";
    exit;
}

mysqli_query($conn, "
    UPDATE users SET quota_remaining = quota_remaining - 5
    WHERE id=$user_id
");

header("Location: Sejarah_Book.php");
