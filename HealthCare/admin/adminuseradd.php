<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(Admin) Add User</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Signika:wght@400;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style_add.css">
</head>

<body>
    <div class="regist-container">
        <h1 class="title">Add User</h1>
        <form class="form" action="adminuseradd.php" method="post">

            <label for="name">Name:</label>
            <input type="text" name="name" required><br>

            <label for="email">E-mail:</label>
            <input type="email" name="email" required><br>

            <label for="username">Username:</label>
            <input type="text" name="username" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" required><br>

            <label for="level">Level:</label>
            <select name="level" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select><br>

            <button class="button" type="Submit" name="Submit">Add</button>
        </form>
    </div>

    <?php
    if (isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $level = $_POST['level'];
        echo ($password);

        include_once ("../connect.php");

        $result = mysqli_query($mysqli, "INSERT INTO user(name,email,username,password,level)
    VALUES('$name','$email','$username','$password','$level')");

        header("location:adminuser.php");
    }
    ?>

</body>

</html>