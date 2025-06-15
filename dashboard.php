<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // ورود کاربر
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // اعتبارسنجی ساده (در محیط واقعی باید از پایگاه داده استفاده شود)
    if ($username == 'admin' && $password == 'password') {
        $_SESSION['username'] = $username;
        echo "<h1>Welcome, $username</h1>";
        echo "<a href='profile.php'>Go to your profile</a>";
    } else {
        echo "<h1>Invalid credentials</h1>";
        echo "<a href='index.html'>Try again</a>";
    }
} else {
    echo "Access Denied";
}
?>