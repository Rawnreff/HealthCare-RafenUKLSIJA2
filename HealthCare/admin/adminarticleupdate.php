<?php
include '../connect.php';

if (isset($_GET['id'])) {
    $id_article = $_GET['id'];

    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $information = $_POST['information'];
        $content = $_POST['content'];
        $preferences_type = $_POST['preferences_type'];

        $image = $_POST['existing_image'];
        if ($_FILES["image"]["error"] == 4) {
            $newImageName = $image;
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
            }
        }

        $query = "UPDATE article SET image='$newImageName', title='$title', information='$information', content='$content', preferences_type='$preferences_type' WHERE id_article='$id_article'";
        $result = mysqli_query($mysqli, $query);

        if ($result) {
            header("Location: adminarticle.php");
            exit;
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
    }

    $query = "SELECT * FROM article WHERE id_article='$id_article'";
    $result = mysqli_query($mysqli, $query);
    $data = mysqli_fetch_assoc($result);
} else {
    header("Location: adminarticle.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(Admin) Update Article</title>
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
            <h1 class="title">Update Article</h1>
        </header>
        <section class="form">
            <form method="POST" action="" enctype="multipart/form-data">

                <label for="preferences_type">Preferences Type:</label>
                <select name="preferences_type" id="preferences_type" required>
                    <option value="cardio" <?= $data['preferences_type'] == 'cardio' ? 'selected' : '' ?>>Cardio</option>
                    <option value="strength training" <?= $data['preferences_type'] == 'strength training' ? 'selected' : '' ?>>Strength Training</option>
                    <option value="flexibility" <?= $data['preferences_type'] == 'flexibility' ? 'selected' : '' ?>>Flexibility</option>
                    <option value="balance" <?= $data['preferences_type'] == 'balance' ? 'selected' : '' ?>>Balance</option>
                    <option value="hiit" <?= $data['preferences_type'] == 'hiit' ? 'selected' : '' ?>>High-intensity interval training</option>
                    <option value="low-impact exercises" <?= $data['preferences_type'] == 'low-impact exercises' ? 'selected' : '' ?>>Low-Impact Exercises</option>
                    <option value="mind-body exercises" <?= $data['preferences_type'] == 'mind-body exercises' ? 'selected' : '' ?>>Mind-Body Exercises</option>
                    <option value="endurance training" <?= $data['preferences_type'] == 'endurance training' ? 'selected' : '' ?>>Endurance Training</option>
                    <option value="core strengthening" <?= $data['preferences_type'] == 'core strengthening' ? 'selected' : '' ?>>Core Strengthening</option>
                    <option value="stretching" <?= $data['preferences_type'] == 'stretching' ? 'selected' : '' ?>>Stretching</option>
                    <option value="pilates" <?= $data['preferences_type'] == 'pilates' ? 'selected' : '' ?>>Pilates</option>
                    <option value="yoga" <?= $data['preferences_type'] == 'yoga' ? 'selected' : '' ?>>Yoga</option>
                </select><br>

                <label for="image">Image:</label><br>
                <input style="margin-top: 8px;" type="file" id="image" name="image" accept=".jpg, .jpeg, .png, .webp, .gif"><br><br>

                <label for="title">Title:</label><br>
                <input type="text" name="title" value="<?php echo htmlspecialchars($data['title'], ENT_QUOTES, 'UTF-8'); ?>">

                <label for="information">Information:</label>
                <textarea style="height:40px; width:395px; margin-top: 10px; margin-bottom: 6px;" name="information"><?php echo htmlspecialchars($data['information'], ENT_QUOTES, 'UTF-8'); ?></textarea>

                <label for="content">Content:</label>
                <textarea style="height:200px; width:395px; margin-top: 10px;" name="content"><?php echo htmlspecialchars($data['content'], ENT_QUOTES, 'UTF-8'); ?></textarea>

                <br><br>

                <input type="submit" name="submit" value="Update" class="button">
            </form>
        </section>
    </div>
    <script src="main.js"></script>
</body>

</html>
