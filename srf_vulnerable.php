<?php
// بدون اعتبارسنجی توکن CSRF
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Action performed successfully!";
} else {
    echo "<form action='' method='post'>";
    echo "<button type='submit'>Perform Action</button>";
    echo "</form>";
}
?>