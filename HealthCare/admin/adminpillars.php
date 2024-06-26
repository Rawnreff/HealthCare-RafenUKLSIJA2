<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(Admin) Pillars Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Signika:wght@400;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style_main.css">
    <script>
        function confirmDelete(event, id) {
            event.preventDefault();
            if (confirm("Are you sure you want to delete this data?")) {
                window.location.href = 'adminpillarsdelete.php?id=' + id;
            }
        }
    </script>
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
            <li><a href="adminsubs.php" class="btn-nav">Subscription</a></li>
            <li><a href="adminperson.php" class="btn-nav">Personalization</a></li>
            <li><a href="adminarticle.php" class="btn-nav">Article</a></li>
            <li><a href="adminpillars.php" class="btn-active">Pillars</a></li>
        </ul>
    </header>
    <section class="user">
        <h1 class="heading">Pillars Data</h1>
        <br>
        <br>
        <a href="../loginpage.php" class="btn">Log Out</a>
        <a href="adminpillarsadd.php" class="btn">Add Pillars</a>
        <br>
        <br>
        <table border="1" class="table">
            <tr>
                <th>No.</th>
                <th>Type</th>
                <th>Image</th>
                <th>Title</th>
                <th>Information</th>
                <th>Content</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
            <?php
            include '../connect.php';

            // Menghitung total data
            $query_count = mysqli_query($mysqli, "SELECT COUNT(*) as total FROM pillars") or die(mysqli_error($mysqli));
            $count_result = mysqli_fetch_assoc($query_count);
            $total_data = $count_result['total'];

            // Mengambil data pillars dengan urutan descending berdasarkan id_pillars
            $query_mysql = mysqli_query($mysqli, "SELECT * FROM pillars ORDER BY id_pillars DESC") or die(mysqli_error($mysqli));
            
            while ($data = mysqli_fetch_array($query_mysql)) {
                ?>
                <tr>
                    <td><?php echo $total_data--; ?></td>
                    <td><?php echo $data['type']; ?></td>
                    <td><img src="img-pillars/<?php echo $data["image"]; ?>" width="70" title="<?php echo $data['image']; ?>"></td>
                    <td><?php echo $data['title']; ?></td>
                    <td><?php echo $data['information']; ?></td>
                    <td><?php echo $data['content']; ?></td>
                    <td><a href="#" onclick="confirmDelete(event, <?php echo $data['id_pillars']; ?>)" class="btn-hapus">Delete</a></td>
                    <td><a href="adminpillarsupdate.php?id=<?php echo $data['id_pillars']; ?>" class="btn-update">Update</a></td>
                </tr>
            <?php } ?>
        </table>
    </section>
</body>

</html>