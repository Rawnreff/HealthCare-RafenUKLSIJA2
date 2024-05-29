<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(Admin) Subscription Page</title>
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
            <li><a href="adminuser.php" class="btn-nav">User</a></li>
            <li><a href="adminsubs.php" class="btn-active">Subscription</a></li>
            <li><a href="adminperson.php" class="btn-nav">Personalization</a></li>
            <li><a href="adminarticle.php" class="btn-nav">Article</a></li>
        </ul>
    </header>
    <section class="user">
        <h1 class="heading">Subscription Data</h1>
        <br>
        <br>
        <a href="adminsubsadd.php" class="btn">Add Subscription</a>
        <br>
        <br>
        <table border="1" class="table">
            <tr>
                <th>No.</th>
                <th>Username</th>
                <th>Plan Name</th>
                <th>Plan Price</th>
                <th>Status</th>
                <th>Activation Date</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
            <?php
            include '../connect.php';
            $query_mysql = mysqli_query($mysqli, "SELECT subscription.*, user.username 
                                                  FROM subscription 
                                                  JOIN user ON subscription.id_user = user.id_user")
                or die(mysqli_error($mysqli));
            $nomor = 1;
            while ($data = mysqli_fetch_array($query_mysql)) {
                ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $data['username']; ?></td>
                    <td><?php echo $data['plan_name']; ?></td>
                    <td><?php echo $data['plan_price']; ?></td>
                    <td><?php echo $data['status']; ?></td>
                    <td><?php echo $data['activation_date']; ?></td>
                    <td><a href="adminsubsdelete.php?id=<?php echo $data['id_subscription']; ?>"
                            class="btn-hapus">Delete</a> </td>
                    <td><a href="adminsubsupdate.php?id=<?php echo $data['id_subscription']; ?>"
                            class="btn-update">Update</a> </td>
                </tr>
            <?php } ?>
        </table>
        <br>
        <br>
        <a href="../loginpage.php" class="btn">Log Out</a>
    </section>
</body>

</html>