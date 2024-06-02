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
            <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png, .webp, .gif" required><br>

            <label for="title">Title:</label>
            <input type="text" name="title" required><br>

            <label for="information">Information:</label>
            <textarea style="height:40px; width:392px; margin-top: 10px; margin-bottom: 8px;" name="information"></textarea>

            <label for="content">Content:</label>
            <textarea style="height:200px; width:392px; margin-top: 10px; margin-bottom: 8px;" name="content"></textarea>

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

        $validImageExtension = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));
        if (!in_array($imageExtension, $validImageExtension)) {
            echo "<script> alert('Invalid Image Extension'); </script>";
        } else if ($fileSize > 50000000) {
            echo "<script> alert('Image Size Is Too Large'); </script>";
        } else {
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;

            move_uploaded_file($tmpName, 'img/' . $newImageName);

            include_once ("../connect.php");

            $user_query = mysqli_query($mysqli, "SELECT id_user FROM user WHERE username = '$username'");
            if ($user_query && mysqli_num_rows($user_query) > 0) {
                $user_row = mysqli_fetch_assoc($user_query);
                $id_user = $user_row['id_user'];

                $query_check_personalization = "SELECT COUNT(id_personalization) AS count_personalization 
                                                FROM personalization 
                                                WHERE id_user = '$id_user'";
                $result_check_personalization = mysqli_query($mysqli, $query_check_personalization);
                if ($result_check_personalization && mysqli_num_rows($result_check_personalization) > 0) {
                    $row_check_personalization = mysqli_fetch_assoc($result_check_personalization);
                    $count_personalization = $row_check_personalization['count_personalization'];

                    if ($count_personalization > 1) {
                        $query_get_unused_personalization = "SELECT p.id_personalization 
                                                            FROM personalization p 
                                                            LEFT JOIN article a ON p.id_personalization = a.id_personalization 
                                                            WHERE p.id_user = '$id_user' 
                                                            GROUP BY p.id_personalization 
                                                            HAVING COUNT(a.id_personalization) < 2";
                        $result_get_unused_personalization = mysqli_query($mysqli, $query_get_unused_personalization);
                        if ($result_get_unused_personalization && mysqli_num_rows($result_get_unused_personalization) > 0) {
                            $row_get_unused_personalization = mysqli_fetch_assoc($result_get_unused_personalization);
                            $id_personalization = $row_get_unused_personalization['id_personalization'];
                        } else {
                            echo "<script> alert('Maximum articles amount reached'); </script>";
                            exit();
                        }
                    } else {
                        $query_get_personalization = "SELECT id_personalization 
                                                    FROM personalization 
                                                    WHERE id_user = '$id_user'";
                        $result_get_personalization = mysqli_query($mysqli, $query_get_personalization);
                        if ($result_get_personalization && mysqli_num_rows($result_get_personalization) > 0) {
                            $row_get_personalization = mysqli_fetch_assoc($result_get_personalization);
                            $id_personalization = $row_get_personalization['id_personalization'];
                        } else {
                            echo "<script> alert('Personalization not found'); </script>";
                            exit();
                        }
                    }

                    $query_insert = "INSERT INTO article(id_personalization,image,title,information,content)
                                    VALUES('$id_personalization','$newImageName','$title','$information','$content')";
                    $result_insert = mysqli_query($mysqli, $query_insert);

                    if ($result_insert) {
                        header("location:adminarticle.php");
                    } else {
                        echo "<script> alert('Failed to add article'); </script>";
                    }
                } else {
                    echo "<script> alert('Failed to check personalization count'); </script>";
                }
            } else {
                echo "<script> alert('User not found'); </script>";
            }
        }
    }
}
?>

</body>

</html>