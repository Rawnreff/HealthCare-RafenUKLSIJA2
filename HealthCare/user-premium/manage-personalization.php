<?php
session_start();

$mencari = $_SESSION['id_user'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $_SESSION['username']; ?>'s Personalization</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Signika:wght@400;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="style_prempage.css" />
  <script src="script.js"></script>
</head>

<body>

  <!-- navbar -->
  <div class="navbar">
    <div class="logo">
      <h2>Health <span>Care</span></h2>
    </div>
    <div class="navigator">
      <a href="index.php" class="btn">Home</a>
      <a href="daily-workouts.php" class="btn">Daily Workouts</a>
      <a href="healthy-foods.php" class="btn">Healthy Foods</a>
      <a href="sleep-programs.php" class="btn">Sleep Programs</a>
      <a href="personalized-page.php" class="btn">Personalized Contents</a>
      <div class="animation"></div>
    </div>
  </div>

  <!-- banner -->
  <div class="banner-person">
    <div class="text">
      <h1><?php echo $_SESSION['username']; ?>'s <span>Personalization</span></h1>
      <a href="add-personalization.php">Add Personalization</a>
    </div>
    <div class="table-person">
        <table border="1" class="table">
            <tr>
                <th>No.</th>
                <th>Preferences</th>
                <th>Additional Preferences</th>
                <th>Edit</th>
            </tr>
            <?php
            include '../connect.php';
            $query_mysql = mysqli_query($mysqli, "SELECT * FROM personalization WHERE id_user = $mencari") or die(mysqli_error($mysqli));
            $nomor = 1;
            while ($data = mysqli_fetch_array($query_mysql)) {
                ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $data['preferences']; ?></td>
                    <td><?php echo $data['additional_preferences']; ?></td>
                    <td><a href="person-edit.php?id=<?php echo $data['id_personalization']; ?>">Edit</a> </td>
                </tr>
            <?php } ?>
        </table>
    </div>
  </div>

  <!-- footer-->
  <div class="footer">
    <div class="logo-footer">
      <h2>Health <span>Care</span></h2>
    </div>
    <div class="footer-bot">
      <div class="profile-navigation">
        <a href="profile.php" class="profile-link">Profile</a>
        <span>|</span>
        <a href="https://www.instagram.com/raffortless/" class="profile-link">Instagram</a>
      </div>
      <div class="copyright">
        <p>&copy;HEALTHCARE, 2023. All Rights Reserved.</p>
      </div>
    </div>
  </div>
</body>

</html>
