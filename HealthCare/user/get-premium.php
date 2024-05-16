<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../style_reg.css">
</head>
<body>
    <div class="regist-container">
        <h1 class="title">Premium Registration</h1>
        <form class="form" action="get-premium.php" method="post">

            <label for="plan_price">Price:</label>
            <select name="plan_price" required>
                <option value="20000">Rp20.000,-</option>
                <option value="50000">Rp50.000,-</option>
            </select><br>
    
            <button class="button" type="Submit" name="Submit">Register</button>
        </form>
    </div>

<?php
if (isset($_POST['Submit'])) {
    $id_user= $_POST['id_user'];
    $plan_name= 'premium plan';
    $plan_price= $_POST['plan_price'];
    $status= 'active';

    include_once("../connect.php");

    $result = mysqli_query($mysqli,"INSERT INTO subscription(id_user,plan_name,plan_price,status)
    VALUES('$id_user','$plan_name','$plan_price','$status')");

    header("location:index.php");
}
?>

</body>
</html>
