<?php
include '../connect.php';

if (isset($_GET['id'])) {
    $id_personalization = $_GET['id'];

    if (isset($_POST['submit'])) {
        $preferences = $_POST['preferences'];
        $additional_preferences = $_POST['additional_preferences'];

        $query = "UPDATE personalization SET preferences='$preferences', additional_preferences='$additional_preferences' WHERE id_personalization='$id_personalization'";
        $result = mysqli_query($mysqli, $query);

        if ($result) {
            header("Location: adminperson.php");
            exit;
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
    }

    $query = "SELECT * FROM personalization WHERE id_personalization='$id_personalization'";
    $result = mysqli_query($mysqli, $query);
    $data = mysqli_fetch_assoc($result);
} else {
    header("Location: adminperson.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(Admin) Update Personalization</title>
    <link rel="icon" type="image/png" href="../logotitle.png">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Signika:wght@400;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style_update.css">
</head>

<body>
    <div class="container">
        <header>
            <h1 class="title">Update Personalization</h1>
        </header>
        <section class="form">
            <form method="POST" action="">

                <label for="preferences">Preferences:</label><br>
                <input type="text" id="preferences" name="preferences" value="<?php echo $data['preferences']; ?>"><br>
                <label for="additional_preferences">Addtional Preferences:</label><br>
                <input type="text" id="additional_preferences" name="additional_preferences"
                    value="<?php echo $data['additional_preferences']; ?>"><br>

                <br>

                <input type="submit" name="submit" value="Update" class="button">
            </form>
        </section>
    </div>
    <script src="main.js"></script>
</body>

</html>