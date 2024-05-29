<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(Admin) Add Pillars</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Signika:wght@400;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style_add.css">
</head>

<body>
    <div class="regist-container">
        <h1 class="title">Add Pillars</h1>
        <form class="form" action="adminpillarsadd.php" method="post" enctype="multipart/form-data">
            
            <label for="type">Type:</label>
            <select name="type" required>
                <option value="sleep_programs">Sleep Programs</option>
                <option value="daily_workouts">Daily Workouts</option>
                <option value="healthy_foods">Healthy Foods</option>
            </select><br>

            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png, .webp" required><br>

            <label for="title">Title:</label>
            <input type="text" name="title" required><br>

            <label for="information">Information:</label>
            <textarea style="height:60px; width:392px; margin-top: 10px; margin-bottom: 8px;" name="information"></textarea>

            <label for="content">Content:</label>
            <textarea style="height:200px; width:392px; margin-top: 10px; margin-bottom: 8px;" name="content"></textarea>

            <br>

            <button class="button" type="Submit" name="Submit">Add</button>
        </form>
    </div>

    <?php
    if (isset($_POST['Submit'])) {
        $type = $_POST['type'];
        $title = $_POST['title'];
        $information = $_POST['information'];
        $content = $_POST['content'];

        if ($_FILES["image"]["error"] == 4) {
            echo "<script> alert('Image Does Not Exist'); </script>";
        } else {
            $fileName = $_FILES["image"]["name"];
            $fileSize = $_FILES["image"]["size"];
            $tmpName = $_FILES["image"]["tmp_name"];

            $validImageExtension = ['jpg', 'jpeg', 'png', 'webp'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));
            if (!in_array($imageExtension, $validImageExtension)) {
                echo "<script> alert('Invalid Image Extension'); </script>";
            } else if ($fileSize > 50000000) {
                echo "<script> alert('Image Size Is Too Large'); </script>";
            } else {
                $newImageName = uniqid();
                $newImageName .= '.' . $imageExtension;

                move_uploaded_file($tmpName, 'img-pillars/' . $newImageName);

                include_once ("../connect.php");

                $query_insert = "INSERT INTO pillars(type,image,title,information,content)
                             VALUES('$type','$newImageName','$title','$information','$content')";
                $result_insert = mysqli_query($mysqli, $query_insert);

                if ($result_insert) {
                    header("location:adminpillars.php");
                } else {
                    echo "<script> alert('Failed to add pillars'); </script>";
                }
            }
        }
    }
    ?>

</body>

</html>