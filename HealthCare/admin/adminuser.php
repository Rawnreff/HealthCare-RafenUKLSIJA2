<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(Admin) User Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Signika:wght@400;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style_main.css">
    <script src="main.js"></script>
</head>

<body>
    <header>
        <div class="logo">
            <h2>Health <span>Care</span></h2>
        </div>
        <i class='bx bx-menu' id="menu-icon"></i>
        <ul class="navbar">
            <li><a href="index.php" class="btn-nav">Home</a></li>
            <li><a href="adminuser.php" class="btn-active">User</a></li>
            <li><a href="adminsubs.php" class="btn-nav">Subscription</a></li>
            <li><a href="adminperson.php" class="btn-nav">Personalization</a></li>
            <li><a href="adminarticle.php" class="btn-nav">Article</a></li>
        </ul>
    </header>
    <section class="user">
        <h1 class="heading">User Data</h1>
        <br>
        <br>
        <a href="adminuseradd.php" class="btn">Add User</a>
        <br>
        <br>
        <table border="1" class="table">
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Level</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
            <?php
            include '../connect.php';
            $query_mysql = mysqli_query($mysqli, "SELECT * FROM user") or die(mysqli_error($mysqli));
            $nomor = 1;
            while ($data = mysqli_fetch_array($query_mysql)) {
                ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['username']; ?></td>
                    <td><?php echo $data['password']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['level']; ?></td>
                    <td><a href="adminuserdelete.php?id=<?php echo $data['id_user']; ?>" class="btn-hapus">Delete</a> </td>
                    <td><a href="adminuserupdate.php?id=<?php echo $data['id_user']; ?>" class="btn-update">Update</a> </td>
                </tr>
            <?php } ?>
        </table>
        <br>
        <br>
        <a href="../loginpage.php" class="btn">Log Out</a>
    </section>
</body>

</html>