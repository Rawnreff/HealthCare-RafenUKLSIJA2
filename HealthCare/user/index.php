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
  <title>Home Page</title>
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
      <a href="index.php" class="btn btn-active">Home</a>
      <a href="daily-workouts.php" class="btn">Daily Workouts</a>
      <a href="healthy-foods.php" class="btn">Healthy Foods</a>
      <a href="sleep-programs.php" class="btn">Sleep Programs</a>
      <a href="premium-offer.php" class="btn">Get Premium?</a>
      <div class="animation start-home1"></div>
    </div>
  </div>

  <!-- banner -->
  <div class="banner">
    <div class="text">
      <h1>Health <span>Care</span></h1>
      <p class="description">
        Embarking on a path to well-being involves embracing daily exercise, a balanced diet, and consistent sleep.
        Regular physical activity invigorates the body and sharpens the mind, fostering enhanced productivity. Paired
        with a wholesome diet, it fuels the body, improves mood, sustains energy, and boosts the immune system. A
        consistent sleep routine becomes a cornerstone, facilitating natural recovery and cognitive function. The
        persuasive appeal lies in the promise of a vibrant, energized life, empowering individuals to meet daily demands
        with resilience and savor the richness of each moment through elevated well-being.
      </p>
      <a href="daily-workouts.php">Find out with Daily Workouts</a>
    </div>
    <div class="banner-image">
      <img src="image/healthy-lifestyle-habit-illustration_726237-57.jpg" alt="" />
    </div>
  </div>

  <!-- superior -->
  <div class="superior">
    <div class="superior-text">
      <div class="card">
        <a href="https://youtu.be/IrWwEr5n4eE?si=1DYBOz_F8z3atIif">
          <img class="card-img" src="image/76bf36b24ae49ed25ee943280fc91699.jpg" alt="">
        </a>
        <div class="card-text">
          <h3>Recommendations and Mentoring</h3>
          <p>There are various tips and guidelines for you to lead a healthy lifestyle.</p>
        </div>
      </div>
      <div class="gap-card"></div>
      <div class="card">
        <a href="https://youtu.be/3sEeVJEXTfY?si=0HvfyzHANqEgaoWB">
          <img class="card-img" src="image/Ilustrasi-by-Halodoc-scaled.jpg" alt="">
        </a>
        <div class="card-text">
          <h3>Tutorial Video</h3>
          <p>There are various tutorial videos to support your progress in adopting a good workouts habit.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- motivation -->
  <div class="motivation">
    <div class="motivation-image">
      <img src="image/bodygoal.jpg" alt="" />
    </div>
    <div class="motivation-text">
      <h2>
        Build Your <span> Body Goals </span> And Stop Your <span>Bad Behaviour</span>
      </h2>
      <hr>
      <div class="image">
        <a href="daily-workouts.php">
          <img src="image/workout.jpg" alt="" />
        </a>
        <a href="healthy-foods.php">
          <img src="image/healthy_breakfast.jpg" alt="" />
        </a>
        <a href="sleep-programs.php">
          <img src="image/sleep.jpg" alt="" />
        </a>
      </div>
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