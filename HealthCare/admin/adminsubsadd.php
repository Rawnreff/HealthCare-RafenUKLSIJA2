<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Signika:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link rel="stylesheet" href="style_add.css">
</head>
<body>
    <div class="regist-container">
        <h1 class="title">Add Subscription</h1>
        <form class="form" action="adminsubsadd.php" method="post">

            <label for="id_user">Id User:</label>
            <input type="text" name="id_user" required><br>
            
            <label for="plan_name">Plan Name:</label>
            <select name="plan_name" required>
                <option value="premium plan">Premium</option>
                <option value="free plan">Free Plan</option>
            </select><br>

            <label for="plan_price">Plan Price:</label>
            <input type="text" name="plan_price" required><br>
    
            <label for="status">Status:</label>
            <select name="status" required>
                <option value="active">Active</option>
                <option value="inactive">Inacive</option>
            </select><br>

            <button class="button" type="Submit" name="Submit">Add</button>
        </form>
    </div>

<?php
if (isset($_POST['Submit'])) {
    $id_user= $_POST['id_user'];
    $plan_name= $_POST['plan_name'];
    $plan_price= $_POST['plan_price'];
    $status= $_POST['status'];

    include_once("../connect.php");

    $result = mysqli_query($mysqli,"INSERT INTO subscription(id_user,plan_name,plan_price,status)
    VALUES('$id_user','$plan_name','$plan_price','$status')");

    header("location:adminsubs.php");
}
?>

</body>
</html>
