<?php
include '../connect.php';

if(isset($_GET['id'])) {
    $id_article = $_GET['id'];

    if(isset($_POST['submit'])) {
        $title = $_POST['title'];
        $information = $_POST['information'];
        $content = $_POST['content'];

        $query = "UPDATE article SET title='$title', information='$information', content='$content' WHERE id_article='$id_article'";
        $result = mysqli_query($mysqli, $query);

        if($result) {
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
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Signika:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link rel="stylesheet" href="style_update.css">
</head>
<body>
    <div class="container">
        <header>
            <h1 class="title">Update Article</h1>
        </header>
        <section class="form">
        <form method="POST" action="">

            <label for="title">Title:</label><br>
            <input type="text" name="title" value="<?php echo $data['title']; ?>">

            <label for="information">Information:</label><br>
            <input type="text" name="information" value="<?php echo $data['information']; ?>">
            
            <label for="content">Content:</label><br><br>
            <textarea style="height:200px; width:395px;" name="content"><?php echo htmlspecialchars($data['content'], ENT_QUOTES, 'UTF-8'); ?></textarea>
                
                <br><br>
                
            <input type="submit" name="submit" value="Update" class="button">
        </form>
        </section>
    </div>
    <script src="main.js"></script>
</body>
</html>
