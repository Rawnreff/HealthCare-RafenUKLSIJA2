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
        $level = 'user';
        $plan_name = 'free plan';
        $plan_price = '0';
        $status = 'active';
        $activation_date = date('Y-m-d');

        include_once ("../connect.php");

        $check_username_query = "SELECT * FROM user WHERE username = '$username'";
        $check_username_result = mysqli_query($mysqli, $check_username_query);
        $username_exists = mysqli_num_rows($check_username_result) > 0;

        $check_email_query = "SELECT * FROM user WHERE email = '$email'";
        $check_email_result = mysqli_query($mysqli, $check_email_query);
        $email_exists = mysqli_num_rows($check_email_result) > 0;

        if ($username_exists && $email_exists) {
            echo "<script>alert('Both username and email have been used');</script>";
            $_SESSION['name'] = $name;
            $_SESSION['password'] = $password;
            header("location:register.php");
            exit();
        } elseif ($username_exists) {
            echo "<script>alert('The username has been used');</script>";
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header("location:register.php");
            exit();
        } elseif ($email_exists) {
            echo "<script>alert('The email has been used');</script>";
            $_SESSION['name'] = $name;
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header("location:register.php");
            exit();
        } else {
            $result = mysqli_query($mysqli, "INSERT INTO user(name,email,username,password,level) VALUES('$name','$email','$username','$password','$level')");

            if ($result) {
                $id_user = mysqli_insert_id($mysqli);

                $subscription_result = mysqli_query($mysqli, "INSERT INTO subscription(id_user, plan_name, plan_price, status, activation_date) VALUES('$id_user', '$plan_name', '$plan_price', '$status','$activation_date')");

                if ($subscription_result) {
                    echo "Data berhasil ditambahkan ke tabel subscription";
                } else {
                    echo "Gagal menambahkan data ke tabel subscription: " . mysqli_error($mysqli);
                }
            } else {
                echo "Gagal menambahkan data ke tabel user: " . mysqli_error($mysqli);
            }

            header("location:adminuser.php");
            exit();
        }
    }
    ?>

</body>

</html>