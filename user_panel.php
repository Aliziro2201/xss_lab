<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="template/style.css">
    <title>User Panel</title>
</head>
<body>


        
            
<?php
$username = "ali@gmail.com";
$pass = "1234";
if ($_SERVER["REQUEST_METHOD"] == "POST" || $_COOKIE["user"] == "true"){

    if (($username == $_POST["login-email"] && $pass == $_POST["login-password"]) || $_COOKIE["user"] == "true"){
        
        if($_COOKIE["user"] == "true"){

        }
        else{
        setcookie("user","true" ,time() + (3600), "/");
        }
?>


    <div class="container">
        <header>
            <h1>User Panel</h1>
            <nav>
                <a href="#about">About</a>
                <a href="#logout">Log Out</a>
            </nav>
        </header>

        <main>
            <section class="user-info">
                <h2>User Information</h2>
                <p>Name: John Doe</p>
                <p>Email: john.doe@example.com</p>
            </section>

            <section class="change-password">
                <h2>Change Password</h2>
                <form action="#" method="post">
                    
                    <label for="new-password">New Password:</label>
                    <input type="password" id="new-password" name="new-password" required>
                    
                    <label for="confirm-password">Confirm New Password:</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                    
                    <button type="submit">Change Password</button>
                </form>
            </section>
        </main>

        <footer>
            <p>&copy; 2025 Your Company Name. All rights reserved.</p>
        </footer>
    </div>
<?php
    }
    }
    else{

    ?>





    <form id="loginForm" class="form" action="." method="post">
                <h2>Login</h2>
                <label for="login-email">Email:</label>
                <input type="email" id="login-email" name="login-email" required>
                
                <label for="login-password">Password:</label>
                <input type="password" id="login-password" name="login-password" required>
                
                <button type="submit">Login</button>
            </form>

<?php
    }
?>
</body>
</html>