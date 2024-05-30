<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include '../connect.php';
$username = $_SESSION['username'];

$query = "SELECT * FROM user WHERE username = '$username'";
$result = mysqli_query($mysqli, $query);

if (!$result) {
    die("Query Error: " . mysqli_error($mysqli));
}

$userData = mysqli_fetch_assoc($result);

mysqli_close($mysqli);

include '../connect.php';
$id_user = $_SESSION['id_user'];

$query = "SELECT * FROM subscription WHERE id_user = '$id_user'";
$result = mysqli_query($mysqli, $query);

if (!$result) {
    die("Query Error: " . mysqli_error($mysqli));
}

$subsData = mysqli_fetch_assoc($result);

mysqli_close($mysqli);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $_SESSION['username']; ?>'s Profile</title>
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
  <div class="banner">
    <div class="text">
      <h1><?php echo $_SESSION['username']; ?>'s <span>Profile</span></h1>
      <table class="profile-table">
        <tr>
          <th>Name</th>
          <td><?php echo $userData['name']; ?></td>
        </tr>
        <tr>
          <th>Username</th>
          <td><?php echo $userData['username']; ?></td>
        </tr>
        <tr>
          <th>Email</th>
          <td><?php echo $userData['email']; ?></td>
        </tr>
        <tr>
          <th>Password</th>
          <td><?php echo str_repeat('*', strlen($userData['password'])); ?></td>
        </tr>
        <tr>
          <th>Current Plan</th>
          <td><?php echo $subsData['plan_name']; ?></td>
        </tr>
      </table>
      <a href="../loginpage.php">Log Out</a>
      <a href="edit-profile.php?id=<?php echo $userData['id_user']; ?>">Edit Profile</a>
    </div>
  </div>

  <!-- footer-->
  <div class="footer">
    <div class="logo-footer">
      <h2>Health <span>Care</span></h2>
    </div>
    <div class="footer-bot">
      <div class="profile-navigation">
        <a href="index.php" class="profile-link">Home</a>
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