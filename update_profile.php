<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}

// دریافت اطلاعات کاربر
$bio = $_POST['bio'];

// نمایش اطلاعات کاربر (آسیب‌پذیری XSS)
echo "<h1>Your Bio:</h1>";
echo "<p>" . $bio . "</p>";
echo "<a href='profile.php'>Back to Profile</a>";
?>