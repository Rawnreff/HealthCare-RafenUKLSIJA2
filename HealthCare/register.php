<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style_reg.css">
</head>
<body>
    <div class="regist-container">
        <h1 class="title">Registration</h1>
        <form class="form" action="register.php" method="post">

            <label for="name">Name:</label>
            <input type="text" name="name" required><br>
            
            <label for="email">E-mail:</label>
            <input type="text" name="email" required><br>
    
            <label for="username">Username:</label>
            <input type="text" name="username" required><br>
    
            <label for="password">Password:</label>
            <input type="password" name="password" required><br>
    
            <button class="button" type="Submit" name="Submit">Register</button>
        </form>
        <div class="regist">
            <p>Do you have an account? <a href="login.php">Login here</a></p>
        </div>
    </div>

<?php
if (isset($_POST['Submit'])) {
    $name= $_POST['name'];
    $email= $_POST['email'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $level= 'user';
    echo($password);

    include_once("connect.php");

    $result = mysqli_query($mysqli,"INSERT INTO user(name,email,username,password,level)
    VALUES('$name','$email','$username','$password','$level')");

    header("location:index.php");
}
?>

</body>
</html>
