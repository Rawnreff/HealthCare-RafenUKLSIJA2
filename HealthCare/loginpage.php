<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="style_log.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <h1 class="title">Log in</h1>
        <form class="form" action="login.php" method="post">
            <label for="email">E-mail:</label>
            <input type="text" id="email" name="email">

            <h6 style="display: flex; justify-content: center; margin-top: -1px; margin-bottom: 0px;">or</h6>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <a href="login.php">
                <button class="button">Login</button>
            </a>
        </form>
        <div class="regist">
            <a href="register.php">Register</a> <div class="gap"></div> <a href="#">Forgot Password</a>
        </div>
    </div>
</body>
</html>