<?php
include 'db.php';
include 'quota_reset.php';

$user_id = $_SESSION['user_id'];

$q = mysqli_query($conn, "SELECT quota_remaining FROM users WHERE id=$user_id");
$user = mysqli_fetch_assoc($q);
?>