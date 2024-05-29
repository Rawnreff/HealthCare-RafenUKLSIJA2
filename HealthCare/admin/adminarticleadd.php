<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(Admin) Add Article</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Signika:wght@400;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style_add.css">
</head>

<body>
    <div class="regist-container">
        <h1 class="title">Add Article</h1>
        <form class="form" action="adminarticleadd.php" method="POST" enctype="multipart/form-data">
            <label for="username">Username:</label>
            <input type="text" name="username" required><br>

            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png" required><br>

            <label for="title">Title:</label>
            <input type="text" name="title" required><br>

            <label for="information">Information:</label>
            <input type="text" name="information" required><br>

            <label for="content">Content:</label><br>
            <textarea style="height:200px; width:395px;" name="content"></textarea>

            <br>

            <button class="button" type="Submit" name="Submit">Add</button>
        </form>
    </div>

    <?php
    if (isset($_POST['Submit'])) {
        $username = $_POST['username'];
        $title = $_POST['title'];
        $information = $_POST['information'];
        $content = $_POST['content'];

        if ($_FILES["image"]["error"] == 4) {
            echo "<script> alert('Image Does Not Exist'); </script>";
        } else {
            $fileName = $_FILES["image"]["name"];
            $fileSize = $_FILES["image"]["size"];
            $tmpName = $_FILES["image"]["tmp_name"];

            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));
            if (!in_array($imageExtension, $validImageExtension)) {
                echo "<script> alert('Invalid Image Extension'); </script>";
            } else if ($fileSize > 1000000) {
                echo "<script> alert('Image Size Is Too Large'); </script>";
            } else {
                $newImageName = uniqid();
                $newImageName .= '.' . $imageExtension;

                move_uploaded_file($tmpName, 'img/' . $newImageName);

                include_once ("../connect.php");

                $user_query = mysqli_query($mysqli, "SELECT id_user FROM user WHERE username = '$username'");
                $user_row = mysqli_fetch_assoc($user_query);
                $id_user = $user_row['id_user'];

                $query = "SELECT p.id_personalization 
                      FROM personalization p 
                      JOIN user u ON p.id_user = u.id_user 
                      WHERE u.id_user = '$id_user'";
                $result = mysqli_query($mysqli, $query);
                $row = mysqli_fetch_assoc($result);
                $id_personalization = $row['id_personalization'];

                $query_insert = "INSERT INTO article(id_personalization,image,title,information,content)
                             VALUES('$id_personalization','$newImageName','$title','$information','$content')";
                $result_insert = mysqli_query($mysqli, $query_insert);

                if ($result_insert) {
                    header("location:adminarticle.php");
                } else {
                    echo "<script> alert('Failed to add article'); </script>";
                }
            }
        }
    }
    ?>

</body>

</html>