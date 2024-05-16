<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Article</title>
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
        <h1 class="title">Add Article</h1>
        <form class="form" action="adminarticleadd.php" method="post">

            <label for="id_user">Id User:</label>
            <input type="text" name="id_user" required><br>

            <label for="id_personalization">Id Personalization:</label>
            <input type="text" name="id_personalization" required><br>

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
    $id_user= $_POST['id_user'];
    $id_personalization= $_POST['id_personalization'];
    $title= $_POST['title'];
    $information= $_POST['information'];
    $content= $_POST['content'];

    include_once("../connect.php");

    $result = mysqli_query($mysqli,"INSERT INTO article(id_personalization,title,information,content,id_user)
    VALUES('$id_personalization','$title','$information','$content','$id_user')");

    header("location:adminarticle.php");
}
?>

</body>
</html>
