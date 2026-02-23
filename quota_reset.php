<?php
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    return;
}

$user_id = $_SESSION['user_id'];

// hitung selisih MENIT langsung di MySQL
// SECOND, MINUTE, HOUR, DAY, MONTH
$q = mysqli_query($conn, "
    SELECT 
        quota_remaining,
        last_quota_update,
        TIMESTAMPDIFF(MINUTE, last_quota_update, NOW()) AS diff_minutes
    FROM users
    WHERE id = $user_id
");

$user = mysqli_fetch_assoc($q);

if (!$user)
    return;

$diff_minutes = (int) $user['diff_minutes'];

if ($diff_minutes <= 0) {
    return;
}

// +3 quota per menit
$quota_add = $diff_minutes * 1;

$max_quota = 30;
$new_quota = $user['quota_remaining'] + $quota_add;

if ($new_quota > $max_quota) {
    $new_quota = $max_quota;
}

mysqli_query($conn, "
    UPDATE users SET
        quota_remaining = $new_quota,
        last_quota_update = NOW()
    WHERE id = $user_id
");
