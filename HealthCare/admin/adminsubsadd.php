<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(Admin) Add Subscription</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Signika:wght@400;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style_add.css">
</head>

<body>
    <div class="regist-container">
        <h1 class="title">Add Subscription</h1>
        <form class="form" action="adminsubsadd.php" method="post">

            <label for="username">Username:</label>
            <input type="text" name="username" required><br>

            <label for="plan_name">Plan Name:</label>
            <select name="plan_name" required>
                <option value="free plan">Free Plan</option>
                <option value="premium plan">Premium</option>
            </select><br>

            <label for="plan_price">Plan Price:</label>
            <select requiredid id="plan_price" name="plan_price">
                <option value="0">Free</option>
                <option value="20000">Rp20.000,-</option>
                <option value="50000">Rp50.000,-</option>
            </select>

            <label for="status">Status:</label>
            <select name="status" required>
                <option value="active">Active</option>
                <option value="inactive">Inacive</option>
            </select><br>

            <button class="button" type="Submit" name="Submit">Add</button>
        </form>
    </div>

    <?php
include_once ("../connect.php");

function getUsernameId($username, $mysqli) {
    $query = "SELECT id_user FROM user WHERE username = '$username'";
    $result = mysqli_query($mysqli, $query);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row['id_user'];
    } else {
        return null;
    }
}

if (isset($_POST['Submit'])) {
    $username = $_POST['username'];
    $plan_name = $_POST['plan_name'];
    $plan_price = $_POST['plan_price'];
    $status = $_POST['status'];
    $activation_date = date('Y-m-d');

    $id_user = getUsernameId($username, $mysqli);

    if($id_user !== null) {
        $result = mysqli_query($mysqli, "INSERT INTO subscription(id_user,plan_name,plan_price,status,activation_date)
            VALUES('$id_user','$plan_name','$plan_price','$status','$activation_date')");

        if ($result) {
            header("location:adminsubs.php");
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