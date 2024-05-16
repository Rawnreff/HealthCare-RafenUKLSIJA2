<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person Page</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Signika:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link rel="stylesheet" href="style_page.css">
    <script src="main.js"></script>
</head>
<body>
    <header>
        <div class="logo">
            <h2>Health <span>Care</span></h2>
        </div>
        <i class='bx bx-menu' id="menu-icon"></i>
        <ul class="navbar">
        <li><a href="index.php">Home</a></li>
            <li><a href="adminuser.php">User</a></li>
            <li><a href="adminsubs.php">Subscription</a></li>
            <li><a href="adminperson.php" class="btn-active">Personalization</a></li>
            <li><a href="adminarticle.php">Article</a></li>
        </ul>
    </header>
    <section class="user">
    <h1 class="heading">Personalization Data</h1>
    <br>
    <br>
        <a href="adminpersonadd.php" class="btn">Add Personalization</a>
        <br>
        <br>
        <table border="1" class="table">
            <tr>
                <th>No.</th>
                <th>Id Personalization</th>
                <th>Id Subscription</th>
                <th>Id User</th>
                <th>Preferences</th>
                <th>Additional Preferences</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
            <?php
            include '../connect.php';
            $query_mysql = mysqli_query($mysqli, "SELECT * FROM personalization") or die(mysqli_error($mysqli));
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)) { 
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['id_personalization']; ?></td>
                <td><?php echo $data['id_subscription']; ?></td>
                <td><?php echo $data['id_user']; ?></td>
                <td><?php echo $data['preferences']; ?></td>
                <td><?php echo $data['additional_preferences']; ?></td>
                <td><a href="adminpersondelete.php?id=<?php echo $data['id_personalization']; ?>" class="btn-hapus">Delete</a> </td>
                <td><a href="adminpersonupdate.php?id=<?php echo $data['id_personalization']; ?>" class="btn-update">Update</a> </td>
            </tr>
            <?php } ?>
        </table>
        <br>
        <br>
    <a href="../index.php" class="btn">Log Out</a>
    </section>
</body>
</html>
