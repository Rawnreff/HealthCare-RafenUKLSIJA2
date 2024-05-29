<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(Admin) Add Personalization</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Signika:wght@400;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style_add.css">
</head>

<body>
    <div class="regist-container">
        <h1 class="title">Add Personalization</h1>
        <form class="form" action="adminpersonadd.php" method="post">

            <label for="username">Username:</label>
            <input type="text" name="username" required><br>

            <label for="preferences">Preferences:</label>
            <input type="text" name="preferences" required><br>

            <label for="additional_preferences">Additional Preferences:</label>
            <input type="text" name="additional_preferences" required><br>


            <button class="button" type="Submit" name="Submit">Add</button>
        </form>
    </div>

    <?php
    include_once ("../connect.php");

    function getUsernameId($username, $mysqli)
    {
        $query = "SELECT id_user FROM user WHERE username = '$username'";
        $result = mysqli_query($mysqli, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row['id_user'];
        } else {
            return null;
        }
    }

    if (isset($_POST['Submit'])) {
        $username = $_POST['username'];
        $preferences = $_POST['preferences'];
        $additional_preferences = $_POST['additional_preferences'];

        $id_user = getUsernameId($username, $mysqli);

        if ($id_user !== null) {
            $result = mysqli_query($mysqli, "INSERT INTO personalization(id_user,preferences,additional_preferences)
            VALUES('$id_user','$preferences','$additional_preferences')");

            if ($result) {
                header("location:adminperson.php");
                exit();
            } else {
                echo "Error: " . mysqli_error($mysqli);
            }
        } else {
            echo "Username not found.";
        }
    }
    ?>

</body>

</html>