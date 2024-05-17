<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(Admin) Add Personalization</title>
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
        <h1 class="title">Add Your Personalization</h1>
        <form class="form" action="add-personalization.php" method="post">
            
            <label for="id_user">Id User:</label>
            <input type="text" name="id_user" required><br> 

            <label for="id_subscription">Id Subscription:</label>
            <input type="text" name="id_subscription" required><br>
            
            <label for="preferences">Preferences:</label>
            <input type="text" name="preferences" required><br>

            <label for="additional_preferences">Additional Preferences:</label>
            <input type="text" name="additional_preferences" required><br>
    
            <br>

            <button class="button" type="Submit" name="Submit">Add</button>
        </form>
    </div>

<?php
if (isset($_POST['Submit'])) {
    $id_user= $_POST['id_user'];
    $id_subscription= $_POST['id_subscription'];
    $preferences= $_POST['preferences'];
    $additional_preferences= $_POST['additional_preferences'];

    include_once("../connect.php");

    $result = mysqli_query($mysqli,"INSERT INTO personalization(id_subscription,id_user,preferences,additional_preferences)
    VALUES('$id_subscription','$id_user','$preferences','$additional_preferences')");

    header("location:personalized-page.php");
}
?>

</body>
</html>
