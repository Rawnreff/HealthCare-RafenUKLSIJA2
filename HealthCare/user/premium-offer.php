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
  <title>Premium Offer</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Signika:wght@400;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="style_page.css" />
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
      <a href="premium-offer.php" class="btn btn-active">Get Premium?</a>
      <div class="animation start-home5"></div>
    </div>
  </div>

  <!-- banner -->
  <div class="banner">
    <div class="text-offer">
        <h1>HealthCare <span>Premium</span></h1>
      <p class="description">
        We understand that every individual has unique health needs. That's why we are proud to present our Premium Plan, a guaranteed experience that will transform the way you take care of yourself.<br><br>

        At an affordable price, you can choose between two exclusive Premium Plan options: Rp20,000 or Rp50,000.<br><br>

        With the Rp20,000 Premium Plan, enjoy the opportunity to add 2 exclusive personalizations to your health content. However, for those seeking more benefits, the Rp50,000 Premium Plan is the right choice. Get 5 additional personalizations, along with exclusive access to 10 specially selected content pieces designed to enhance your health and well-being.<br><br>

        Don't miss the chance to achieve optimal health with our exclusive personalization service from HealthCare. Join now and start your journey towards better health!
      </p>
      <a href="get-premium.php">Register Premium</a>
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